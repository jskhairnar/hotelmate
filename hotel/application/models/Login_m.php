<?php

class Login_m extends CI_model{

    function user_login($u_email,$u_password)
    {
    
            // echo $u_email;
            // echo $u_password;
            // exit;
        $this->db->where('u_email', $u_email);
        $this->db->where('u_password', md5($u_password));
        $this->db->where('u_status', 1);
        $query = $this->db->get('user');

        if($query->num_rows() == 1) {
            return $query->row();
        }

        return false;
       
    }

    function user_reg($data)
    {
        $this->db->insert('user', $data);
        if ($this->db->affected_rows() == '1')
        {
           return true;
        }
        return false;
    }


    // email exit not not
    function check_exit_email($u_email)
    {
        $this->db->where('u_email', $u_email);
        $query = $this->db->get('user');

        if($query->num_rows() > 0) {
            return true;
        }else{
            return false;
        }

    }

    // mobile exit not not
    function check_exit_mobile($reg_mobile)
    {
        $this->db->where('u_mobile', $reg_mobile);
        $query = $this->db->get('user');

        if($query->num_rows() > 0) {
            return true;
        }else{
            return false;
        }

    }

  

}


?>