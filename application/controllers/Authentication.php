<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Authentication extends CI_Controller {
    public function __construct() {
        parent::__construct();

        $this->load->model('User');
    }

    public function index() {
        $this->load->view('register_view');
    }

    public function login() {
        $this->load->view('login_view');
    }

    public function login_process() {
        $name = $this->input->post('name');
        $email = $this->input->post('email_address');

        if (count($this->User->getUserByNameAndEmail($name, $email)->result_array()) > 0) {
            redirect(base_url());
        } else {
            $this->session->set_flashdata('message', '
                <div class="alert alert-danger" role="alert">
                    Pengguna tidak ditemukan!
                </div>
            ');
            redirect(base_url("authentication/login"));
        }
    }

    public function register_process() {
        $data = array(
            'name' => $this->input->post('name'),
            'age' => $this->input->post('age'),
            'job' => $this->input->post('job'),
            'email' => $this->input->post('email')
        );

        $this->User->register($data);

        $this->session->set_flashdata('message', '
            <div class="alert alert-success" role="alert">
                Registration complete!
            </div>
        ');
        redirect(base_url("authentication"));
    }
}