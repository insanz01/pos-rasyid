<?php

class Auth_Model extends CI_Model
{
  public function login($data)
  {
    $user = $this->db->get_where('users', ['username' => $data['username']])->row_array();

    if (password_verify($user['password'], $data['password'])) {
      $this->session->set_userdata('id', $user['id']);
      return true;
    } else {
      return false;
    }
  }
}
