<?php 
class m_login extends CI_Model{	
	function cek_login($table,$where){
		//$query=$this->db->query('SELECT pengguna.email_pengguna, pengguna.kata_sandi, detail_pengguna.id_jabatan FROM
		//pengguna JOIN detail_pengguna ON pengguna.id_pengguna=detail_pengguna.id_pengguna');
		//return $query;
		return $this->db->get_where($table,$where);
	}
	function cek_pengguna($table,$email){
		return $this->db->query("SELECT id_pengguna FROM pengguna WHERE email_pengguna='$email'");
	}	
}
?>