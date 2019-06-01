<?php

class Pengguna extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
  }

  public function tambah()
  {
    $data['username'] = "Admin";
    $data['judul'] = "Tambah Pengguna";

    $this->load->view('templates/header', $data);
    $this->load->view('templates/sidebar');
    $this->load->view('templates/topbar');
    $this->load->view('home/pengguna/tambah');
    $this->load->view('templates/footer');
  }

  public function ubah()
  {
    $data['username'] = "Admin";
    $data['judul'] = "Ubah Data Pengguna";

    $this->load->view('templates/header', $data);
    $this->load->view('templates/sidebar');
    $this->load->view('templates/topbar');
    $this->load->view('home/pengguna/ubah');
    $this->load->view('templates/footer');
  }

  public function hapus()
  { }
}
