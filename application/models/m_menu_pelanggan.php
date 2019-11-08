<?php 
class m_menu_pelanggan extends CI_Model{
    function tampil_menu_pelanggan(){
        return $this->db->get('menu');
    }
}