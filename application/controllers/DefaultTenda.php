<?php
/**
 * Created by PhpStorm.
 * User: Andis
 * Date: 15/05/2018
 * Time: 08.09
 */

class DefaultTenda extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Fungsi_Tampilan');
        $this->load->model('ModelCustomer');

    }

    public function index(){
        $data = array(
            'body'      => 'Customer/list',
            'customer'  => $this->ModelCustomer->list_data()->result(),
        );

        $this->load->view('index', $data);
    }

    public function input(){
        $data = array(
            'body'      => 'Customer/input',
            'form'      => 'Customer/form'
        );

        $this->load->view('index', $data);
    }

    public function insert(){
        $data = array(
            'nama' => $this->input->post('nama'),
            'alamat' => $this->input->post('alamat'),
            'no_telp' => $this->input->post('no')
        );
        $this->db->insert('tmst_customer',$data);
        redirect('Customer');
    }

    public function edit(){
        $id = $this->uri->segment(3);
        $data = array(
            'body'      => 'Customer/update',
            'form'      => 'Customer/form',
            'customer'  => $this->ModelCustomer->update($id)->row_array()
        );
        $this->load->view('index', $data);
    }

    public function update(){
        $id = $this->input->post('id');
        $data = array(
            'nama' => $this->input->post('nama'),
            'alamat' => $this->input->post('alamat'),
            'no_telp' => $this->input->post('no')
        );
        $this->db->where('id',$id);
        $this->db->update('tmst_customer',$data);
        redirect('Customer');
    }

    public function delete(){

        $id = $this->input->post('id');
        $this->db->where_in('id', $id);
        $this->db->delete('tmst_customer');
        redirect('Customer');

    }
}