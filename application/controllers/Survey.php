<?php
defined('BASEPATH') OR exit('No direct script access allowed');



class Survey extends CI_Controller{
    
    public function form(){
        $this->load->view('survey/form');
    }
    public function destroysession(){
        $this->load->session_destroy();
        redirect('');
    }
}

?>