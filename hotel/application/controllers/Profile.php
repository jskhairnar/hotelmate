<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class Profile extends MY_Controller {

    public function __construct() {

        parent::__construct();
        if(!$this->session->userdata('userdata'))
	    {
	    	redirect('Login');
        }
        $this->load->model('Booklist_m');
   
     }


     public function index()
     {

     
       
        $user_id = $this->session->userdata('userdata')['u_id'];

        $isStatus=$this->Booklist_m->get_user($user_id);
        $data['profile_details']=$isStatus;
        if($isStatus)
        {
            $this->load->view('common/new_header');
            $this->load->view('p_profile',$data);
            $this->load->view('common/new_footer');
        }
        

        

     }
    

    }

?>