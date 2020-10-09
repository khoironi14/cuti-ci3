<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	
	public function index()
	{
		    $this->load->library('form_validation');

		if (isset($_POST['login'])) {
			$this->form_validation->set_rules('username', 'Username', 'required');
$this->form_validation->set_rules('password', 'Password', 'required');
  if ($this->form_validation->run() == TRUE)
                {
			$data=[
				'username'=>$this->input->post('username'),
				'password'=>md5($this->input->post('password'))

			];
			$cek=$this->db->get_where('tb_user',$data);
			if ($cek->num_rows() >0) {
				$view=$cek->row_array();
				$session['id']=$view['id_karyawan'];
				$session['username']=$view['username'];
				$session['level']=$view['level'];
				$session['login']=true;
				$this->session->set_userdata($session);
			redirect('welcome/home');


		}else{
$this->load->view('login');
			
		}
			}else{
				$this->session->set_flashdata('notif','Login Gagal');
			redirect('welcome/index');
			}
		}else{
		$this->load->view('login');

	}
	}

	function home(){
		$login=$this->session->userdata('login');
		if (!isset($login)) {
				redirect('welcome/index');
				
		}
		$data['cuti']=$this->db->select('count(id_cuti) as jumlah')->get_where('tb_cuti',['status'=>1])->row_array();
		$data['tolak']=$this->db->select('count(id_cuti) as jumlah')->get_where('tb_cuti',['status'=>2])->row_array();
		$data['karyawan']=$this->db->select('count(*) as jumlah')->get('tb_karyawan')->row_array();
		$data['content']='home';
		$this->load->view('dashboard',$data);
	}
	function profil(){
$id_karyawan=$this->session->userdata('id');
$data['profil']=$this->db->get_where('tb_karyawan',['id_karyawan'=>$id_karyawan])->row_array();
$data['content']='profil';
		$this->load->view('dashboard',$data);
		
	}
	function ganti_password(){
$id_karyawan=$this->session->userdata('id');
		$lama=md5($this->input->post('password_lama'));
		$baru=md5($this->input->post('password_baru'));
		$cek=$this->db->get_where('tb_user',['password'=>$lama,'id_karyawan'=>$id_karyawan])->num_rows();
		if ($cek >0) {
			$this->db->where('password',$lama);
			$this->db->update('tb_user',['password'=>$baru]);
			$this->session->set_flashdata('berhasil','Password Berhasil diganti');
			redirect('welcome/home');

		}else{

			$this->session->set_flashdata('notif','Password Lama Salah');
			redirect('welcome/profil');
		}

	}

	function log_out(){

$this->session->sess_destroy();
		redirect('welcome/index');

	}
}
