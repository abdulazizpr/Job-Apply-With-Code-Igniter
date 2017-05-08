<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {
	
	public function __construct(){
		parent::__construct();
		$this->load->library('form_validation','myform');
		$this->load->helper('url','form');
		$this->load->helper('security');
		$this->load->model('login_model','',TRUE);
		$this->load->model('employers/employers_model');
		$this->load->model('employee/employee_model');
	}

	public function index(){
		if($this->session->userdata('log_in_employers')==TRUE){
			redirect('employers');
		}else if($this->session->userdata('log_in_employee')==TRUE){
			redirect('employee');
		}else{
			$data['message'] = $this->session->flashdata('message');
			$data['action'] = 'login/proses_login';
			$data['kategori'] = $this->login_model->tampil_kategori()->result();
			$this->load->view('login_view', $data);
		}
	}

	public function proses_login(){
		
		$this->form_validation->set_rules('email', 'Email', 'trim|valid_email|required',array('required'=>'%s harus diisi.'));
		$this->form_validation->set_rules('password', 'Password', 'trim|required',array('required'=>'%s harus diisi.'));
		$this->form_validation->set_rules('level', 'level', 'required');

		if($this->form_validation->run()==TRUE){
			$email = $this->input->post('email');
			$password = sha1($this->input->post('password'));
			$level = $this->input->post('level');
		
			if($this->login_model->check_employers($email,$password,$level)==TRUE){
				$data = $this->employers_model->check_employers_account($email,$password,$level)->row();
				$array_items = array(
					'email_employers' => $email,
					'id_perusahaan' => $data->id_perusahaan,
					'log_in_employers' => TRUE
				 );

				$this->session->set_userdata($array_items);
				
				echo "<title>Redirecting....</title>";
				redirect('employers','refresh');
			}else if($this->login_model->check_employee($email,$password,$level)==TRUE){
				$data = $this->employee_model->check_employee_account($email,$password,$level)->row();
				$array_items = array(
					'id_employee' => $data->id_employee,
					'email_employee' => $email,
					'log_in_employee' => TRUE
				 );

				
				$this->session->set_userdata($array_items);
				echo "<title>Redirecting....</title>";
				redirect('employee','refresh');
			}else{
				$data['message'] = $this->session->set_flashdata('message', 'Maaf email atau password Anda salah');
				redirect('login','refresh');
			} 

		}else{
			$data['message'] = $this->session->flashdata('message');
			$data['action'] = 'login/proses_login';
			$data['kategori'] = $this->login_model->tampil_kategori()->result();
			$this->load->view('login_view',$data);
		}
	}
	
	public function daftar_employers(){
		
		$this->form_validation->set_rules('nama_perusahaan', 'Nama Perusahaan', 'xss_clean|trim|required', array('required'=>'*harus diisi.'));
		$this->form_validation->set_rules('email', 'Email', 'xss_clean|trim|valid_email|required|is_unique[employers.email]
		',array('required'=> '*harus diisi.','is_unique'=>'%s sudah ada.','valid_email'=>'%s tidak valid.'));
		$this->form_validation->set_rules('password', 'Password', 'required|min_length[5]|max_length[12]',array('required'=>'*harus diisi.','matches'=>'%s tidak sama dengan Password'));
		$this->form_validation->set_rules('passconf','Konfirmasi password', 'trim|required|matches[password]',array('required'=>'*harus diisi.','matches'=>'%s tidak sama dengan Password'));
		
		if($this->form_validation->run() == FALSE){
			$data['header'] = 'Employers';
			$data['cek_email'] = 'login/email_employers';
			$data['action'] = 'login/daftar_employers';
			$data['nama'] = 'Nama Perusahaan';
			$data['data'] = array(
				"nama" => 'nama_perusahaan',
				"email" => 'email',
				"password" => 'password',
				"level" => 'employers'
			);
			$this->load->view('form_daftar',$data);
        }else{
			$data = array(
				"nama_perusahaan" => $this->input->post('nama_perusahaan'),
				"email" => $this->input->post('email'),
				"password" => sha1($this->input->post('password')),
				"level" => $this->input->post('level')
			);
			
			print_r($data);
			$this->login_model->insert_employers($data);
			redirect(site_url('login'));
		}
		
	}
	
	public function daftar_employee(){
		
		$this->form_validation->set_rules('nama_lengkap', 'Nama lengkap', 'xss_clean|trim|required', array('required'=>'*harus diisi.'));
		$this->form_validation->set_rules('email', 'Email', 'xss_clean|trim|valid_email|required|is_unique[employee.email]',array('required'=> '*harus diisi.','is_unique'=>'%s sudah ada.','valid_email'=>'%s tidak valid.'));
		$this->form_validation->set_rules('password', 'Password', 'required|min_length[5]|max_length[12]',array('required'=>'*harus diisi.','min_length'=>'%s minimal 5 karakter','max_length'=>'%s maximal 12 karakter'));
		$this->form_validation->set_rules('passconf','Konfirmasi password', 'xss_clean|trim|required|matches[password]',array('required'=>'*harus diisi.','matches'=>'%s tidak sama dengan Password'));
		
		if ($this->form_validation->run() == FALSE){
			$data['header'] = 'Employee';
			$data['action'] = 'login/daftar_employee';
			$data['nama'] = 'Nama Lengkap';
			$data['data'] = array(
				"nama" => 'nama_lengkap',
				"email" => 'email',
				"password" => 'password',
				"level" => 'employee'
			);
			
			$this->load->view('form_daftar',$data);
		}else{
			$data = array(
				"nama_lengkap" => $this->input->post('nama_lengkap'),
				"email" => $this->input->post('email'),
				"password" => sha1($this->input->post('password')),
				"level" => $this->input->post('level')
			);
			
			
			$this->login_model->insert_employee($data);
			redirect(site_url('login'));
		}	
	}

	public function logout(){
		$this->session->sess_destroy();
		echo "<title>Redirecting....</title>";
		redirect('login','refresh');
	}

	public function faq(){
		$this->load->view('faq');
	}

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */