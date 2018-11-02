<?php
/**
 * Created by PhpStorm.
 * User: Andis
 * Date: 01/05/2018
 * Time: 12.28
 */

class Barang extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Fungsi_Tampilan');
        $this->load->model('ModelBarang');
        $this->load->model('ModelKategori');
    }

    public function index(){
        $data = array(
            'body'      => 'Barang/daftar_barang',
            'barang'  => $this->ModelBarang->list_data()->result(),
        );

        $this->load->view('index', $data);
    }



    public function input(){
        $data = array(
            'body'      => 'Barang/input',
            'form'      => 'Barang/form',
            'kategori'    => $this->ModelKategori->list_data()->result()
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
                'body'      => 'Barang/input',
                'form'      => 'Barang/form'
            );
            $this->load->view('index', $error);
        }else{
        $data = array(
            'nama_barang' => $this->input->post('nama_barang'),
            'jenis_barang' => $this->input->post('jenis_barang'),
            'harga' => $this->input->post('harga'),
            'jumlah' => $this->input->post('jumlah'),
            'satuan' => $this->input->post('satuan'),
            'keterangan' => $this->input->post('keterangan'),
            'gambar' => $dir.$this->upload->data('file_name'),
            'tmst_kategori_id' => $this->input->post('kategori')

        );
        $this->db->insert('tmst_barang',$data);
        redirect('barang');
        }
    }

    public function edit(){
        $id = $this->uri->segment(3);
        $data = array(
            'body'      => 'Barang/update',
            'form'      => 'Barang/form',
            'barang'  => $this->ModelBarang->update($id)->row_array(),
            'kategori'    => $this->ModelKategori->list_data()->result()
        );
        $this->load->view('index', $data);
    }

    public function update(){
        $id = $this->input->post('id');
        $data = array(
            //field                       //name
            'nama_barang' => $this->input->post('nama_barang'),
            'jenis_barang' => $this->input->post('jenis_barang'),
            'harga' => $this->input->post('harga'),
            'jumlah' => $this->input->post('jumlah'),
            'satuan' => $this->input->post('satuan'),
            'keterangan' => $this->input->post('keterangan'),
            'tmst_kategori_id' => $this->input->post('kategori')
        );
        $this->db->where('id',$id);
        $this->db->update('tmst_barang',$data);
        redirect('Barang');
    }
        public function delete(){

        $id = $this->input->post('id');
        $this->db->where_in('id', $id);
        $this->db->delete('tmst_barang');
        redirect('tmst_barang');

    }
}