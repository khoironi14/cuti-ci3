<?php
class Unit_kerja extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('Model_departement');
		$login=$this->session->userdata('login');
		if (!isset($login)) {
				redirect('welcome/index');
				
		}
	}

	function index(){

		$data['departement']=$this->Model_departement->view_departement()->result();
		$data['content']='view_departement';
		$this->load->view('dashboard',$data);
	}
	function add(){
		$id_departemen=$this->input->post('id_departemen');
		$data=[
			'nama_unit'=>$this->input->post('departement')

		];
		if ($id_departemen=="") {
			# code...
		
		$this->db->insert('tb_unitkerja',$data);
		$this->session->set_userdata('flash','Simpan');

		}else{

			$this->db->where('id_unit',$id_departemen);
			$this->db->update('tb_unitkerja',$data);
			$this->session->set_userdata('flash','Edit');
		}

		redirect('Unit_kerja');

	}
	function edit($id){

		$data=$this->db->get_where('tb_unitkerja',['id_unit'=>$id])->row_array();
		echo json_encode($data);
	}

	function hapus($id){
$this->db->where('id_unit',$id);
$this->db->delete('tb_unitkerja');
$this->session->set_userdata('flash','Hapus');
redirect('Unit_kerja');

	}
}










?>