<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
  private $data;

  public function __construct()
  {
    parent::__construct();
    $this->data['judul'] = "Point of Sale";
  }

  public function index()
  {
    $this->form_validation->set_rules('username', 'Username', 'required|trim', [
      'required' => 'Username harus diisi'
    ]);

    $this->form_validation->set_rules('password', 'Password', 'required|trim', [
      'required' => 'Password harus diisi'
    ]);

    if ($this->form_validation->run() == FALSE) {
      $this->load->view('auth/templates/header', $this->data);
      $this->load->view('auth/login');
      $this->load->view('auth/templates/footer');
    } else {
      if ($this->input->post('username') == $this->input->post('password')) {
        $this->session->set_userdata('id', 1);
        redirect('home');
      } else {
        redirect('auth');
      }
    }
  }

  public function registration()
  {

    $this->form_validation->set_rules('nama_depan', 'NamaDepan', 'required|trim|alpha', [
      'required' => 'Nama Depan Harus diisi',
      'alpha' => 'Hanya boleh huruf'
    ]);

    $this->form_validation->set_rules('nama_belakang', 'NamaBelakang', 'required|trim|alpha', [
      'required' => 'Nama Belakang Harus diisi',
      'alpha' => 'Hanya boleh huruf'
    ]);

    $data['judul'] = 'Point of Sale';

    if ($this->form_validation->run() == FALSE) {
      $this->load->view('auth/templates/header', $data);
      $this->load->view('auth/register');
      $this->load->view('auth/templates/footer');
    }
  }

  public function logout()
  {
    $this->session->unset_userdata('id');
    redirect('auth');
  }
}
