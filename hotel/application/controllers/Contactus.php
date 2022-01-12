<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class Contactus extends CI_Controller {

    public function __construct() {

        parent::__construct();
   
     }


     public function index()
     {
        $data['Title']="Contact us";
        $this->load->view('common/header',$data);
        $this->load->view('Contactus');
		$this->load->view('common/footer');
     }
    }

?>