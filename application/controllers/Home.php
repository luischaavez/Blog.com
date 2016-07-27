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
      $url = base_url().'Home/detalle'.$post;
      echo "<script> alert ('¡Published!');
      window.location.href = '$url';
      </script>";
      }
  }

  public function vista_newpost(){
    $data['titulo'] = 'New post';
    if ($this->session->userdata('logueado')){
      $this->load->view('estaticos/Navbar',$data);
      $this->load->view('New_post');
    }else {
      redirect(base_url().'Home/index', $method ='auto');
    }

  }

  public function new_post()
  {
    //Reglas
    $this->form_validation->set_rules('tittle', 'tittle', 'required|min_length[10]|trim');
    $this->form_validation->set_rules('desc', 'desc', 'required|min_length[10]|trim');
    $this->form_validation->set_rules('content', 'content', 'required|min_length[10]|trim');

    $this->form_validation->set_message('required', 'This field must not be empty');
    $this->form_validation->set_message('min_length', 'The field needs to have at less 10 chars');

//Verificar la validacion de las reglas
    if (!$this->form_validation->run() == FALSE)
    {
      $this->vista_newpost();
    }else {

      $title = $this->input->post('title');
      $description = $this->input->post('desc');
      $content = $this->input->post('content');
      $fecha = date('Y-m-d H:i:s');
      $username = $this->session->userdata('username');

      $post = $this->Posts_model->insert_post($title, $description, $content, $fecha, $username);

      if($post){
        $url = base_url().'Home/index';
				echo "<script> alert ('¡Published!');
				window.location.href = '$url';
				</script>";

      }else {

        echo "<script> alert ('¡Error!');
        </script>";

      }
      }

  }
}
