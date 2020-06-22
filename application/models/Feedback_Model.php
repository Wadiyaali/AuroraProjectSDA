<?php
class Feedback_Model extends CI_Model
{
    public function addFeedback($userID,$comments,$rating,$fdate)
    {
        $data=array(
            'Comments'=>$comments,
            'Rating'=>$rating,
            'Date'=>$fdate,
            'UID'=>$userID
        );
        $added=$this->db->insert('feedback',$data);
        if($added->num_rows()>0)
        {
            return true;
        }
        else
        {
            return false;
        }    
}
}