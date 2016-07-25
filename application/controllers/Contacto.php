<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contacto extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    $this->config>load('email');
    $this->load->library('email');
  }

  public function Send()
  {
    $this->email->initialize($config);

    $nombre = $this->input->post('nombre_email');
    $correo = $this->input->post('correo');
    $mensaje = $this->input->post('mensaje');

    //Direccion y nombre del que enviara el email
    $this->email->from($correo, $nombre);

    //Definir el asunto
    $this->email->
  }
}
