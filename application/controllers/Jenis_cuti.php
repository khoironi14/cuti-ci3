<?php

class Jenis_cuti extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('Model_jenis');
		$login=$this->session->userdata('login');
		if (!isset($login)) {
				redirect('welcome/index');
				
		}
	}

	function index(){

		$data['jenis']=$this->Model_jenis->jenis()->result();
		$data['content']='view_jenis';
		$this->load->view('dashboard',$data);
	}
	function add(){
		$id=$this->input->post('id_jenis');

		$data=[
			'jenis_cuti'=>$this->input->post('jenis_cuti')

		];
		if ($id=="") {
		
		$this->db->insert('tb_jenis_cuti',$data);
		$this->session->set_flashdata('flash','Simpan');
		}else{

			$this->db->where('id_jenis',$id);
			$this->db->update('tb_jenis_cuti',$data);
			$this->session->set_flashdata('flash','Edit');
		}

		redirect('Jenis_cuti/index');
	}

	function edit($id){

		$data=$this->db->get_where('tb_jenis_cuti',['id_jenis'=>$id])->row_array();
		echo json_encode($data);
	}
	function hapus($id){
$this->db->where('id_jenis',$id);
$this->db->delete('tb_jenis_cuti');
$this->session->set_flashdata('flash','Edit');
redirect('Jenis_cuti/index');

	}
}





?>