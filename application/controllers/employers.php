<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Employers extends CI_Controller {

	function __construct(){
		parent::__construct();
			$this->load->model('employers/employers_model');
			$this->load->model('employers/kategori_model');
			$this->load->model('employers/posting_model');
			$this->load->helper(array('form','url'));
			$this->load->library('upload');
			$this->load->library('encrypt');
			$this->load->helper('date');
			$this->load->helper('text');
			$this->load->library('form_validation');
	}
	
	public function index()
	{
		$login_employers = $this->session->userdata('log_in_employers');
		
		if(!$login_employers){
			$data['message'] = $this->session->flashdata('message');
			$data['action'] = 'login/proses_login';
			$this->load->view('login_view',$data);
		}else{
			$data['employers'] = $this->employers_model->get_perusahaan($this->session->userdata('id_perusahaan'))->row();
			$data['posting'] = $this->posting_model->posting_read_more($this->session->userdata('id_perusahaan'));
			$this->load->view('employers/home',$data);
		}
		
	    	
	}
	
	public function edit_employers($id_perusahaan){
		$data['employers'] = $this->employers_model->get_perusahaan($id_perusahaan)->row();
		$this->load->view('employers/form_edit',$data);
	}
	
	public function proses_edit_employers(){
		$config['upload_path'] = './uploads/';
		$config['allowed_types'] = 'gif|jpg|png';
		$config['max_size'] = '100000000000';
		$config['max_width'] = '1024';
		$config['max_height'] = '768';
		$this->load->library('upload', $config);
		
		$id_perusahaan = $this->session->userdata('id_perusahaan');
		
		// Alternately you can set preferences by calling the initialize function. Useful if you auto-load the class:
		$this->upload->initialize($config);
		if (!$this->upload->do_upload()){
			$error = array('error'=>$this->upload->display_errors());
			echo $error['error'];
		}else{
			$upload_data = $this->upload->data();
			$upload = array('upload_data' => $upload_data);
	
			$data = array(
				"nama_perusahaan" => $this->input->post('nama_perusahaan'),
				"logo_perusahaan" => $upload['upload_data']['file_name'],
				"alamat_perusahaan" => $this->input->post('alamat_perusahaan'),
				"email" => $this->input->post('email'),
				"jenis_bidang_usaha" => $this->input->post('jenis_bidang_usaha')
			);		
			
			$this->employers_model->update_employers($id_perusahaan, $data);
			redirect(site_url('employers'));				
		} 
	}
	
	public function posting_lowongan(){
		$data['kategori'] = $this->kategori_model->tampil_kategori()->result();
		$data['action'] = 'employers/input_posting';
		$data['header'] = 'Posting Job';
		$this->load->view('employers/posting',$data);
	}
	

	public function input_posting(){
		$datestring = " %Y-%m-%d ";
		$data = array(
			'id_perusahaan' => $this->session->userdata('id_perusahaan'),
			'judul' => $this->input->post('judul'),
			'id_kategori' => $this->input->post('id_kategori'),
			'judul' => $this->input->post('judul'),
			'konten' => $this->input->post('konten'),
			'tgl_posting' => mdate($datestring)
		);
		
		$this->posting_model->insert_posting($data);
		redirect(site_url('employers')); 
	}
	
	public function ubah_password($id_perusahaan){
		$data['id_perusahaan'] = $id_perusahaan; 
		$this->load->view('employers/ubah_password',$data);
	}
	
	public function proses_ubah_password(){
		$this->form_validation->set_rules('password_baru','Password baru','required|max_length[12]|min_length[5]',array('required'=>'*wajib diisi','max_length'=>'%s minimal 12 karakter','min_length'=>'%s minimal 5 karakter'));
		$this->form_validation->set_rules('passconf','Konfirmasi Password','required|matches[password_baru]',array('required'=>'*wajib diisi','matches'=>'%s tidak sama'));
		
		$data['id_perusahaan'] = $this->input->post('id_perusahaan');
		if($this->form_validation->run()==FALSE){
			$this->load->view('employers/ubah_password',$data);
		}else{
			$hasil['password'] = sha1($this->input->post('password_baru'));
			$id_perusahaan = $this->input->post('id_perusahaan');
			echo $hasil['password'];
			$this->employers_model->update_password($id_perusahaan,$hasil);
			redirect(site_url('employers'));
		}
	}
	
	public function edit_posting($id_posting){
		$data['kategori'] = $this->kategori_model->tampil_kategori()->result();
		$data['action'] = 'employers/proses_edit_posting';
		$data['header'] = 'Edit Posting';
		$data['posting'] = $this->posting_model->get_id($id_posting)->row();
	
		$this->load->view('employers/posting',$data);
	}
	
	public function proses_edit_posting(){
		$datestring = " %Y-%m-%d ";
		$data = array(
			'id_perusahaan' => $this->session->userdata('id_perusahaan'),
			'judul' => $this->input->post('judul'),
			'id_kategori' => $this->input->post('id_kategori'),
			'judul' => $this->input->post('judul'),
			'konten' => $this->input->post('konten'),
			'tgl_posting' => mdate($datestring)
		);
		
		$id_posting = $this->input->post('id_posting');
		$this->posting_model->update_posting($id_posting,$data);
		redirect(site_url('employers')); 
	}
	
	public function delete_posting($id_posting){
		$this->posting_model->delete_posting($id_posting);
		redirect(site_url('employers'));
	}
	
	public function read_more($id_posting){
		$data['posting'] = $this->posting_model->get_id($id_posting)->row();
		$this->load->view('employers/read_more',$data);
	}
	
}
