<?php

	class Employee_model extends CI_Model {
		function __construct(){
			parent::__construct();
		}
		
		//cek keberadaan user di sistem
		function check_employee_account($email, $password,$level){
			$this->db->select('*');
			$this->db->from('employee');
			$this->db->where('email', $email);
			$this->db->where('password', $password);
			$this->db->where('level', $level);
			return $this->db->get();
		}

		function data_employee($id_employee){
			$this->db->select('*');
			$this->db->from('employee');
			$this->db->where('id_employee', $id_employee);
			return $this->db->get();
		}
		
		function insert_employee($data){
			$this->db->insert('employee', $data);
		}

		function update_employee($id_employee, $data){
			$this->db->where('id_employee', $id_employee);
			$this->db->update('employee', $data);
		}
		
	}	