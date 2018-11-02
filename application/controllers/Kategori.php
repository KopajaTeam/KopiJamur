<?php
/**
 * Created by PhpStorm.
 * User: Andis
 * Date: 01/05/2018
 * Time: 12.28
 */

class Kategori extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Fungsi_Tampilan');
        $this->load->model('ModelKategori');
        $this->load->model('ModelBarang');

    }

    public function index(){
        $data = array(
            'body'      => 'Kategori/daftar_kategori',
            'kategori'  => $this->ModelKategori->list_data()->result(),
        );
        $this->load->view('index', $data);
    }

    public function input(){
        $data = array(
            'body'      => 'Kategori/input',
            'form'      => 'Kategori/form'
        );

        $this->load->view('index', $data);
    }

    public function insert(){
        $data = array(
            'nama_kategori' => $this->input->post('nama_kategori')
        );
        $this->db->insert('tmst_kategori',$data);
        redirect('Kategori');
    }

    public function edit(){
        $id = $this->uri->segment(3);
        $data = array(
            'body'      => 'Kategori/update',
            'form'      => 'Kategori/form',
            'kategori'  => $this->ModelKategori->update($id)->row_array()
        );
        $this->load->view('index', $data);
    }

    public function update(){
        $id = $this->input->post('id');
        $data = array(
            //field                       //name
            'nama_kategori' => $this->input->post('nama_kategori')
        );
        $this->db->where('id',$id);
        $this->db->update('tmst_kategori',$data);
        redirect('Kategori');
    }
    public function delete(){

        $id = $this->input->post('id');
        $this->db->where_in('id', $id);
        $this->db->delete('tmst_kategori');
        redirect('Kategori');

    }
}