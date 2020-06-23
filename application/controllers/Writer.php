<?php

class Writer extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        if (!$this->session->userdata('LoggedIn')) {
            redirect("User/SignIn");
        } else {
            if ($this->session->userdata('Role') != "Writer"&&$this->session->userdata('Role') != "writer"){
                show_error('You can\'t access the requested page', 403, '403');
                die();
            }
        }
       
        $this->load->model('Article_Model');
    }

    public function WriteArticle()
    {
       
        $this->form_validation->set_rules('txtArticleTitleWri', 'Article Title', 'required|trim|min_length[1]|xss_clean');
         $this->form_validation->set_rules('txtArticleContentWri', 'Article Content', 'required|trim|min_length[100]|xss_clean');

        if ($this->form_validation->run() == FALSE) {
            $data['Content'] = "Writer/WriteArticleWriter";
            $data['Title'] = "Write Article";
           
            $this->load->view('SharedLayouts/DashboardWriter', $data);
        } else {
            $array = array(
                'UID' => $this->session->userdata('UID'),
                'Name' => $this->input->post('txtArticleTitleWri'),
                'Content' => $this->input->post('txtArticleContentWri'),
                
            );

            if ($this->Article_Model->addArticle($array)) {
                $this->session->set_flashdata('createASuccess', 'Your Article has been added!');
                redirect("Writer/WriteArticle");
            } else {
                $this->session->set_flashdata('createAError', 'An Error Occured!');
                $data['Content'] = "Writer/WriteArticleWriter";
                $data['Title'] = "Write Article";
               
                $this->load->view('SharedLayouts/DashboardWriter', $data);
            }
        }
    }
    public function Index()
    {
        $data['Content'] = "Writer/HomepageWriter";
        $data['Title'] = "Dashboard";
        $this->load->view('SharedLayouts/DashboardWriter', $data);
    }

}
