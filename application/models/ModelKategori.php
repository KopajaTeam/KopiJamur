<?php
/**
 * Created by PhpStorm.
 * User: Andis
 * Date: 01/05/2018
 * Time: 12.59
 */

class ModelKategori extends CI_Model
{
    function list_data(){
        $list = $this->db->get('tmst_kategori');
        return $list;
    }

    function update($id){
        return $this->db->get_where('tmst_kategori', array('id'=>$id));
    }
}