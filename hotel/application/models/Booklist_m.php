<?php

class Booklist_m extends CI_model{

    function book_list($user_id)
    {
       

        $this->db->where('user_id',$user_id);
        $query = $this->db->get('tbl_booking');
        if($query->num_rows() > 0)
        {
            return $query->result_array();
        }
        return false;  
       
    }

    // get hotel detail
    function get_hotel($hotel_id,$type)
    {
        $table_name="";
        if ($type == "hotel") {
            $table_name = "tbl_markers";
        }



        $query = $this->db->get_where($table_name,array('id'=> $hotel_id));

        return $query->row();
    }


    function cancel_booking($id,$reason){

        // echo $id;
        // echo $reason;
       
        $data = array('status' => 3,
                       'reason' => $reason,
                    );
                 
        $this->db->where('booking_id', $id);
        $this->db->update('tbl_booking', $data );

        if($this->db->affected_rows()){
            return true;
        }else{
            return false;
        }

    }



    public function get_user($id) {

		return $this->db->get_where('user', ['u_id' => $id])->row();
		
    }

    public function get_book_row($id) {

		return $this->db->get_where('tbl_booking', ['id' => $id])->row();
		
    }


    public function update_payment($data,$bid)
    {
        $this->db->where('id', $bid);
        $this->db->update('tbl_booking', $data); 
        if($this->db->affected_rows()){
            return true;
        }
        
        
        
    }
    


}    