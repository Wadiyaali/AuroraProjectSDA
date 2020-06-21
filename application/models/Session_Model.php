<?php
class Session_Model extends CI_Model{
    public function getUserSessions($userID)
    {
        $this->db->where('UID',$userID);
        $records=$this->db->get('session');
        if($records->num_rows()>0)
        {
            return $records;
        }
    }
    public function checkAvailability($sessionInfo)
    { 
        //to check multiple conditions,pass an array of all the attributes you have to check
        $this->db->where('session',$sessionInfo);
        $records=$this->db->get('session');
        if($records->num_rows()>0)
        {
            return false;
        }
        else
        {
            return true;
        }
    }

}