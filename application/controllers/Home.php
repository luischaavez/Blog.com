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
    $data['post'] = $this->Posts_model->lista_posts();
    $this->load->view('estaticos/Navbar', $data);
    $this->load->view('Home');
  }

  public function detalle($id){
    $id_post = $this->security->xss_clean($id);
    $data['detalle'] = $this->Posts_model->detalle_post($id_post);
    $data['titulo'] = $data['detalle']->Nombre_articulo;
      $this->load->view('estaticos/Navbar', $data);
    $this->load->view('Detalle', $data);
  }
}
