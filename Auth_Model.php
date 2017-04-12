<?php
    class Auth_Model extends CI_Model{
        public function create_member(){
            $encrypt_password = md5($this->input->post('password'));
            $data = array(
                'fname' => $this->input->post('fname'),
                'lname' => $this->input->post('lname'),
                'gender' => $this->input->post('gender'),
                'email' => $this->input->post('email'),
                'phone' => $this->input->post('phone'),
                'level' => $this->input->post('level'),
                'skill' => $this->input->post('skill'),
                'password' => $encrypt_password,
                'username' => $this->input->post('username'),
                'createdDate' => date("Y/m/d")
            );
            $insert = $this->db->insert('userDetails',$data);
            return $insert;
        }
        public function login_user($username,$password){
            $encrypt_password = md5($password);
            //WHERE USERNAME 
            $this->db->where('username',$username);
            $this->db->where('password',$encrypt_password);
                $result = $this->db->get('userDetails');
                    if($result->num_rows() == 1){
                        return $result->row(0)->id;
                    }else{
                        return false;
                    }
        }
        public function fetch_data(){
            $query = $this->db->query('SELECT email FROM userDetails');
            return $query->result();
        }
        
        public function add_new_comment(){
            $data = array(
                'userComment' => $this->input->post('comment'),
                'userName' => $this->session->userdata('username'),
                'commentDate' => date("jS F Y"),
                'commentTime' =>date('G:i A')
            );
            $insert = $this->db->insert('userComments',$data);
            return $insert;
        }
        public function show_comments(){
           $query = $this->db->get('userComments');
              return $query->result();
        }
        //public function insert_snippets($snippets){
            //$this->db->insert('userSnippets',$snippets);
        //}
        public function add_new_timeline(){
            //getting user post
            $data = array(
                'timeline' => $this->input->post('timeline'),
                'userName' => $this->session->userdata('username'),
                'date' => date('jS F Y')
            );
            $insert = $this->db->insert('webForum',$data);
            return $insert;
        }
        public function show_timelines(){
            $query = $this->db->get('webForum');
                return $query->result();
        }
        public function update_bio(){
            $data = array(
                'hashtags' => $this->input->post('hashtags'),
                'location' => $this->input->post('location'),
                'dept' => $this->input->post('department'),
                'yob' => $this->input->post('year'),
                'mob' => $this->input->post('month'),
                'dob' => $this->input->post('day'),
                'note' => $this->input->post('note'),
                'username' => $this->session->userdata('username')
            );
            $insert = $this->db->insert('userBiodata',$data);
            return $insert;
        }
        public function fetch_update_data($username){
            $this->db->where('username',$username);
                $result = $this->db->get('userBiodata');
                    if($result->num_rows() == 1){
                       return true;
                    }else{
                        return false;
                    }
        }
        





        
    }

?>