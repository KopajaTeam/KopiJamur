<?php
/**
 * Created by PhpStorm.
 * User: Andis
 * Date: 01/05/2018
 * Time: 12.28
 */

class Kurir extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Fungsi_Tampilan');
        $this->load->model('ModelKurir');

    }

    public function index(){
        $data = array(
            'body'      => 'Kurir/daftar_kurir',
            'kurir'  => $this->ModelKurir->list_data()->result(),
        );

        $this->load->view('index', $data);
    }

    public function input(){
        $data = array(
            'body'      => 'Kurir/input',
            'form'      => 'Kurir/form'
        );

        $this->load->view('index', $data);
    }

    public function insert(){
        $data = array(
            'nama' => $this->input->post('nama'),
            'jenis_kendaraan' => $this->input->post('JenisKendaraan'),
            'plat_no' => $this->input->post('plat')
        );
        $this->db->insert('tmst_kurir',$data);
        redirect('Kurir');
    }

    public function edit(){
        $id = $this->uri->segment(3);
        $data = array(
            'body'      => 'Kurir/update',
            'form'      => 'Kurir/form',
            'kurir'  => $this->ModelKurir->update($id)->row_array()
        );
        $this->load->view('index', $data);
    }

    public function update(){
        $id = $this->input->post('id');
        $data = array(
            //field                       //name
            'nama' => $this->input->post('nama'),
            'jenis_kendaraan' => $this->input->post('JenisKendaraan'),
            'plat_no' => $this->input->post('plat')
        );
        $this->db->where('id',$id);
        $this->db->update('tmst_kurir',$data);
        redirect('Kurir');
    }
    public function delete(){

        $id = $this->input->post('id');
        $this->db->where_in('id', $id);
        $this->db->delete('tmst_kurir');
        redirect('Kurir');

    }
}