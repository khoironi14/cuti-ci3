<?php
/**
 * 
 */
class Jabatan extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('Model_jabatan');
	}
	function index(){


		$data['jabatan']=$this->Model_jabatan->view_jabatan()->result_array();
		$data['content']='view_jabatan';
		$this->load->view('dashboard',$data);
	}
	function add(){
		$id_jabatan=$this->input->post('id_jabatan');
		$data=[
			'nama_jabatan'=>$this->input->post('jabatan')

		];
		if ($id_jabatan=="") {
			# code...
		
		$this->db->insert('tb_jabatan',$data);
		$this->session->set_userdata('flash','Simpan');
		}else{

			$this->db->where('id_jabatan',$id_jabatan);
			$this->db->update('tb_jabatan',$data);
			$this->session->set_userdata('flash','Edit');
		}

		redirect('jabatan/index');
	}
	function edit($id){

$data=$this->db->get_where('tb_jabatan',['id_jabatan'=>$id])->row_array();
echo json_encode($data);

	}
	function hapus($id){
$this->db->where('id_jabatan',$id);
$this->db->delete('tb_jabatan');
$this->session->set_userdata('flash','Hapus');
redirect('jabatan/index');


	}
}