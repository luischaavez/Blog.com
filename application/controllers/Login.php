<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {


	public function __construct()
	{
		parent::__construct();
		$this->load->library('bcrypt');
		$this->load->library(array('form_validation', 'session'));
		$this->load->helper(array('url', 'form'));
		$this->load->database('default');
	}

	public function index()
	{
		$data['titulo']='Login';
		$data['token'] = $this->token();
		$this->load->view('Login_view', $data);
	}

	public function token()
  {
    $token = md5(uniqid(rand(),true));
    $this->session->set_userdata('token',$token);
    return $token;
  }

  	public function entrada_login()
  	{

  		//Verificar la clave token
  		if ($this->input->post('token') && $this->input->post('token') == $this->session->userdata('token')){

  			//Reglas
			$this->form_validation->set_rules('email', 'email', 'required|trim|max_length[50]');
			$this->form_validation->set_rules('pass', 'pass', 'required|trim|max_length[50]');

			
			$this->form_validation->set_message('required', 'El campo es obligatorio');
			$this->form_validation->set_message('min_length', 'El campo debe tener al menos 6 caracteres');
			$this->form_validation->set_message('max_length', 'El campo no puede tener mas de 50 caracteres');


  			}

  		if (!$this->form_validation->run())	
  		{
  			$this->index();
  		}else
  		{

  			$email = $this->input->post('email');
  			$password = $this->input->post('pass');

  			$login = $this->Login_model->login($email, $password);

  			if($login)
  			{
  				$dat = array(
  					'logueado' => TRUE,
  					'email' => $login->email,
  					'password' => $login->password
  					);
  				$this->session->set_userdata($dat);

  			}

  		}
  	}

}