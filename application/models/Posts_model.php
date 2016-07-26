<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Posts_model extends CI_Model {

  public function __construct()
  {
    parent::__construct();
  }

  //Insertar los post
  public function insert_post($title, $description, $content, $fecha, $username)
  {
    $data = array(
      'Nombre_articulo' => $title,
      'Contenido' => $description,
      'Contenido_total' => $content,
      'Fecha' => $fecha,
      'Autor' => $username,
      'Id_categoria' => 2);

      return $this->db->insert('Posts', $data);
  }

  public function lista_posts()
  {
    $this->db->order_by('Id_articulo', 'desc');
    $con = $this->db->get('Posts');
    return $con->result();

  }

//Lista de post pot usuario
  public function post_user()
  {
  $this->db->order_by('Id_articulo', 'desc');
  $this->db->where('Autor', $this->session->userdata('username'));
  $consulta =  $this->db->get('Posts');
  return $consulta->result();
  }

  //Mostrar el articulo en otra página
    public function detalle_post($id_post)
    {
      $this->db->where('Id_articulo', $id_post);
        $consulta = $this->db->get('Posts');
        return $consulta->row();
    }
}
