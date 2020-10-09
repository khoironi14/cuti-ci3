<?php

/**
 * 
 */
class Model_departement extends CI_Model
{
	
	function view_departement(){

		return $this->db->get('tb_unitkerja');
	}
}








?>