<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
    public function index() {
        $this->load->view('home_view');
    }

    public function contact() {
        $this->load->view('contact_view');
    }

    public function blog() {
        $this->load->view('blog_view');
    }

    public function introduction() {
        $this->load->view('introduction_view');
    }

    public function team() {
        $this->load->view('team_view');
    }
}