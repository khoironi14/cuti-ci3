<?php
/**
 * 
 */
class Pengajuan_cuti extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('Model_pengajuan');
		$this->load->helper('download');
		//$this->load->library('pdf');
		$login=$this->session->userdata('login');
		if (!isset($login)) {
				redirect('welcome/index');
				
		}
	}
	function index(){
		if (isset($_POST['simpan'])) {
		//	$config['upload_path']          = './assets/gambar';
   // $config['allowed_types']        = 'pdf';
   // $config['max_size']             = 200048;
   //// $config['max_width']            = 200048;
    //$config['max_height']           = 200048;
 
   // $this->load->library('upload', $config);
 
 //// $b1= $this->upload->do_upload('berkas_1');
  // $berkas_1=$this->upload->data();
  // $b2= $this->upload->do_upload('berkas_2');
   //$berkas_2=$this->upload->data();
			$data=[
				'id_karyawan'=>$this->session->userdata('id'),
				'id_jenis'=>$this->input->post('type'),
				'dari_tanggal'=>$this->input->post('dari_anggal'),
				'ke_tanggal'=>$this->input->post('ke_anggal'),
				'deskripsi'=>$this->input->post('deskripsi'),
				'id_penugasan'=>$this->input->post('penugasan'),
				'pekerjaan'=>$this->input->post('pekerjaan')
				//'berkas_1'=>$berkas_1['file_name'],
				//'berkas_2'=>$berkas_2['file_name']

			];
			$this->db->insert('tb_cuti',$data);
			$this->session->set_flashdata('flash','Simpan');
			redirect('pengajuan_cuti/view_statuscuti');
			
		}else{
			$data['pegawai']=$this->Model_pengajuan->pegawai()->result_array();
			$data['type']=$this->db->get('tb_jenis_cuti')->result();
			$data['content']='pengajuan_cuti';
			$this->load->view('dashboard',$data);
		}
	}

	function view_statuscuti(){

		$data['cuti']=$this->Model_pengajuan->view_status()->result();
		$data['content']='view_status_cuti';
		$this->load->view('dashboard',$data);
	}

	function status($id,$status){
$this->db->where('id_cuti',$id);
$this->db->update('tb_cuti',['status'=>$status]);
$this->session->set_flashdata('flash','Perbarui');
			redirect('pengajuan_cuti/view_statuscuti');

	}
	function hapus($id){

		$this->db->where('id_cuti',$id);
		$this->db->delete('tb_cuti');
		$this->session->set_flashdata('flash','Hapus');
			redirect('pengajuan_cuti/view_statuscuti');
	}

	function detail($id_cuti){

		$data['cuti']=$this->db
		->join('tb_karyawan','tb_cuti.id_karyawan=tb_karyawan.id_karyawan')
		->join('tb_jenis_cuti','tb_cuti.id_jenis=tb_jenis_cuti.id_jenis')
		->get_where('tb_cuti',['id_cuti'=>$id_cuti])->result();
		$data['content']='detail_cuti';
		$this->load->view('dashboard',$data);
	}
	function download_berkas1($id){

		force_download('assets/gambar/'.$id.'',NULL);
	}
	function download_berkas2($id){
force_download('assets/gambar/'.$id.'',NULL);

	}
	function cetak_surat($id_karyawan){

		$data['surat']=$this->db
		->join('tb_karyawan','tb_cuti.id_karyawan=tb_karyawan.id_karyawan')
		->join('tb_jabatan','tb_jabatan.id_jabatan=tb_karyawan.id_jabatan')
		->join('tb_unitkerja','tb_unitkerja.id_unit=tb_karyawan.id_unit')
		->join('tb_jenis_cuti','tb_jenis_cuti.id_jenis=tb_cuti.id_jenis')
		->get_where('tb_cuti',['nip'=>$id_karyawan])->row_array();
		 //$this->pdf->setPaper('A4', 'potrait');
   // $this->pdf->filename = "Surat Cuti.pdf";
   // $this->pdf->load_view('cetak_surat', $data);
		$id_penugasan=$data['surat']['id_penugasan'];
		$data['penugasan']=$this->db
		->join('tb_jabatan','tb_karyawan.id_jabatan=tb_jabatan.id_jabatan')
		->join('tb_unitkerja','tb_karyawan.id_unit=tb_unitkerja.id_unit')
		->get_where('tb_karyawan',['id_karyawan'=>$id_penugasan])->row_array();
		$this->load->view('cetak_surat',$data);
		

	}
}











?>