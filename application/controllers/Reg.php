<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Reg extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		/*Cargar la libreria Bcrypt*/
		this->load->library('bcrypt');
		this->load->model('Registro_model');
		this->load->library(array('form_validation', 'session'));
		this->load->helper(array('url', 'form'));
		this->load->database('default');
	}


	//Cargar form de Registro
	public function index()
	{
		$data['titulo'] = 'Registro';
		$data['token'] = this->token();
		$this->load->view('Registro');
	}

//Clave aleatoria
	public function token(){

		$token = md5(uniqid(rand(), true));
		this->session->set_userdata('token', $token);
		return $token;

	}

/*Procesar los datos de la vista*/
	public function registro_bcrypt()
	{
		if($this->input->post('token') && this->input->post('token') == this->session->userdata('token'))
		{
			//Reglas
			$this->form_validation->set_rules('nameu', 'Nombre del usuario', 'required|trim|max_length[50]|xss_clean');
			$this->form_validation->set_rules('email', 'Email del usuario', 'required|trim|max_length[50]|xss_clean');
			$this->form_validation->set_rules('user', 'Nombre de usuario', 'required|trim|max_length[50]|xss_clean');
			$this->form_validation->set_rules('pass', 'password', 'required|trim|min_length[6]|max_length[50]|xss_clean');

			/*Mensajes de error*/
			$this->form_validation->set_message('required', 'El campo es obligatorio');
			$this->form_validation->set_message('min_length', 'El campo debe tener al menos 6 caracteres');
			$this->form_validation->set_message('max_length', 'El campo no puede tener mas de 50 caracteres');

			//Si algo falla se mostraran errores
		if ($this->form_validation-run() ==FALSE)
		{
			$this->index();
		}else
		{
		//Si funciona se procesan los datos
		$name = $this->input->post('nameu');
		$email = $this->input->post('email');
		$username = $this->input->post('user');
		$password = $this->input->post('pass');
		$hash = $this->bcrypt->hash_password($password);
		//Probar si la contraseña se encripto
		if ($this->)bcrypt->check_password($password, $hash))
		{

			$insert_pass = $this->secure_bcrypt_model->save_pass($name, $email, $username, $hash);
			if ($insert_pass)
			{
				redirect(base_url().'Reg/index');
			}
		}else
		{
			return 0;
		}

		}

		}
	}
}
