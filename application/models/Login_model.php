<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_model extends CI_Model {

	public function __construct(){
		parent::__construct();
	}

	/*Funcion para realizar el login*/
	public function login($email, $hash)
	{
		//Aqui se obtienen los datos del usuario que quiere iniciar sesión
		$this->db->where('email', $email);
		$query = $this->db->get('Users');
		//Si coincide se procede
		if ($query->num_rows()==1)
		{
			$user = $query->row();
			/*En la siguiente variable se almacena la contraseña de la bd para comprobarse*/
			$pass = $user->password;

			/*Procedimiento para comprobar 
			si el password coincide*/
			if($this->bcrypt->check_password($hash, $pass))
			{
				return $query->row();
			}else
			{
				$this->session->set_flashdata('Usuario o contraseña incorrecta');
			}


		}

	}
}
