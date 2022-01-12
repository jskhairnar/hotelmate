<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class Aboutus extends CI_Controller {

    public function __construct() {

        parent::__construct();
   
     }


     public function index()
     {
        $data['Title']="About us";
        $this->load->view('common/header',$data);
        $this->load->view('Aboutus');
		$this->load->view('common/footer');
     }
    }

?>