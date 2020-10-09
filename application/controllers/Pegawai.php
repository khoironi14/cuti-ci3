<?php
/**
 * 
 */
class Pegawai extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('Model_karyawan');
		$login=$this->session->userdata('login');
		if (!isset($login)) {
				redirect('welcome/index');
				
		}
	}

	function index(){

		$data['karyawan']=$this->Model_karyawan->view_karyawan()->result();
		$data['content']='view_karyawan';
		$this->load->view('dashboard',$data);
	}
	function add_pegawai(){

		if (isset($_POST['simpan'])) {
			$data=[
				'nama_lengkap'=>$this->input->post('nama'),
				'alamat'=>$this->input->post('alamat'),
				'kota'=>$this->input->post('kota'),
				'jk'=>$this->input->post('jk'),
				'email'=>$this->input->post('email'),
				'nip'=>$this->input->post('nip'),
				'golongan'=>$this->input->post('golongan'),
				'id_jabatan'=>$this->input->post('jabatan'),
				'id_pendidikan'=>$this->input->post('pendidikan')
				

			];
			$this->db->insert('tb_karyawan',$data);
			if ($this->db->affected_rows()) {
				$query=$this->db->order_by('id_karyawan','desc')->get('tb_karyawan')->row_array();
				$id_karyawan=$query['id_karyawan'];
				$user=[

				'username'=>$this->input->post('username'),
				'password'=>md5($this->input->post('password')),
				'level'=>$this->input->post('level'),
			'id_karyawan'=>$id_karyawan

				];
				$this->db->insert('tb_user',$user);
				$this->session->set_userdata('flash','Simpan');
				redirect('pegawai/index');

			}

		}else{
	$data['unit']=$this->Model_karyawan->unit_kerja()->result_array();
	$data['pendidikan']=$this->Model_karyawan->pendidikan()->result_array();
	$data['jabatan']=$this->Model_karyawan->jabatan()->result_array();
	$data['content']='add_karyawan';
		$this->load->view('dashboard',$data);

		}
	}

	function edit_pegawai(){

		if (isset($_POST['simpan'])) {
			$idk=$this->input->post('id_karyawan');
			$data=[
				'nama_lengkap'=>$this->input->post('nama'),
				'alamat'=>$this->input->post('alamat'),
				'kota'=>$this->input->post('kota'),
				'jk'=>$this->input->post('jk'),
				'email'=>$this->input->post('email'),
				'nip'=>$this->input->post('nip'),
				'golongan'=>$this->input->post('golongan'),
				'id_jabatan'=>$this->input->post('jabatan'),
				'id_pendidikan'=>$this->input->post('pendidikan')
				

			];
			$this->db->where('id_karyawan',$idk);
			$this->db->update('tb_karyawan',$data);
			if ($this->db->affected_rows()) {
				//$query=$this->db->order_by('id_karyawan','desc')->get('tb_karyawan')->row_array();
				//$id_karyawan=$query['id_karyawan'];
				$user=[

				'username'=>$this->input->post('username'),
				
				'level'=>$this->input->post('level'),
			//'id_karyawan'=>$id_karyawan

				];
				$this->db->where('id_karyawan',$idk);
				$this->db->update('tb_user',$user);
				$this->session->set_userdata('flash','Simpan');
				redirect('pegawai/index');

			}

		}else{
			$id=$this->uri->segment(3);
	$data['edit']=$this->db
->join('tb_user','tb_karyawan.id_karyawan=tb_user.id_karyawan')
->get_where('tb_karyawan',['tb_karyawan.id_karyawan'=>$id])->row_array();
$data['unit']=$this->Model_karyawan->unit_kerja()->result_array();
	$data['pendidikan']=$this->Model_karyawan->pendidikan()->result_array();
	$data['jabatan']=$this->Model_karyawan->jabatan()->result_array();
$data['content']='edit_karyawan';
		$this->load->view('dashboard',$data);

		}
	}

	function hapus($id){
$this->db->where('id_karyawan',$id);
$this->db->delete('tb_karyawan');
$this->db->where('id_karyawan',$id);
$this->db->delete('tb_user');
$this->session->set_userdata('flash','Hapus');
				redirect('pegawai/index');
	}
}