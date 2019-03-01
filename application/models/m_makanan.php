<?php

class m_makanan extends CI_Model{
    function show_makanan(){
    	$hasil=$this->db->query("SELECT * FROM tb_makanan");
    	return $hasil;
    }    
}

?>