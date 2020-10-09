<?php
/**
 * 
 */
class Model_jenis extends CI_Model
{
	
	function jenis(){

		return $this->db->get('tb_jenis_cuti');
	}
}