<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Inicio extends CI_Controller
{

	function __construct()
	{
		parent::__construct();

		$this->load->helper('form');
		$this->load->helper('html');
		$this->load->helper('url');
		$this->load->model('articulos_model');
		$this->load->library('session');

	}

	public function index()
	{
		$data['lista'] = $this->articulos_model->listar();
		$this->load->view('plantillas/headers', $data);
		$this->load->view('inicio/index', $data);
		$this->load->view('plantillas/footers', $data);	
	}

	
}
