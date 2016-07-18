<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register_model extends CI_Model {

	public function __construct(){
		parent::__construct();
	}

	/*Guardar los datos en la tabla de usuarios*/
	public function save_data($name, $email, $username, $hash)
	{
		$data = array(
			'nombre' => $name,
			'email' => $email,
			'username' => $username,
			'password' => $hash
		);

		return $this->db->insert('Users', $data);
	}
}
