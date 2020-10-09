<?php
/**
 * 
 */
class Laporan extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('Model_laporan');
	}
	function index(){
		if (isset($_POST['cari'])) {
			$dari=$this->input->post('dari_tanggal');
			$ke=$this->input->post('ke_tanggal');
			$data['laporan']=$this->db
	->where('dari_tanggal BETWEEN "'. date('Y-m-d', strtotime($dari)). '" and "'. date('Y-m-d', strtotime($ke)).'"')
		->join('tb_karyawan','tb_karyawan.id_karyawan=tb_cuti.id_karyawan')
		->join('tb_unitkerja','tb_unitkerja.id_unit=tb_karyawan.id_unit')
->join('tb_jabatan','tb_jabatan.id_jabatan=tb_karyawan.id_jabatan')
->join('tb_jenis_cuti','tb_jenis_cuti.id_jenis=tb_cuti.id_jenis')
		->get('tb_cuti')->result_array();

		foreach ($data['laporan'] as $row) {
			$id_penugasan=$row['id_penugasan'];
			$data['penugasan']=$this->db->get_where('tb_karyawan',['id_karyawan'=>$id_penugasan])->result_array();
		}


		}else{



		$data['laporan']=$this->db
		->join('tb_karyawan','tb_karyawan.id_karyawan=tb_cuti.id_karyawan')
		->join('tb_unitkerja','tb_unitkerja.id_unit=tb_karyawan.id_unit')
->join('tb_jabatan','tb_jabatan.id_jabatan=tb_karyawan.id_jabatan')
->join('tb_jenis_cuti','tb_jenis_cuti.id_jenis=tb_cuti.id_jenis')
		->get('tb_cuti')->result_array();

		foreach ($data['laporan'] as $row) {
			$id_penugasan=$row['id_penugasan'];
			$data['penugasan']=$this->db->get_where('tb_karyawan',['id_karyawan'=>$id_penugasan])->result_array();
		}

	}
		$data['content']='laporan_cuti';
		$this->load->view('dashboard',$data);

		
	}

	function print($dari=false,$ke=false){
if ($dari==false && $ke==false) {
	$data['laporan']=$this->db
		->join('tb_karyawan','tb_karyawan.id_karyawan=tb_cuti.id_karyawan')
		->join('tb_unitkerja','tb_unitkerja.id_unit=tb_karyawan.id_unit')
->join('tb_jabatan','tb_jabatan.id_jabatan=tb_karyawan.id_jabatan')
->join('tb_jenis_cuti','tb_jenis_cuti.id_jenis=tb_cuti.id_jenis')
		->get('tb_cuti')->result_array();
		foreach ($data['laporan'] as $row) {
			$id_penugasan=$row['id_penugasan'];
			$data['penugasan']=$this->db->get_where('tb_karyawan',['id_karyawan'=>$id_penugasan])->result_array();
		}
		
		$mpdf = new \Mpdf\Mpdf();
        $html = $this->load->view('cetak_laporan',$data,true);
        $mpdf->WriteHTML($html);
        $mpdf->Output();
}else{


}

	}
}







?>