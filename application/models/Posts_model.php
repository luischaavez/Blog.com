<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Posts_model extends CI_Model {

  public function __construct()
  {
    parent::__construct();
  }

   function lista_posts()
  {
    $this->db->order_by('Id_articulo', 'desc');
    $con = $this->db->get('Posts');
    return $con->result();

  }
  //Mostrar el articulo en otra página
    public function detalle_post($id_post)
    {
      $this->db->where('Id_articulo', $id_post);
        $consulta = $this->db->get('Posts');
        return $consulta->row();
    }
}
