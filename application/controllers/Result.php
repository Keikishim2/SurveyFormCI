<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Result extends CI_Controller{

    public function index(){

        $name = $this->input->post('name');
        $location = $this->input->post('location');
        $faveLang = $this->input->post('faveLang');
        $comments = $this->input->post('comments');

        $this->session->set_userdata('name', $name);
        $this->session->set_userdata('location', $location);
        $this->session->set_userdata('faveLang', $faveLang);
        $this->session->set_userdata('comments', $comments);


        if($this->session->userdata('counter')){
            $counter = $this->session->userdata('counter');
            $this->session->set_userdata('counter', $counter + 1);
        }
        else{
            $this->session->set_userdata('counter', 1);
        }
        $this->load->view('result/index');
    
    }
}







?>