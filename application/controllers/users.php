<?php
class Users extends CI_Controller{
    public function register(){
        $data['title'] = 'Register Employee';

        $this->form_validation->set_rules('name', 'Name', 'required');
        $this->form_validation->set_rules('username', 'Username', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');
        $this->form_validation->set_rules('password2', 'Confirm Password', 'matches[password]');
        

        if($this->form_validation->run() === FALSE){
            $this->load->view('templates/header'); 
            $this->load->view('users/register', $data);
            $this->load->view('templates/footer');
        }else{
            //encrypt password
            $enc_password = md5($this->input->post('password'));
            $this->user_model->register($enc_password);
            

            $this->session->set_flashdata('user_registered', 'the employee is now registered and can log in');
            redirect('about');

        }
    }


    public function login(){
        $data['title'] = 'Sign in';

        
        $this->form_validation->set_rules('username', 'Username', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');
      

        if($this->form_validation->run() === FALSE){
            $this->load->view('templates/header'); 
            $this->load->view('users/login', $data);
            $this->load->view('templates/footer');
        }else{
            //encrypt password
            
           $username = $this-> input->post('username');
           $password = md5($this->input->post('password'));

           $user_id = $this->user_model->login($username,$password);
           if($user_id){
               //create session
                $user_data = array(
                    'user_id'=> $user_id,
                    'username'=> $username,
                    'logged_in'=> true
                );

                $this->session->set_userdata($user_data);
                //set message

               $this->session->set_flashdata('user_loggedin', 'You are now logged in!!');
               redirect('dashboard');
           }else{
            $this->session->set_flashdata('login_failed', 'Login is invalid.Please try again!!');
            redirect('users/login');
           }
            

           

        }
    }

    public function logout(){
        //unset user data
        $this->session->unset_userdata('logged_in');
        $this->session->unset_userdata('user_id');
        $this->session->unset_userdata('username');
        $this->session->session_destroy();
       redirect('users/login','refresh');
        $this->session->set_flashdata('user_loggedout', 'You are now logged out');
       
    }
} 