<?php
/**
 * Created by PhpStorm.
 * User: Andis
 * Date: 01/05/2018
 * Time: 12.28
 */

class AlatTenda extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Fungsi_Tampilan');
        $this->load->model('ModelAlatTenda');

    }

    public function index(){
        $data = array(
            'body'      => 'AlatTenda/daftar_alat_tenda',
            'alat_tenda'  => $this->ModelAlatTenda->list_data()->result(),
        );

        $this->load->view('index', $data);
    }

    public function input(){
        $data = array(
            'body'      => 'AlatTenda/input',
            'form'      => 'AlatTenda/form'
        );

        $this->load->view('index', $data);
    }

    public function insert(){
        $dir = 'assets/images_upload/';
        $config['upload_path']      = 'assets/image_upload/';
        $config['allowed_types']    = 'jpg|png|jpeg';
        $config['max_size']         = '2048';
            $this->load->library('upload', $config);
            $this->upload->initialize($config); 
        if (!$this->upload->do_upload('gambar')) {
            $error = array(
                'error'     => $this->upload->display_errors(),
                'body'      => 'AlatTenda/input',
                'form'      => 'AlatTenda/form'
            );
            $this->load->view('index', $error);
        }else{
        $data = array(
            'nama' => $this->input->post('nama'),
            'ukuran' => $this->input->post('ukuran'),
            'stok' => $this->input->post('stok'),
            'satuan' => $this->input->post('satuan'),
            'keterangan' => $this->input->post('keterangan'),
            'gambar' => $dir.$this->upload->data('file_name')
        );
        $this->db->insert('td_alat_tenda',$data);
        redirect('AlatTenda');
    }
}

    public function edit(){
        $id = $this->uri->segment(3);
        $data = array(
            'body'      => 'AlatTenda/update',
            'form'      => 'AlatTenda/form',
            'alat_tenda'  => $this->ModelAlatTenda->update($id)->row_array()
        );
        $this->load->view('index', $data);
    }

    public function update(){
        $id = $this->input->post('id');
        $data = array(
            'nama' => $this->input->post('nama'),
            'ukuran' => $this->input->post('ukuran'),
            'stok' => $this->input->post('stok'),
            'satuan' => $this->input->post('satuan'),
            'keterangan' => $this->input->post('keterangan')
        );
        $this->db->where('id',$id);
        $this->db->update('td_alat_tenda',$data);
        redirect('AlatTenda');
    }
    public function delete(){

    $id = $this->input->post('id');
    $this->db->where_in('id', $id);
    $this->db->delete('td_alat_tenda');
    redirect('AlatTenda');

    }
}