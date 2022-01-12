<?php
date_default_timezone_set("Asia/Kolkata");   //India time (GMT+5:30)
class Hotel_m extends CI_model{

    // get hotel list
    function hotel_list_m($query)
    {
        $query=$this->db->query($query);
        return $query->result();
       
    }

    // get hotel detail
    function hotel_deteails($no,$type)
    {
        $table_name="";
        if ($type == "hotel") {
            $table_name = "tbl_markers";
        } 



        $query = $this->db->get_where($table_name,array('id'=> $no));

        return $query->row();
    }


    //Hotel Booking
    function hotel_booking($data){
        $this->db->insert('tbl_booking', $data);
        if ($this->db->affected_rows() == '1')
        {
           return true;
        }

        return false;
    }

   
    function tconfirm_hotel_booking($bid,$temid){

        $qry=$this->db->where('booking_id',$bid)->get('tbl_booking');
        
        if($this->db->affected_rows() > 0)
		{
            $result=$qry->row();
           
            $tem= $result->temporary_id;


            if($tem === $temid)
            {
                return true ;
                // temp code match


            }else{

                return false ;
                // temp code not match

            }
        }

    }


    // boooking confirmation
    function confirm_hotel_booking($bid,$status,$hotel_voucher_code) {

        $qry=$this->db->where('booking_id',$bid)->get('tbl_booking');

        if($this->db->affected_rows() > 0)
		{
            $result=$qry->row();

            // get id
            $id= $result->id;

            $status=array(
                'status' => $status,
                'hotel_voucher_code'=>$hotel_voucher_code,
                'temporary_id'=>'',
                "modifiedDate" => date('Y-m-d h:i:s')
            );

            return $this->db->where('id', $id)->update('tbl_booking', $status);
        }

            // $this->db->where('status', $id)->update('tbl_booking', $status);

            // if ($this->db->affected_rows() == '1')
            // {
            //     return true;
            // }
     
            // return false;
    }



    function get_user($id){

        $query = $this->db->get_where('user',array('u_id'=> $id));
        return $query->row();

    }



    function view_voucher(){

        $query=$this->db->get('tbl_voucher');
        return $query->result();
    }


    function get_booking_row($id){
        $query = $this->db->get_where('tbl_booking',array('booking_id'=> $id));
        return $query->row();
    }


    function update_credits($u_id,$credits)
    {   
        $data = array(
            "u_credits" => $credits
        );
        $this->db->where('u_id', $u_id);
        $this->db->update('user', $data); 
        if($this->db->affected_rows()){
            return true;
        }
    }

  

}


?>