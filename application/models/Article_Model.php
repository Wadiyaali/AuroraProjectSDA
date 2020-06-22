<?php
class Article_Model extends CI_Model{
    public function addArticle($userId,$title,$cont)
    {
        $data=array(
            'UID'=>$userId,
            'Name'=>$title,
            'Content'=>$cont,
          
        );
        $added=$this->db->insert('article',$data);
        return $added;

    }
}


?>