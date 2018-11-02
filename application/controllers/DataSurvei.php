<?php
/**
 * Created by PhpStorm.
 * User: Andis
 * Date: 01/05/2018
 * Time: 12.28
 */

class DataSurvei extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
//        $this->load->model('Fungsi');
        $this->load->model('Fungsi_Tampilan');
        $this->load->model('ModelDataSurvei');
        $this->load->model('ModelPetugas');

    }

    public function index(){
        $data = array(
            'body'      => 'DataSurvei/daftar_data_survei',
            'data_survei'  => $this->ModelDataSurvei->list_data()->result(),
        );

        $this->load->view('index', $data);
    }

    public function input(){
        $data = array(
            'body'      => 'DataSurvei/input',
            'form'      => 'DataSurvei/form',
            'petugas'    => $this->ModelPetugas->list_data()->result()
        );

        $this->load->view('index', $data);
    }

    public function insert(){
        $data = array(
            'tgl_survei' => $this->input->post('tgl_survei'),
            'lokasi' => $this->input->post('lokasi'),
            'luas_lokasi' => $this->input->post('luas_lokasi'),
            'keterangan' => $this->input->post('keterangan'),
            'tmst_petugas_survei_id' => $this->input->post('ptgs'),
        );
        $this->db->insert('td_data_survei',$data);
        redirect('DataSurvei');
    }

    public function edit(){
        $id = $this->uri->segment(3);
        $data = array(
            'body'      => 'DataSurvei/update',
            'form'      => 'DataSurvei/form',
            'data_survei'  => $this->ModelDataSurvei->update($id)->row_array(),
            'petugas'    => $this->ModelPetugas->list_data()->result()
        );
        $this->load->view('index', $data);
    }

    public function update(){
        $id = $this->input->post('id');
        $data = array(
            'tgl_survei' => $this->input->post('tgl_survei'),
            'lokasi' => $this->input->post('lokasi'),
            'luas_lokasi' => $this->input->post('luas_lokasi'),
            'keterangan' => $this->input->post('keterangan'),
            'tmst_petugas_survei_id' => $this->input->post('ptgs')
        );
        $this->db->where('id',$id);
        $this->db->update('td_data_survei',$data);
        redirect('DataSurvei');
    }
    public function delete(){

        $id = $this->input->post('id');
        $this->db->where_in('id', $id);
        $this->db->delete('td_data_survei');
        redirect('DataSurvei');

    }
}