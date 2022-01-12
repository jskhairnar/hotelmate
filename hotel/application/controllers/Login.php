
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

    public function __construct(){

        parent::__construct();
   
        $this->load->model('Login_m');
     }

    


    public function index()
	{
        if($this->session->userdata('userdata'))
		{
			return redirect('Profile');
		}

       

        $data['Title']="Login";
        
		
		$this->form_validation->set_rules('u_email','Email','trim|required');
		$this->form_validation->set_rules('u_password','Password','trim|required');
		if($this->form_validation->run()==false)
		{
			
            $this->load->view('common/new_header',$data);
            $this->load->view('new_Login',$data);
            $this->load->view('common/new_footer',$data);
		}
		else
		{
			$u_email=$this->security->xss_clean($this->input->post('u_email'));
            $u_password=$this->security->xss_clean($this->input->post('u_password'));
            
            // echo $email; // echo $password;

			$user=$this->Login_m->user_login($u_email,$u_password);
			if($user)
			{
				$userdata=array(
					'u_id'    => $user->u_id,
					'u_fname'  =>$user->u_fname,
					'u_lname'  =>$user->u_lname,
					'email'    =>$user->u_email,
					'u_bod'=>$user->u_bod,
					'u_mobile'=>$user->u_mobile,
					'u_update_date'=>$user->u_update_at,
					'u_credits' => $user->u_credits,
					'authenticated' => TRUE
					);
				$this->session->set_userdata('userdata',$userdata);

				if($this->session->userdata('bookinglogin_check')){
					return redirect('Hotel/Booking_sent');
				}

                return redirect('Home');
                // print_r($userdata);
                // exit;
			}
			else
			{
				$this->session->set_flashdata('login_fail','Please Enter Valid email & password');
				redirect('Login');
			}
		}
	}
	


	public function booking_check_login()
	{

		$u_email=htmlspecialchars($_POST['u_email']);  
		$u_password=htmlspecialchars($_POST['u_password']);  
	
		// $u_email=$this->security->xss_clean($this->input->post('u_email'));
		// $u_password=$this->security->xss_clean($this->input->post('u_password'));
            
            // echo $email; // echo $password;

			$user=$this->Login_m->user_login($u_email,$u_password);
			if($user)
			{
				$userdata=array(
                                'u_id'    => $user->u_id,
                                'u_fname'  =>$user->u_fname,
								'u_lname'  =>$user->u_lname,
								'email'    =>$user->u_email,
								'u_bod'=>$user->u_bod,
                                'u_mobile'=>$user->u_mobile,
								'u_update_date'=>$user->u_update_at,
								'u_credits' => $user->u_credits,
                                'authenticated' => TRUE
								);
				$this->session->set_userdata('userdata',$userdata);
				echo 1;

			}
			else
			{
				echo 0;
			}
		
    }


    
    public function Logout()
	{
        $this->session->sess_destroy();
		return redirect('Login');
    }
   


}