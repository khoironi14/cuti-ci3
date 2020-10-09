<?php
/**
 * 
 */
class Model_jabatan extends CI_Model
{
	
	function view_jabatan(){

		return $this->db->get('tb_jabatan');
	}
}