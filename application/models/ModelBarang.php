<?php
/**
 * Created by PhpStorm.
 * User: Andis
 * Date: 01/05/2018
 * Time: 12.59
 */

class ModelBarang extends CI_Model
{
    function list_data(){
        $list = $this->db->get('tmst_barang');
        return $list;
    }

    function update($id){
        return $this->db->get_where('tmst_barang', array('id'=>$id));
    }
}