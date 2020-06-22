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
<<<<<<< HEAD
        return $added;
    }
=======
        if($added->num_rows()>0)
        {
            return true;
        }
        else
        {
            return false;
        }    
}
>>>>>>> bb4dae05fc99bf32988c35fe2c7b1a9a6c886b97
}