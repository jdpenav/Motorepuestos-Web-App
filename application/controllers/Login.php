<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{

	function __construct()
	{
		parent::__construct();

		$this->load->helper('form');
		$this->load->helper('html');
		$this->load->helper('url');
		$this->load->library(['form_validation', 'session']);
		//$this->load->library('encrypt');
		$this->load->database();
	}

	public function index()
	{
		$this->load->view('plantillas/encabezado');
		$this->load->view('login/index');
		$this->load->view('plantillas/footers');
	}

	public function iniciarsesion()
	{

		$this->form_validation->set_rules('usuario', 'Usuario', 'required');
		$this->form_validation->set_rules('contraseña', 'Contraseña', 'required');

		if ($this->form_validation->run() == FALSE) {
			$this->load->view('plantillas/encabezado');
			$this->load->view('login/index');
			$this->load->view('plantillas/footers');
		} else {

			$usuario = $this->input->post('usuario');
			$contraseña = $this->input->post('contraseña');

			$user = $this->db->get_where('empleados', ['usuario' => $usuario])->row();

			//var_dump($user);
			//die();

			if (!$user) {
				$this->session->set_flashdata('login_error', 'Please check your email or password and try again.', 300);
				redirect(uri_string());
			}


			if (!password_verify($contraseña, $user->contraseña)) {
				//var_dump($contraseña);
				//var_dump($user->contraseña);
				//echo password_hash($user->contraseña, PASSWORD_DEFAULT);
				//var_dump("Password malo");
				//die();

				$this->session->set_flashdata('login_error', 'Please check your email or password and try again.', 300);
				redirect(uri_string());
			}

			$data = array(
				'idEmpleado' => $user->idEmpleado,
				'nombre' => $user->nombre,
				'apellido' => $user->apellido,
				'correo' => $user->correo,
			);


			$this->session->set_userdata($data);

			redirect('/inicio'); // redirect to home

			
		}
	}

	public function logout(){
        $this->session->sess_destroy();
        redirect('/login');
    }


	
}
