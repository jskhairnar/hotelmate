<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class MY_Controller extends CI_Controller
{
	
	//Check login or not
	public function checklogin()
	{
	    $this->load->library('session');
		if(!$this->session->userdata('userdata'))
		{
			return redirect('Login');
		}

	}
}



?>