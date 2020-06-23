<?php

class User extends CI_Controller
{
    public function Index()
    {
        if ($this->session->userdata('LoggedIn')) {
            $role = $this->session->userdata('Role');
            $this->redirectToDashboard($role);
        } else {
            redirect("User/SignIn");
        }
    }

    public function SignIn()
    {
        $this->form_validation->set_rules('txtEmail', 'Email', 'required|trim|min_length[1]|xss_clean');
        $this->form_validation->set_rules('txtPassword', 'Password', 'required|trim|min_length[3]');
        if ($this->form_validation->run() == FALSE) {
            $data['Content'] = "Main/UserLogin";
            $data['Title'] = "Sign in";
            $this->load->view("SharedLayouts/Main", $data);
        } else {
            $email = $this->input->post('txtEmail');
            $pass = $this->input->post('txtPassword');
            $user = $this->User_Model->userSignIn($email, $pass);
            if (!empty($user)) {
                $user = $user + array('LoggedIn' => true);
                $this->session->set_userdata($user);
                $role = $this->session->userdata('Role');
                $this->redirectToDashboard($role);
            } else {
                $this->session->set_flashdata('loginError', 'Invalid email or password. Try again');
                redirect("User/SignIn");
            }
        }
    }

    public function SignOut()
    {
        $array = array('UID', 'Name', 'Email', 'Role', 'LoggedIn');
        $this->session->unset_userdata($array);
        redirect("User/SignIn");
    }


    private function redirectToDashboard($role)
    {
        if ($role == "Patient"||$role == "patient") {
            redirect("Patient/Index");
        } else if ($role == "Writer"||$role == "writer") {
            redirect("Writer/Index");
        } else if ($role == "Psychologist"||$role == "psychologist") {
            redirect("Psychologist/Index");
        }
    }
    public function Signup()
    {
        $this->form_validation->set_rules('txtName', 'Name', 'required|trim|min_length[3]|max_length[30]|xss_clean');
        $this->form_validation->set_rules('txtEmail', 'Email address', 'required|trim|min_length[3]|max_length[30]|xss_clean|valid_email');
        $this->form_validation->set_rules('txtPassword', 'Password', 'required|trim|min_length[3]');
        $this->form_validation->set_rules('txtCPassword', 'Confirm Password', 'required|trim|min_length[3]');
        if ($this->form_validation->run() == FALSE) //if input not validated, reload signup page
        {
            $data['Content'] = 'Main/UserSignup';
            $this->load->view('SharedLayouts/Main', $data);
        } 
        else //get the data posted on form and send it to the model method
        {
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
                    'Role' => $cat
                );
                $q = $this->User_Model->Signup($dt); //model method returns a row of user
                if ($q) // if the user is not null, it was added
                {
                    $this->session->set_flashdata('padd', 'User added successfully');
                    $data['Content'] = 'Main/UserLogin';  //move to the login page now
                    $this->load->view('SharedLayouts/Main', $data);
                } else {
                    redirect('User/Signup'); //reload the page if sign up failed controller/method
                }
            }
        }
    }
}
