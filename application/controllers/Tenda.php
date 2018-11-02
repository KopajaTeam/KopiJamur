<?php
/**
 * Created by PhpStorm.
 * User: Andis
 * Date: 01/05/2018
 * Time: 12.28
 */

class Tenda extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Fungsi_Tampilan');
        $this->load->model('ModelTenda');
        $this->load->model('ModelAlatTenda');

    }

    public function index(){
        $data = array(
            'body'      => 'Tenda/daftar_tenda',
            'tenda'  => $this->ModelTenda->list_data()->result(),
        );

        $this->load->view('index', $data);
    }

    public function input(){
        $data = array(
            'body'      => 'Tenda/input',
            'form'      => 'Tenda/form'
        );

        $this->load->view('index', $data);
    }

    public function DefaultTenda(){
        $id = $this->uri->segment(3);
        $data = array(
            'body'      => 'Tenda/default',
            'tenda'  => $this->ModelTenda->update($id)->row_array(),
            'alat'  => $this->ModelAlatTenda->list_data()->result(),
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
                'body'      => 'Tenda/input',
                'form'      => 'Tenda/form'
            );
            $this->load->view('index', $error);
        }else{

            $data = array(
                'nama_tenda' => $this->input->post('nama'),
                'ukuran_tenda' => $this->input->post('ukuran'),
                'keterangan' => $this->input->post('ket'),
                'gambar' => $dir.$this->upload->data('file_name')
            );
            $this->db->insert('tmst_tenda',$data);
            redirect('Tenda');
        }
    }

    public function edit(){
        $id = $this->uri->segment(3);
        $data = array(
            'body'      => 'Tenda/update',
            'form'      => 'Tenda/form',
            'tenda'  => $this->ModelTenda->update($id)->row_array()
        );
        $this->load->view('index', $data);
    }

    public function update(){
        $id = $this->input->post('id');
        $data = array(
            'nama_tenda' => $this->input->post('nama'),
            'ukuran_tenda' => $this->input->post('ukuran'),
            'keterangan' => $this->input->post('ket')
        );
        $this->db->where('id',$id);
        $this->db->update('tmst_tenda',$data);
        redirect('Tenda');
    }
    public function delete(){

        $id = $this->input->post('id');
        $this->db->where_in('id', $id);
        $this->db->delete('tmst_tenda');
        redirect('Tenda');

    }
}