<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Registro extends CI_Controller {
	
	public function index()
	{
		//$data['lista'] = $this->clientes_model->listar();
		$this->load->view('plantillas/encabezado');
		$this->load->view('register/index');
		$this->load->view('plantillas/footers');	
	}
}
