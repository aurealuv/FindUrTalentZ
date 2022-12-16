<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Model {
    public function register($data) {
        $this->db->insert('user', $data);
    }

    public function getUserByNameAndEmail($name, $email) {
        return $this->db->where('name', $name)
            ->where('email', $email)
            ->get('user');
    }
}