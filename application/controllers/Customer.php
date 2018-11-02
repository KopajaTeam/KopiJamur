<?php
/**
 * Created by PhpStorm.
 * User: Andis
 * Date: 01/05/2018
 * Time: 12.28
 */

class Customer extends CI_Controller
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
        $dir = 'assets/images_upload/';
        $config['upload_path']      = 'assets/image_upload/';
        $config['allowed_types']    = 'jpg|png|jpeg';
        $config['max_size']         = '2048';
            $this->load->library('upload', $config);
            $this->upload->initialize($config); 
        if (!$this->upload->do_upload('gambar')) {
            $error = array(
                'error'     => $this->upload->display_errors(),
                'body'      => 'Customer/input',
                'form'      => 'Customer/form'
            );
            $this->load->view('index', $error);
        }else{
        $data = array(
            'nama' => $this->input->post('nama'),
            'alamat' => $this->input->post('alamat'),
            'no_telp' => $this->input->post('no'),
            'foto_ktp' => $dir.$this->upload->data('foto_ktp')
        );
        $this->db->insert('tmst_customer',$data);
        redirect('Customer');
    }
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
}