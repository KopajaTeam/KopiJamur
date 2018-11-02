<?php
/**
 * Created by PhpStorm.
 * User: Andis
 * Date: 01/05/2018
 * Time: 12.59
 */

class ModelKerusakan extends CI_Model
{
    function list_data(){
        $list = $this->db->get('td_kerusakan');
        return $list;
    }

    function update($id){
        return $this->db->get_where('td_kerusakan', array('id'=>$id));
    }
}