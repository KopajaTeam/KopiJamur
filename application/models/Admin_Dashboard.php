<?php
/**
 *
 */
class Admin_Dashboard extends CI_Model
{
	public function select($table){
		return $this->db->get($table);
	}

}

 ?>
