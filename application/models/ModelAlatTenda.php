<?php
/**
 * Created by PhpStorm.
 * User: Andis
 * Date: 01/05/2018
 * Time: 12.59
 */

class ModelAlatTenda extends CI_Model
{
    function list_data(){
        $list = $this->db->get('td_alat_tenda');
        return $list;
    }

    function update($id){
        return $this->db->get_where('td_alat_tenda', array('id'=>$id));
    }
}