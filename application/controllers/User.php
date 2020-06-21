<?php

class User extends CI_Controller
{
    public function Index()
    {
        redirect('User/Signup');
    }
    public function Signup()
    {
        $this->form_validation->set_rules('txtName', 'Name', 'required|trim|min_length[3]|max_length[30]|xss_clean');
        $this->form_validation->set_rules('txtEmail', 'Email address', 'required|trim|min_length[3]|max_length[30]|xss_clean|valid_email');
        $this->form_validation->set_rules('txtPassword', 'Password', 'required|trim|min_length[3]');
        $this->form_validation->set_rules('txtCPassword', 'Confirm Password', 'required|trim|min_length[3]');
        if ($this->form_validation->run() == FALSE) {
            $data['Content'] = 'Main/UserSignup';
            $this->load->view('SharedLayouts/Main', $data);
        } else {
            $name = $this->input->post('txtName');
            $email = $this->input->post('txtEmail');
            $pass = $this->input->post('txtPassword');
            $cpass = $this->input->post('txtCPassword');
            $cat = $this->input->post('Category');
            if ($pass == $cpass) {
                $dt = array(
                    'Name' => $name,
                    'Email' => $email,
                    'Password' => $pass,
                    'Category' => $cat
                );
                $q = $this->User_Model->Signup($dt);
                if ($q) {
                    $this->session->set_flashdata('padd', 'User added successfully');
                    $data['Content'] = 'Main/UserLogin';
                    $this->load->view('SharedLayouts/Main', $data);
                } else {
                    redirect('User/Signup');
                }
            }
        }
    }
    public function Signin()
    {
        $this->form_validation->set_rules('txtEmail', 'Email address', 'required|trim|min_length[3]|max_length[30]|xss_clean|valid_email');
        $this->form_validation->set_rules('txtPassword', 'Password', 'required|trim|min_length[3]');
        if ($this->form_validation->run() == FALSE) {
            $data['Content'] = 'Main/UserLogin';
            $this->load->view('SharedLayouts/Main', $data);
        } else {
            $email = $this->input->post('txtEmail');
            $pass = $this->input->post('txtPassword');
            $cat = $this->input->post('Category');
            $dt = array(
                'Email' => $email,
                'Password' => $pass,
                'Category' => $cat
            );

            if ($this->User_Model->Signin($dt)) {
                $data['User'] = $this->User_Model->Signin($dt);
                if (strcmp($cat, 'Writer')) {
                    $data['Content'] = 'Writer/HomepageWriter';
                    $this->load->view('SharedLayouts/DashboardWriter', $data);
                }
                else  if (strcmp($cat, 'Psychologist')) {
                    $data['Content'] = 'Psychologists/HomepagePsy';
                    $this->load->view('SharedLayouts/DashboardPsychologist', $data);
                }
                
            } else {
                redirect('User/Signin');
            }
        }
    }
}
