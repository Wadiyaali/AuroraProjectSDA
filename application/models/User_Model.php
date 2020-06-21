<?php 
class User_Model extends CI_Model{
    public function Signup($data){
        $q=$this->db->insert('users',$data);
        return $q;
    }
    public function Signin($data){
        //$this->db->select('Name,Email');
        // $this->db->where('UID',$id);
        // $this->db->get('users');
        $this->db->trans_start(); //Transaction process (not necessary)
        $this->db->where($data);
        $q=$this->db->get('users');
        $this->db->trans_complete();
        if($q->num_rows()>0){
            return $q->row_array();
            //result_array -> full table
            //row_array -> first row
            //row_array[0]
        }
    }
}
?>