<?php 
class m_menu_pelanggan extends CI_Model{
    function tampil_makanan_pelanggan(){
        return $this->db->query("SELECT * FROM menu WHERE id_jenis_menu='MK'");
    }
    function tampil_minuman_pelanggan(){
        return $this->db->query("SELECT * FROM menu WHERE id_jenis_menu='MN'");
    }
    function tampil_snack_pelanggan(){
        return $this->db->query("SELECT * FROM menu WHERE id_jenis_menu='SK'");
    }
    function tampil_pesanan(){

    }
}