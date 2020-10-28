<?php

class Auth extends CI_Controller
{
    public function login()
    {
        echo 'login page';
    }


public function register()
{
    if ($this->input->post('register') !== null) {
        $this->form_validation->set_rules('firstname', 'Firstname', 'required');
        $this->form_validation->set_rules('lastname', 'Lastname', 'required');
        $this->form_validation->set_rules('contact', 'Contact', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');
        $this->form_validation->set_rules('password2', 'Confirm Password', 'required|matches[password]');
      
       

        if ($this->form_validation->run() == TRUE)  {
            echo 'form validated';


            $data = array(
                'firstname'=>$_POST['firstname'],
                'lastname'=>$_POST['lastname'],
                'contact'=>$_POST['contact'],
                'email'=>$_POST['email'],
                'password'=> md5($_POST['password'])
               
            );
            $this->db->insert('users', $data);
            $this->session->set_flashdata("success", "Your account has been registered. You can login now");
            redirect("auth/register", "refresh");

        }
    }
    $this->load->view('register');
}
}

