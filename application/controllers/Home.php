<?php
defined('BASEPATH') OR exit('No direct script access allowed');

Class Home extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();

  }

//Cargar el form
  public function index()
  {
    $data['titulo'] = 'Home';
    $this->load->view('estaticos/Navbar', $data);
    $this->load->view('Home');
  }
}
