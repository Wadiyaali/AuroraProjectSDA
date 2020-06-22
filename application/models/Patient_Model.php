<?php

class Patient_Model extends CI_Model
{

    public function getPyschologistsForDropdown()
    {
        $this->db->select('UID,Name');
        $this->db->where('Role', 'Psychologist');
        $q = $this->db->get('Users');
        $result = array();
        if ($q->num_rows() > 0) {
            foreach ($q->result_array() as $row) {
                $result[$row['UID']] = $row['Name'];
            }
            return $result;
        }
    }

    public function createBooking($array)
    {
        $this->db->where('Date', $array['Date']);
        $this->db->where('Time', $array['Time']);
        $this->db->where('PID', $array['PID']);
        $q = $this->db->get('session');
        if ($q->num_rows() > 0) {
            return 0;
        } else {
            $this->db->insert('session', $array);
            return $this->db->insert_id();
        }
    }

    public function GetUserSessionHistory($userID)
    {
        $this->db->select('Severity,Date,Time,Users.Name');
        $this->db->where('session.UID', $userID);
        $this->db->join('Users', 'Users.UID=session.PID', 'left');
        $q = $this->db->get('session');
        if ($q->num_rows() > 0) {
            return $q->result_array();
        }
    }
}
