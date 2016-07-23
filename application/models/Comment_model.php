<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Comment_model extends CI_Model
{
  public function __construct()
  {
    parent::__construct();
  }

  public function insert($comment)
  {
    $this->db->insert('Comments', $comment);
  }

  public function get_comment($id_post)
  {

    $this->db->where('Id_articulo', $id_post);
    $this->db->order_by('Id_comment', 'desc');
    $query = $this->db->get('Comments');
    return $query->result();
  }
}
