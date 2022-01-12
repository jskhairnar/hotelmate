<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

    public function __construct() {

        parent::__construct();
   
     }


     public function index(){

      $this->load->view('27new');

     }




   //   public function index(){

   //    $data['Title'] = 'Home';
   //    $this->load->view('common/header',$data);
   //    $this->load->view('Home',$data);
   //  $this->load->view('common/footer',$data);
   // }


     public function search($city=NULL,$pune=NULL){

        echo $city;
        echo $pune;

     }

}



?>