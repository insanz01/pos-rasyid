<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{

  public function __construct()
  {
    parent::__construct();

    if (!$this->session->has_userdata('id')) {
      redirect('auth');
    }
  }

  public function index()
  {
    $data['username'] = "Admin";
    $data['judul'] = "Point of Sale";

    $this->load->view('templates/header', $data);
    $this->load->view('templates/sidebar');
    $this->load->view('templates/topbar');
    $this->load->view('home/dashboard');
    $this->load->view('templates/footer');
  }

  public function transaksi()
  {
    $data['username'] = "Admin";
    $data['judul'] = "Rekap Transaksi";

    $this->load->view('templates/header', $data);
    $this->load->view('templates/sidebar');
    $this->load->view('templates/topbar');
    $this->load->view('home/transaksi');
    $this->load->view('templates/footer');
  }
}
