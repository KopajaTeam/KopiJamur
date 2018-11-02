<?php
/**
 * Created by PhpStorm.
 * User: Andis
 * Date: 01/05/2018
 * Time: 12.59
 */

class ModelDataSurvei extends CI_Model
{
    function list_data(){
        $list = $this->db->get('td_data_survei');
        return $list;
    }

    function update($id){
        return $this->db->get_where('td_data_survei', array('id'=>$id));
    }
}