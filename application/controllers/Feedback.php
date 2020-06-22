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
        $this->form_validation->set_rules('txtRating', 'Rating','required|trim|min_length[1]|xss_clean|greater_than[0]|less_than[5]');
        $this->form_validation->set_rules('txtComments', 'Comments','required|trim|min_length[5]|xss_clean');
        if ($this->form_validation->run() == FALSE) {
            
        } else {
            $array = array(
                'UID' => $this->session->userdata('UID'),
                'Comments' => $this->input->post('txtComments'),
                'Rating' => $this->input->post('txtRating'),
            );

            if ($this->Feedback_Model->addFeedback($array) ==true) {
                $this->session->set_flashdata('feedbackSuccess', 'Your feedback was sent successfully!');
                redirect("Feedback/Index");
            } 
            else {
                $this->session->set_flashdata('feedbackError', 'There was an error sending your feedback. Please try again');
                redirect("Feedback/Index");
            }
        }
    }

}

?>