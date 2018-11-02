<?php
/**
 * Created by PhpStorm.
 * User: Andis
 * Date: 01/05/2018
 * Time: 12.28
 */

class Penyewaan extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Fungsi_Tampilan');
        $this->load->model('ModelBarang');
        $this->load->model('ModelTenda');

    }

    public function index(){
        $data = array(
            'body'      => 'Penyewaan/daftar_penyewaan',
            'barang' => $this->ModelBarang->list_data()->result(),
        );

        $this->load->view('index', $data);
    }

    public function input(){
        $data = array(
            'body'      => 'Penyewaan/input',
            'form'      => 'Penyewaan/form',
            'barang'    => $this->ModelBarang->list_data()->result()
        );

        $this->load->view('index', $data);
    }

    public function insert(){
        $data = array(
            'tgl_sewa' => $this->input->post('tgl_sewa'),
            'tgl_kembali' => $this->input->post('tgl_kembali'),
            'alamat' => $this->input->post('alamat'),
            'tmst_barang_id' => $this->input->post('barang'),
        );
        $this->db->insert('td_penyewaan',$data);
        redirect('Penyewaan');
    }

        public function input_barang_tenda(){
        $data = array(
            'body'      => 'Penyewaan/input_barang_dan_tenda',
            'barang'    => $this->ModelBarang->list_data()->result(),
            'tenda'  => $this->ModelTenda->list_data()->result(),
        );

        $this->load->view('index', $data);
    }

        public function insert_barang_tenda(){
        $data = array(
            'tmst_barang_id' => $this->input->post('barang'),
            'td_penyewaan' => $this->input->post('barang'),
            'td_alat_tenda' => $this->input->post('barang'),
            'tmst_tenda' => $this->input->post('barang'),
            'td_penyewaan_no_penyewaan' => $this->input->post('barang'),

        );
        $this->db->insert('td_penyewaan',$data);
        redirect('Penyewaan');
    }

}