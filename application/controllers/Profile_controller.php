<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profile_controller extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
  }

  public function index()
  {
    $data['titulo']= 'My profile';
    $this->load->view('estaticos/Navbar', $data);
    $this->load->view('Profile');
    $this->load->view('estaticos/Footer');
  }
}
