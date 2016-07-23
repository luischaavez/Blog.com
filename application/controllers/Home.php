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
    $this->load->view('estaticos/Footer');
  }

  public function detalle($id){
    $id_post = $this->security->xss_clean($id);
    $data['id'] = $id_post;
    $data['detalle'] = $this->Posts_model->detalle_post($id_post);
    $data['comments'] = $this->Comment_model->get_comment($id_post);
    $data['titulo'] = $data['detalle']->Nombre_articulo;
      $this->load->view('estaticos/Navbar', $data);
    $this->load->view('Detalle', $data);
  }


  public function insert_comment()
  {
    $post = $this->input->post('id_post');
    $comment = array(
      'User' => $this->session->userdata('username'),
      'Comment' => $this->input->post('comment'),
      'Fecha' => date('Y-m-d H:i:s'),
      'Id_articulo' =>  $post
    );

    $this->Comment_model->insert($comment);
    if ($comment){
    }
}
}
