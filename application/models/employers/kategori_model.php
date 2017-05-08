<?php

	class Kategori_model extends CI_Model {
		function __construct(){
			parent::__construct();
		}
		
		private $table_name = 'kategori';
		function tampil_kategori(){
			return $this->db->get('kategori');
		}
		
	
}