<?php

class Patient extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        if (!$this->session->userdata('LoggedIn')) {
            redirect("User/SignIn");
        } else {
            if (($this->session->userdata('Role') != "Patient")&&($this->session->userdata('Role') != "patient")) {
                show_error('You can\'t access the requested page', 403, '403');
                die();
            }
        }
        $this->load->model('Patient_Model');
        $this->load->model('Article_Model');
    }

    public function WriteArticle()
    {
        $this->form_validation->set_rules('txtArticleTitlePat', 'Article Title', 'required|trim|min_length[1]|xss_clean');
         $this->form_validation->set_rules('txtArticleContentPat', 'Article Content', 'required|trim|min_length[100]|xss_clean');

        if ($this->form_validation->run() == FALSE) {
            $data['Content'] = "Patient/WriteArticlePatient";
            $data['Title'] = "Write Article";
           
            $this->load->view('SharedLayouts/DashboardPatient', $data);
        } else {
            $array = array(
                'UID' => $this->session->userdata('UID'),
                'Name' => $this->input->post('txtArticleTitlePat'),
                'Content' => $this->input->post('txtArticleContentPat'),
                
            );

            if ($this->Article_Model->addArticle($array)) {
                $this->session->set_flashdata('createASuccess', 'Your Article has been added!');
                redirect("Patient/WriteArticle");
            } else {
                $this->session->set_flashdata('createAError', 'An Error Occured!');
                $data['Content'] = "Patient/WriteArticlePatient";
                $data['Title'] = "WriteArticle";
               
                $this->load->view('SharedLayouts/DashboardPatient', $data);
            }
        }
    }
    public function Index()
    {
        $data['Content'] = "Patient/HomepagePat";
        $data['Title'] = "Dashboard";
        $this->load->view('SharedLayouts/DashboardPatient', $data);
    }

    public function BookSession()
    {
        $this->form_validation->set_rules('txtSessionDate', 'Session Date', 'required|trim|min_length[1]|xss_clean');
        $this->form_validation->set_rules('txtSessionTime', 'Session Time', 'required|trim|min_length[1]|xss_clean');
        $this->form_validation->set_rules('txtSeverity', 'Severity', 'required|trim|min_length[1]|xss_clean|greater_than[0]');
        $this->form_validation->set_rules('txtPyscho', 'Psychologist', 'required|trim|min_length[1]|xss_clean');

        if ($this->form_validation->run() == FALSE) {
            $data['Content'] = "Patient/BookSessionPat";
            $data['Title'] = "Book Session";
            $data['Psychologists'] = $this->Patient_Model->getPyschologistsForDropdown();
            $this->load->view('SharedLayouts/DashboardPatient', $data);
        } else {
            $array = array(
                'UID' => $this->session->userdata('UID'),
                'PID' => $this->input->post('txtPyscho'),
                'Date' => $this->input->post('txtSessionDate'),
                'Time' => $this->input->post('txtSessionTime'),
                'Severity' => $this->input->post('txtSeverity'),
            );

            if ($this->Patient_Model->createBooking($array) > 0) {
                $this->session->set_flashdata('createSuccess', 'Your session has been booked successfully!');
                redirect("Patient/BookSession");
            } else {
                $this->session->set_flashdata('createError', 'There pyschologist already has an appointment. Please select other time');
                $data['Content'] = "Patient/BookSessionPat";
                $data['Title'] = "Book Session";
                $data['Psychologists'] = $this->Patient_Model->getPyschologistsForDropdown();
                $this->load->view('SharedLayouts/DashboardPatient', $data);
            }
        }
    }

    public function MyBookings()
    {
        $data['Content'] = "Patient/SessionsHistory";
        $data['Title'] = "My Session Bookings";
        $data['Sessions'] = $this->Patient_Model->GetUserSessionHistory($this->session->userdata('UID'));
        $this->load->view('SharedLayouts/DashboardPatient', $data);
    }
}
