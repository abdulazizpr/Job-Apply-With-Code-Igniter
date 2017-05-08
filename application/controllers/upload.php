<?php

if(!defined('BASEPATH')) exit('No direct script access allowed');

class Upload extends CI_Controller{
	
	public function __construct(){
		parent::__construct();
		$this->load->helper('url');
		$this->load->helper('form');
		$this->load->model('employee/employee_model');
	}
	
	public function upload_cv($id_employee){
		$data['employee'] = $this->employee_model->data_employee($id_employee)->row();
		$data['error'] = array('error'=>'');
		//echo $id_employee;
		$this->load->view('cv/form_upload',$data);
	}
	
	public function proses_upload(){
		$config['upload_path'] = './uploads/';
		$config['allowed_types'] = 'pdf';
		$config['max_size'] = '5048';
		$this->load->library('upload', $config);
		
		if (!$this->upload->do_upload()){
			$error = array('error'=>$this->upload->display_errors());
			echo $error['error'];
		}
		else {
			$upload_data = $this->upload->data();
			$upload = array('upload_data' => $upload_data);
			
			$data['cv'] = $upload_data['file_name'];
			$id_employee = $this->input->post('id_employee');
			
			$this->employee_model->update_employee($id_employee,$data);
			
			$hasil = $this->employee_model->data_employee($id_employee)->row();
			
			$action = base_url('web/viewer.html?file=').base_url('uploads/'.$hasil->cv);
			echo "<a class='btn btn-info'  target='_blank' href='".$action."'>Cek  pdf</a>"; 
		}
 }
}