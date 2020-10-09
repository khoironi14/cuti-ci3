<?php
/**
 * 
 */
class Model_pengajuan extends CI_Model
{
	
	function view_status(){
		$level=$this->session->userdata('level');
		$id_karyawan=$this->session->userdata('id');
		if ($level==1) {
			# code...
		

		return $this->db
		->join('tb_karyawan','tb_cuti.id_karyawan=tb_karyawan.id_karyawan')
		->join('tb_jenis_cuti','tb_cuti.id_jenis=tb_jenis_cuti.id_jenis')
		->get('tb_cuti');

	}else{
return $this->db
		->join('tb_karyawan','tb_cuti.id_karyawan=tb_karyawan.id_karyawan')
		->join('tb_jenis_cuti','tb_cuti.id_jenis=tb_jenis_cuti.id_jenis')
		->get_where('tb_cuti',['tb_cuti.id_karyawan'=>$id_karyawan]);

	}
	}

	function pegawai(){

		return $this->db->get('tb_karyawan');
	}
}







?>