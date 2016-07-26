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
    $data['post'] = $this->Posts_model->post_user();
    if($this->session->userdata('logueado')){
      $this->load->view('estaticos/Navbar', $data);
      $this->load->view('Profile');
    }else{
      redirect(base_url().'Home/index', $method = 'auto');
    }


  }
}
