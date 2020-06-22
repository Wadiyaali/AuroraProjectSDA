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
        return $added;
    }
}