<?php

	class Employers_model extends CI_Model {
		function __construct(){
			parent::__construct();
		}
		
		//cek keberadaan user di sistem
		function check_employers_account($email, $password,$level){
			$this->db->select('*');
			$this->db->from('employers');
			$this->db->where('email',$email);
			$this->db->where('password',$password);
			$this->db->where('level',$level);
			$query = $this->db->get();
			return $query;
		}
		
		
		//mengambil data user tertentu
		function get_perusahaan($id_perusahaan){
			$this->db->select('*');
			$this->db->from('employers');
			$this->db->where('id_perusahaan', $id_perusahaan);
			return $this->db->get();
		}
		
		function update_employers($id_peruhasaan, $data){
			$this->db->where('id_perusahaan', $id_peruhasaan);
			$this->db->update('employers', $data);
		}
		
		function update_password($id_peruhasaan, $data){
			$this->db->where('id_perusahaan', $id_peruhasaan);
			$this->db->update('employers', $data);
		}
}