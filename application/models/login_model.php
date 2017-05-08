<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
	
	
	class Login_model extends CI_Model {

		private $employers = 'employers';
		private $employee = 'employee';
		
		function __construct()
		{
			parent::__construct();
		}
		
		function check_employers($email,$password,$level){
			$this->db->select('*');
			$this->db->from($this->employers);
			$this->db->where('email',$email);
			$this->db->where('password',$password);
			$this->db->where('level',$level);
			$query = $this->db->get();
			
			if($query->num_rows()>0){
				return TRUE;
			}else{
				return FALSE;
			}
		}
		
		function check_employee($email,$password,$level){
			$this->db->select('*');
			$this->db->from($this->employee);
			$this->db->where('email',$email);
			$this->db->where('password',$password);
			$this->db->where('level',$level);
			$query = $this->db->get();
			
			if($query->num_rows()>0){
				return TRUE;
			}else{
				return FALSE;
			}
		}
		
		function insert_employers($data){
			$this->db->insert($this->employers, $data);
		}
		
		function insert_employee($data){
			$this->db->insert($this->employee, $data);
		}
		
		function tampil_kategori(){
			$this->db->select('*');
			$this->db->from('kategori');
			return $this->db->get();
		}

	}
	
	/* End of file modelName.php */
	/* Location: ./application/models/modelName.php */

?>