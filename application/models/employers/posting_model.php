<?php

	class Posting_model extends CI_Model {
		function __construct(){
			parent::__construct();
		}
		
		function insert_posting($data){
			$this->db->insert('posting', $data);
		}
		
		function tampil_posting($id_perusahaan){
			$this->db->select('*');
			$this->db->from('posting');
			$this->db->where('id_perusahaan',$id_perusahaan);
			return $this->db->get();
		}
		
		function get_id($id_posting){
			$this->db->select('*');
			$this->db->from('posting');
			$this->db->where('id_posting',$id_posting);
			return $this->db->get();
		}
		
		function posting_read_more($id_perusahaan){
			$query = $this->db->query("select a.id_posting, a.judul, a.konten, c.nama_kategori, a.tgl_posting from posting a,employers b,kategori c where a.id_perusahaan=b.id_perusahaan and a.id_kategori=c.id_kategori and b.id_perusahaan=".$id_perusahaan);
			return $query->result();
			
		}
		
		function list_kategori(){
			$query = $this->db->query('select a.id_kategori, a.nama_kategori, count(b.id_posting) as jumlah_lowongan from kategori a left join posting b on a.id_kategori=b.id_kategori group by a.nama_kategori order by a.id_kategori asc');
			return $query->result();
			
		}
		
		function get_by_id_kategori($id_kategori){
			$query = $this->db->query("select a.id_posting, a.judul, a.konten, c.nama_kategori, a.tgl_posting, b.nama_perusahaan, b.id_perusahaan,b. logo_perusahaan from posting a,employers b,kategori c where a.id_perusahaan=b.id_perusahaan and a.id_kategori=c.id_kategori and c.id_kategori='".$id_kategori."'");
			return $query->result();
		}
		
		function update_posting($id_posting, $data){
			$this->db->where('id_posting', $id_posting);
			$this->db->update('posting', $data);
		}
		
		function delete_posting($id_posting){
			$this->db->where('id_posting', $id_posting);
			$this->db->delete('posting');
		}
		
	
}