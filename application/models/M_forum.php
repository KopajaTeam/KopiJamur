<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class M_forum extends CI_Model
{
	public $table = 'forum';

	function __construct()
    {
        parent::__construct();
    }
       // insert data
    function insert($data)
    {
        $this->db->insert($this->table, $data);
    }

    // update data
    function update( $data)
    {
		$this->db->update($this->table, $data);
        //$this->db->update($this->table, $data);
    }

    // delete data
    function delete($data)
    {
         $this->db->delete($this->table, $data);
       // $this->db->delete($this->table);
    }

}