<?php 
class m_login extends CI_Model{	
	function cek_login($table,$where){
		$query=$this->db->query('SELECT pengguna.email_pengguna, pengguna.id_pengguna, pengguna.kata_sandi, detail_pengguna.id_jabatan FROM
		pengguna JOIN detail_pengguna ON pengguna.id_pengguna=detail_pengguna.id_pengguna');
		return $query;
		
	}
	function cek_pengguna($table,$email,$password){
		return $this->db->query("SELECT detail_pengguna.id_jabatan FROM
		pengguna JOIN detail_pengguna ON pengguna.id_pengguna=detail_pengguna.id_pengguna WHERE 
		pengguna.email_pengguna='$email' AND pengguna.kata_sandi='$password'");
	}


}
?>