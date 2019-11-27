<?php 
class m_pengguna extends CI_Model{
    function tampil_pengguna(){
		return $this->db->query('select a.id_pengguna, a.nama_pengguna, a.email_pengguna, a.kata_sandi, a.nomor_telepon, a.alamat_pengguna, a.status_pengguna, a.tanggal_masuk, b.id_pengguna, b.id_jabatan, c.id_jabatan, c.nama_jabatan  FROM pengguna a JOIN detail_pengguna b ON a.id_pengguna = b.id_pengguna JOIN jabatan c ON b.id_jabatan = c.id_jabatan');
	}
	
	function cekJumlah($table, $jabatan){
		$hitungpengguna= $this->db->query('SELECT * FROM pengguna WHERE jabatan=$jabatan');
		return $hitungpengguna;
	}
	
	function insertTable($a,$b){
		$this->db->insert($a,$b);
	}
	
	function editRecord($where, $table){
		return $this->db->get_where($table,$where);
	}
	
	function updateRecord($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
	}
	
	function hapusRecord($where,$table){
		$this->db->where($where);
		$this->db->delete($table);
	}
	
	function get_pengguna_by_ajax($where){
		
		$query 		= $this->db->query("SELECT *  FROM pengguna WHErE LEFT(id_pengguna, 2)  = '$where'");
		$data  	= $query->num_rows() + 1;
		$output=array(

					'id_pengguna' 	=> $where . sprintf("%03d", $data) );
				

    return $output;
	
		
	}
	function ambilidpengguna($table, $data){
		return $this->db->get_where($table, $data);
	}
	function tampil_pengguna_dashboard(){
		return $this->db->query('select a.id_pengguna, a.nama_pengguna, a.email_pengguna, a.kata_sandi, a.nomor_telepon, a.alamat_pengguna, a.status_pengguna, a.tanggal_masuk, b.id_pengguna, b.id_jabatan, c.id_jabatan, c.nama_jabatan  FROM pengguna a JOIN detail_pengguna b ON a.id_pengguna = b.id_pengguna JOIN jabatan c ON b.id_jabatan = c.id_jabatan');
	}
	
	
}