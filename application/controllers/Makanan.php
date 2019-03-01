<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Makanan extends CI_Controller {
    function __construct(){
    	parent::__construct();
    	$this->load->model('m_makanan');
    }

    public function index(){
    	$x['data']=$this->m_makanan->show_makanan();
    	$this->load->view('v_makanan',$x);
    }
}

?>