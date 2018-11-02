<?php
/**
 * Created by PhpStorm.
 * User: Andis
 * Date: 01/05/2018
 * Time: 12.59
 */

class ModelKurir extends CI_Model
{
    function list_data(){
        $list = $this->db->get('tmst_kurir');
        return $list;
    }

    function update($id){
        return $this->db->get_where('tmst_kurir', array('id'=>$id));
    }
}