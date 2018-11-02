<?php
/**
 * Created by PhpStorm.
 * User: Andis
 * Date: 01/05/2018
 * Time: 12.28
 */

class Petugas_Survei extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Fungsi_Tampilan');
        $this->load->model('ModelPetugas');

    }

    public function index(){
        $data = array(
            'body'      => 'Petugas_Survei/daftar_petugas',
            'petugas'  => $this->ModelPetugas->list_data()->result(),
        );

        $this->load->view('index', $data);
    }



    public function input(){
        $data = array(
            'body'      => 'Petugas_Survei/input',
            'form'      => 'Petugas_Survei/form'
        );

        $this->load->view('index', $data);
    }

    public function insert(){
        $data = array(
            'nama' => $this->input->post('nama'),
            'alamat' => $this->input->post('alamat'),
            'no_telp' => $this->input->post('no')
        );
        $this->db->insert('tmst_petugas_survei',$data);
        redirect('Petugas_Survei');
    }

    public function edit(){
        $id = $this->uri->segment(3);
        $data = array(
            'body'      => 'Petugas_Survei/update',
            'form'      => 'Petugas_Survei/form',
            'petugas'  => $this->ModelPetugas->update($id)->row_array()
        );
        $this->load->view('index', $data);
    }

    public function update(){
        $id = $this->input->post('id');
        $data = array(
            //field                       //name
            'nama' => $this->input->post('nama'),
            'alamat' => $this->input->post('alamat'),
            'no_telp' => $this->input->post('no')
        );
        $this->db->where('id',$id);
        $this->db->update('tmst_petugas_survei',$data);
        redirect('Petugas_Survei');
    }
    public function delete(){

        $id = $this->input->post('id');
        $this->db->where_in('id', $id);
        $this->db->delete('tmst_petugas_survei');
        redirect('Petugas_Survei');

    }
}