<?php
/**
 * Created by PhpStorm.
 * User: Andis
 * Date: 01/05/2018
 * Time: 12.59
 */

class ModelTenda extends CI_Model
{
    function list_data(){
        $list = $this->db->get('tmst_tenda');
        return $list;
    }

    function update($id){
        return $this->db->get_where('tmst_tenda', array('id'=>$id));
    }
}