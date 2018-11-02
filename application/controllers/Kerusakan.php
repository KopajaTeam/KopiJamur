<?php
/**
 * Created by PhpStorm.
 * User: Andis
 * Date: 01/05/2018
 * Time: 12.28
 */

class Kerusakan extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Fungsi_Tampilan');
        $this->load->model('ModelKerusakan');
        $this->load->model('ModelBarang');

    }

    public function index(){
        $data = array(
            'body'      => 'Kerusakan/daftar_kerusakan',
            'kerusakan'  => $this->ModelKerusakan->list_data()->result(),
        );

        $this->load->view('index', $data);
    }

    public function input(){
        $data = array(
            'body'      => 'Kerusakan/input',
            'form'      => 'Kerusakan/form',
            'barang'    => $this->ModelBarang->list_data()->result()
        );

        $this->load->view('index', $data);
    }

    public function insert(){
        $data = array(
            'keterangan' => $this->input->post('keterangan'),
            'biaya' => $this->input->post('biaya'),
            'tipe' => $this->input->post('tipe'),
            'tanggal' => $this->input->post('tanggal'),
            'tmst_barang_id' => $this->input->post('brg'),
        );

        $this->db->insert('td_kerusakan',$data);
        redirect('Kerusakan');
    }

    public function edit(){
        $id = $this->uri->segment(3);
        $data = array(
            'body'      => 'Kerusakan/update',
            'form'      => 'Kerusakan/form',
            'kerusakan'  => $this->ModelKerusakan->update($id)->row_array(),
            'barang'    => $this->ModelBarang->list_data()->result()
        );
        $this->load->view('index', $data);
    }

    public function update(){
        $id = $this->input->post('id');
        $data = array(
            //field                       //name
            'keterangan' => $this->input->post('keterangan'),
            'biaya' => $this->input->post('biaya'),
            'tipe' => $this->input->post('tipe'),
            'tanggal' => $this->input->post('tanggal')
        );
        $this->db->where('id',$id);
        $this->db->update('td_kerusakan',$data);
        redirect('Kerusakan');
    }
    public function delete(){

        $id = $this->input->post('id');
        $this->db->where_in('id', $id);
        $this->db->delete('td_kerusakan');
        redirect('Kerusakan');

    }
}