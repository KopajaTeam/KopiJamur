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
}