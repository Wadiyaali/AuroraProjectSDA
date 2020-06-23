<?php

class Psy_Model extends CI_Model{

    public function viewSessions($userID)  //send psy id here
    {
        $this->db->select('Severity,Date,Time,Users.Name');
        $this->db->where('session.PID', $userID);
        $this->db->join('Users', 'Users.UID=session.PID', 'left');
        $q = $this->db->get('session');
        if ($q->num_rows() > 0) {
            return $q->result_array();
        }

      
    }

}

?>