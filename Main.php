<?php
defined('BASEPATH') OR exit ('No direct script access allowed');
    class Main extends CI_Controller
    {
        public function __construct(){
            parent::__construct();
                $this->load->helper('form');
                $this->load->helper('file');
                $this->load->helper('url');
                $this->load->library('form_validation');
                
        }
        public function views($page = 'home'){
            if(!file_exists(APPPATH.'views/pages/'.$page.'.php'))
            { 
                //Page doesn't exist
                show_404();
            }
            $data['title'] = ucfirst($page);//Caps first alphabet
            $data['records'] = $this->Auth_Model->show_comments(); //comments array
            $data['timelines'] = $this->Auth_Model->show_timelines();//timelines array
            //setting up a parameter for display update_profile link
            $username = $this->session->userdata('username');
            $result = $this->Auth_Model->fetch_update_data($username);
                if($result){
                   $_SESSION['link'] = 'valid';
                }else{
                    $_SESSION['link'] = 'invalid';
                }
            //Loading the necessary pages for display
            $this->load->view('templates/header');
            $this->load->view('pages/'.$page,$data);
            $this->load->view('templates/footer');
            
        }
        
        public function send_mail(){
            $from_email = 'Procode.sch.ng';
            $to_email = $this->input->post('email');
            //loading email library
            $this->load->library('email');
            $this->email->from($from_email,'Procoders Team');
            $this->email->to($to_email);
            $this->email->subject('Welcome to Procoders');
            $this->email->message('We are glad to have you at procoders forum,lets help each other make the world a better digital community');
            //send email
            if($this->email->send()){
                $this->session->set_flashdata('email_sent','<div class = "alert alert-success">Please check your email for a confirmation text.</div>');
            }else{
                $this->session->set_flashdata('email_sent','<div class = "alert alert-info">Sorry we had issues sending you a confirmation email.</div>');
                $this->load->view('templates/header');
                  $this->load->view('pages/dashboard');
                $this->load->view('templates/footer');
              
            }
        }
        
         public function logout(){
             //unset session data
            $this->session->unset_userdata('logged_in');
            $this->session->unset_userdata('id');
            $this->session->unset_userdata('username');
            $this->session->sess_destroy();
            redirect('login');
        }
        
        public function login(){
            $this->form_validation->set_rules('username','Username','trim|required|min_length[4]');
            $this->form_validation->set_rules('password','Password','trim|required|min_length[4]|max_length[50]');  
                if($this->form_validation->run() == FALSE){
                    $data['main_content'] = 'pages/login';
                    $this->load->view('templates/header');
                    $this->load->view('pages/login');
                    $this->load->view('templates/footer');
                }else{
                    //get the user input
                    $username = $this->input->post('username');
                    $password = $this->input->post('password');
                    //getting id from model
                    $id = $this->Auth_Model->login_user($username,$password);
                        if($id){
                            $userdata = array(
                                'id' => $id,
                                'username' => $username,
                                'logged_in' => true
                            );
                            //setting session data
                            $this->session->set_userdata($userdata);
                            redirect('dashboard');
                        }else{
                            $this->session->set_flashdata('login_failed','<h5><p class = "alert alert-danger"><span class = "glyphicon glyphicon-exclamation-sign"></span> Login Info Incorrect</p></h5>');
                            redirect('login');
                        }
                }
        }
        
        public function register(){
            $this->form_validation->set_rules('fname','First Name','trim|required|max_length[50]|min_length[2]');
            
            $this->form_validation->set_rules('lname','Last  Name','trim|required|max_length[50]|min_length[2]');
            
            $this->form_validation->set_rules('email','Email','trim|required|max_length[100]|min_length[5]|valid_email|is_unique[userDetails.email]',
                    array(
                        'required' => 'You have not entered a valid %s',
                        'is_unique' => 'That %s is already taken!'
                    )                              
            );
            
            $this->form_validation->set_rules('gender','Gender','required');
            
            $this->form_validation->set_rules('phone','Phone','trim|required|max_length[11]|min_length[5]|is_unique[userDetails.phone]',
                    array(
                        'required' => 'You have not provided your %s Number',
                        'is_unique' => 'That %s Number has already been used!',
                    )                              
            );
            
            $this->form_validation->set_rules('level','Level','trim|required');
            
            $this->form_validation->set_rules('skill','Skill','trim|required');
            
            $this->form_validation->set_rules('username','Username','trim|required|max_length[50]|min_length[5]|is_unique[userDetails.username]',
                array(
                    'required' => 'You have not provided a %s',
                    'is_unique' => 'That %s already exists!'
                )        
            );
            $this->form_validation->set_rules('password','Password','trim|required|max_length[50]|min_length[5]');
            $this->form_validation->set_rules('pword2','Confirm Password','trim|required|max_length[50]|min_length[5]|matches[password]');
            
                if($this->form_validation->run() == FALSE){
                    $data['main_content'] = 'pages/register';
                    $this->load->view('templates/header');
                    $this->load->view('pages/register',$data);
                    $this->load->view('templates/footer');
                }else{
                    if($this->Auth_Model->create_member()){
                        $this->session->set_flashdata('success','You can now log in to your account!');
                        redirect('login');
                    }
                }
        }
        public function comments(){
            if($this->input->post('comment') == NULL){
                $this->load->view('templates/header');
                $this->load->view('pages/questions');
                $this->load->view('templates/footer');
            }else{
                $this->input->post('comment');
                $data = array('comment'=>$comment);
                $this->Auth_Model->add_new_comment($data);
                redirect('questions');
            }
        }
        public function do_upload(){
          // $config
              //$this->load->view('pages/',array('error' => ''));
        }
        public function forums(){
            $this->form_validation->set_rules('timeline','Timeline','trim|required|max_length[500]|min_length[5]',
                array(
                    'required' => 'The comment box cannot be empty'
                )
            );
                if($this->form_validation->run() == FALSE){
                    $data['main_content'] = 'pages/dev_forum';
                    $this->load->view('templates/header');
                    $this->load->view('pages/dev_forum',$data);
                    $this->load->view('templates/footer');
                }else{
                    $this->input->post('timeline');
                    $data = array('timeline'=>$timeline);
                    $this->Auth_Model->add_new_timeline($data);
                     $this->session->set_flashdata('posted','<h5><p class = "alert alert-success"><i class="fa fa-check fa-1x"></i> Post Successful!</p></h5>');
                    redirect('dev_forum');
            }
        }
        public function update_bio_data() {
            $this->form_validation->set_rules('hashtags','Hashtag','trim|required|max_length[100]|min_length[3]');
            $this->form_validation->set_rules('location','Location','trim|required|max_length[50]|min_length[4]');
            $this->form_validation->set_rules('department','Department','trim|required|max_length[50]|min_length[4]');
            $this->form_validation->set_rules('year','Year Of Birth','required');
            $this->form_validation->set_rules('month','Month Of Birth','required');
            $this->form_validation->set_rules('day','Day Of Birth','required');
            $this->form_validation->set_rules('note','Short Description','trim|required|max_length[50]|min_length[4]');
                 if($this->form_validation->run() == FALSE){
                    $data['main_content'] = 'pages/update_profile';
                    $this->load->view('templates/header');
                    $this->load->view('pages/update_profile',$data);
                    $this->load->view('templates/footer');
                }else{
                        if($this->Auth_Model->update_bio()){
                        $this->session->set_flashdata('updated','<kbd>Account updated successfully!</kbd>');
                        redirect('dashboard');
                    }
                }
            }    
    }


    
?>