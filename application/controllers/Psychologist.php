<?php

class Psychologist extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        if (!$this->session->userdata('LoggedIn')) {
            redirect("User/SignIn");
        } else {
           
            if (($this->session->userdata('Role') != "Psychologist" && $this->session->userdata('Role') != "psychologist")) {
                print_r($this->session->userdata);
                show_error('You can\'t access the requested page', 403, '403');
                die();
            }
        }
        $this->load->model('Article_Model');
        $this->load->model('Psy_Model');
        $this->load->model('Patient_Model');
    }
public function ShowSessions()
{
    
    $data['Content'] = "Psychologists/BookedSessionPsy";
    $data['Title'] = "My Session Bookings";
    $data['Sessions'] = $this->Psy_Model->viewSessions($this->session->userdata('UID'));
    
    $this->load->view('SharedLayouts/DashboardPsychologist', $data);
}

    public function WriteArticle()
    {
       
        $this->form_validation->set_rules('txtArticleTitlePsy', 'Article Title', 'required|trim|min_length[1]|xss_clean');
         $this->form_validation->set_rules('txtArticleContentPsy', 'Article Content', 'required|min_length[100]|xss_clean');

        if ($this->form_validation->run() == FALSE) {
            $data['Content'] = "Psychologists/WriteArticlePsychologist";
            $data['Title'] = "Dashboard"; 
                  
            $this->load->view('SharedLayouts/DashboardPsychologist', $data);
            
        } 
        else {
              
            $UID=$this->session->userdata('UID');
            $title=$this->input->post('txtArticleTitlePsy');
            $cont=$this->input->post('txtArticleContentPsy');
            $array = array(
                'UID' => $UID,
                'Name' => $title,
                'Content' =>$cont,
            );
          
            if ($this->Article_Model->addArticle($array)) {
                $this->session->set_flashdata('createASuccess', 'Your Article has been added!');
                redirect("Psychologist/WriteArticle");
            } else {
                $this->session->set_flashdata('createAError', 'An Error Occured!');
                $data['Content'] = "Psychologists/WriteArticlePsychologist";
                $data['Title'] = "Write Article";
                $this->load->view('SharedLayouts/DashboardPsychologist', $data);
            }
        }
    }
    public function Index()
    {
        $data['Content'] = "Psychologists/HomepagePsy";
        $data['Title'] = "Dashboard";
        $this->load->view('SharedLayouts/DashboardPsychologist', $data);
    }

}
