<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Registration extends CI_Controller {

    public function __construct(){

        parent::__construct();
        date_default_timezone_set('Asia/Kolkata');
        $this->load->model('Login_m');
    }



    public function index()
    {

        if($this->session->userdata('userdata'))
		{
			return redirect('Home');
        }
        
        $data['Title']="Registration";

        $this->form_validation->set_rules('u_fname','First Name','trim|required');
        $this->form_validation->set_rules('u_lname','Last Name','trim|required');
		$this->form_validation->set_rules('u_email','Email','trim|required|valid_email|is_unique[user.u_email]');
		$this->form_validation->set_rules('u_mobile','Mobile','trim|required|numeric|exact_length[10]|is_unique[user.u_mobile]');
        $this->form_validation->set_rules('u_password','Password','trim|required');
        $this->form_validation->set_rules('c_password','Confirm Password','trim|required|matches[u_password]');
		$this->form_validation->set_rules('u_bod','BOD','trim|required');


		if($this->form_validation->run()==false) {
            $this->load->view('common/new_header',$data);
            $this->load->view('Registration1',$data);
            $this->load->view('common/new_footer',$data);
        } else{
            // [u_fname] => raj [u_lname] => mohan [u_mobile] => 2345687898 [u_bod] => 2020-11-12 [u_email] => sdf@gmail.com [u_password] => 12345 
            // [u_status] => 1 [u_create_by] => 0 [u_create_at] => 2020-11-18 04:22:46 [u_update_by] => 0 [u_update_at] => )
        
            $a=array(
                "u_fname"=>$this->input->post('u_fname'),
                "u_lname"=>$this->input->post('u_lname'),
                "u_mobile"=>$this->input->post('u_mobile'),
                "u_bod"=>$this->input->post('u_bod'),
                "u_email"=>$this->input->post('u_email'),
                "u_password"=>md5($this->input->post('u_password')),
                "u_status"=>1,
                "u_create_by"=>0,
                "u_create_at"=>date('Y-m-d h:i:s'),
                "u_update_by"=>0,
                "u_update_at"=>NULL
            );

           
            $user=$this->Login_m->user_reg($a);

            if($user) {

                $this->session->set_flashdata('reg_succ', 'Your account created successfully..!');
                redirect('Registration');
            } else {
                $this->session->set_flashdata('reg_err', 'Something wents wrong..!');
                redirect('Registration');
            }

        }
        
    }




    public function booking_check_registration()
    {
        $reg_first_name=htmlspecialchars($_POST['reg_first_name']);  
        $reg_last_name=htmlspecialchars($_POST['reg_last_name']);

        $reg_email=htmlspecialchars($_POST['reg_email']);  
        $reg_phone=htmlspecialchars($_POST['reg_phone']);

        $reg_bod=htmlspecialchars($_POST['reg_bod']);  
        $reg_pass=htmlspecialchars($_POST['reg_pass']);
        
        
        if($this->exit_email($reg_email) == true)
        {
            echo 0;
           // $error = array('email_e' => false, 'msg'=> 'Email already exit !');
        
        }else if($this->exit_mobile($reg_phone) == true)
        {
            echo 1;
           //   $error = array('phone_e' => false, 'msg'=> 'Mobile Number already exit !');
        }else{
            
            $a=array(
                "u_fname"=>$reg_first_name,
                "u_lname"=>$reg_last_name,
                "u_mobile"=>$reg_phone,
                "u_bod"=>$reg_bod,
                "u_email"=>$reg_email,
                "u_password"=>md5($reg_pass),
                "u_status"=>1,
                "u_create_by"=>0,
                "u_create_at"=>date('Y-m-d h:i:s'),
                "u_update_by"=>0,
                "u_update_at"=>NULL
            );

            
            $user=$this->Login_m->user_reg($a);

            if($user) {
                echo 2;
                 // $error = array('acc_s' => false, 'msg'=> 'Your Account Successfully Creadted !');

            } else {
                echo 3;
                // $error = array('acc_s' => false, 'msg'=> 'Something Wends Wrong !');
            }  
        }


    }




    public function exit_email($reg_email)
    {
        
        $u_email=$this->Login_m->check_exit_email($reg_email);
        if($u_email == true)
        {
            return true;
        }else{
            return false;
        }

    }

    public function exit_mobile($reg_mobile)
    {
        
        $u_mobile=$this->Login_m->check_exit_mobile($reg_mobile);
        if($u_mobile == true)
        {
            return true;
        }else{
            return false;
        }

    }



    public function reg1()
    {
        $this->load->view('common/new_header');
            $this->load->view('Registration1');
            $this->load->view('common/new_footer');
       
    }

}

?>