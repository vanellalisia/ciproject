<?php 
class m_signin extends CI_Model{	
	function insertTable($a,$b){
		$this->db->insert($a,$b);
	}


}
?>