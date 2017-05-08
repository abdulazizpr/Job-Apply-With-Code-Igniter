<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Employee extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('employee/employee_model');
		$this->load->model('employers/posting_model');
		$this->load->helper(array('form','url'));
		$this->load->library('upload');
		$this->load->library('encrypt');
		$this->load->helper('date');
		$this->load->helper('text');
		$this->load->library('form_validation');
	}
	
	public function index(){
		if($this->session->userdata('log_in_employee')==TRUE){
			$data['employee'] = $this->employee_model->data_employee($this->session->userdata('id_employee'))->row();
			$data['kategori'] = $this->posting_model->list_kategori();
			$this->load->view('employee/home',$data);
		}else{
			$data['message'] = $this->session->flashdata('message');
	    	$data['action'] = 'login/proses_login';
	    	$this->load->view('login_view',$data);
		}
	}

	public function edit_profil($id_employee){
		$this->form_validation->set_rules('nama_lengkap','Nama lengkap','required',array('required'=>'Tidak boleh kosong'));
		$this->form_validation->set_rules('email','Email','required',array('required'=>'Tidak boleh kosong'));
		
		if($this->form_validation->run()==FALSE){
			$data['error'] = array('error'=>'');
			$data['employee'] = $this->employee_model->data_employee($id_employee)->row();
			$this->load->view('employee/form_edit', $data);
		}else{

			$config['upload_path'] = './uploads/';
			$config['allowed_types'] = 'pdf';
			$config['max_size'] = '1000';
			$config['max_width'] = '10240';
			$config['max_height'] = '10250';
			$this->load->library('upload', $config);
			
			$id_employee = $this->session->userdata('id_employee');
			
			// Alternately you can set preferences by calling the initialize function. Useful if you auto-load the class:
			$this->upload->initialize($config);
			if (!$this->upload->do_upload()){
				$data['error'] = array('error'=>$this->upload->display_errors());
				$data['employee'] = $this->employee_model->data_employee($id_employee)->row();
				$this->load->view('employee/form_edit', $data);
			}else{
				$upload_data = $this->upload->data();
				$upload = array('upload_data' => $upload_data);
		
				$data = array(
					"nama_lengkap" => $this->input->post('nama_lengkap'),
					"foto" => $upload['upload_data']['file_name'],
					"alamat" => $this->input->post('alamat'),
					"email" => $this->input->post('email'),
					"deskripsi" => $this->input->post('deskripsi')
				);		
				
				$this->employee_model->update_employee($id_employee, $data);
				redirect(site_url('employee'));				
			} 
		}
	}
	
	public function kategori($id_kategori){
		$data['employee'] = $this->employee_model->data_employee($this->session->userdata('id_employee'))->row();
		$data['posting'] = $this->posting_model->get_by_id_kategori($id_kategori);
		$this->load->view('employee/kategori',$data);
	}
	
}	