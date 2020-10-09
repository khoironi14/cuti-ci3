<?php
/**
 * 
 */
class Model_karyawan extends CI_Model
{
	
	function view_karyawan(){

		return $this->db
		->join('tb_user','tb_karyawan.id_karyawan=tb_user.id_karyawan')
		->get('tb_karyawan');
	}
	function jabatan(){

		return $this->db->get('tb_jabatan');
	}
	function pendidikan(){

		return $this->db->get('tb_pendidikan');
	}
	function unit_kerja(){

		return $this->db->get('tb_unitkerja');
	}
}






?>