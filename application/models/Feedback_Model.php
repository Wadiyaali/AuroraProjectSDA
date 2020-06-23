<?php
class Feedback_Model extends CI_Model
{
    public function addFeedback($array)
    {
        
        $added=$this->db->insert('feedback',$array);
        if($added)
        {
            return true;
        }
        else
        {
            return false;
        }    
}
}