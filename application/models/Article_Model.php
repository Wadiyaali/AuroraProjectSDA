<?php
class Article_Model extends CI_Model{
    public function addArticle($data)
    {
       
        $added=$this->db->insert('article',$data);
        if($added)
        {
        return $added;
        }
        
    }
    public function GetArticle()
    {
        
        $this->db->select('article.Name as title,Content,Users.Name as user');
    
        $this->db->join('Users', 'Users.UID=article.UID', 'left');
        $q = $this->db->get('article');
        if ($q->num_rows() > 0) {
            return $q->result_array();
        }
    }
    public function Article($id)
    {
        
        $this->db->select('article.Name as title,Content,Users.Name as user');
    $this->db->where('article.ID',$id);
        $this->db->join('Users', 'Users.UID=article.UID', 'left');
        $q = $this->db->get('article');
        if ($q->num_rows() > 0) {
            return $q->result_array();
        }
    
    }
    
}
?>