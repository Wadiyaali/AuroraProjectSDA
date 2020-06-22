<?php
 
 class Feedback extends CI_Controller 
{

    public function Index(){
        if($this->session->userdate('LoggedIn')==1)    
        {  if (strcmp($this->session->userdata('Role'),"Patient")) 
          {
              $data['Content'] = "Main/FeedbackPagePatient";
              $data['Title'] = "Feedback";
              $this->load->view('SharedLayouts/DashboardPatient', $data);
          }
          else if (strcmp($this->session->userdata('Role'),"Psychologist")) 
          {
              $data['Content'] = "Main/FeedbackPsycho";
              $data['Title'] = "Feedback";
              $this->load->view('SharedLayouts/DashboardPsychologist', $data);
          }
          else if (strcmp($this->session->userdata('Role'),"Writer")) 
          {
              $data['Content'] = "Main/FeedbackWriter";
              $data['Title'] = "Feedback";
              $this->load->view('SharedLayouts/DashboardWriter', $data);
          }
          $this->load->model('Feedback_Model');

          }
    }
    public function sendFeedback()
    {   

    }
}

?>