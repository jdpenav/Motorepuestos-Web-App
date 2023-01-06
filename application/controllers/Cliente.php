<?php
defined('BASEPATH') OR exit('No direct script access allowed');
use Dompdf\Dompdf;

class Cliente extends CI_Controller {

	function __construct(){
		parent::__construct();

		$this->load->helper('form');
		$this->load->helper('html');
		$this->load->helper('url'); 
		$this->load->model('clientes_model');
		$this->load->library('session');
		
	}
	
	public function index()
	{
		$data['lista'] = $this->clientes_model->listar();
		$this->load->view('plantillas/headers', $data);
		$this->load->view('clientes/index', $data);
		$this->load->view('plantillas/footers', $data);	
	}

	public function crear()
	{

		$this->load->model('clientes_model');

		$this->load->helper('form');
		$this->load->library('form_validation');


		$this->form_validation->set_rules('nombre', 'Nombre', 'Required');
		$this->form_validation->set_rules('apellido', 'Apellido', 'Required');



		if ($this->form_validation->run() === FALSE) {

			$this->load->view('plantillas/headers');
			$this->load->view('clientes/crear');
			$this->load->view('plantillas/footers');
		} else {
			$resp = $this->clientes_model->set_clientes();
			if ($resp)
				redirect('/cliente');
			else
				var_dump('error al guardar');
				show_error('NO SE PUEDE GUARDAR ');
		}
	}

	public function update($id)
	{
		$data['data'] = $this->clientes_model->get_one($id);
		if ($data['data'] == null) {
			redirect('/dftep');
		}

		$this->load->helper('form');
		$this->load->library('form_validation');

		$this->form_validation->set_rules('nombre', 'Nombre', 'Required');
		$this->form_validation->set_rules('apellido', 'Apellido', 'Required');

		if ($this->form_validation->run() === FALSE) {

			$this->load->view('plantillas/headers', $data);
			$this->load->view('clientes/modificar', $data);
			$this->load->view('plantillas/footers', $data);
		} else {
			$this->clientes_model->update_clientes();
			redirect('/cliente');
		}
	}

	public function delete($id)
	{
		if ($this->input->method() == 'post') {
			// aqui va tu funcion de delete en la base de datos
			$this->clientes_model->delete($id);
			redirect('/cliente');
		} else {
			show_error('PETICION INVALIDA');
		}
	}

	public function imprimir()
	{
		$data['lista'] = $this->clientes_model->listar();
		$this->load->view('clientes/imprimir', $data);
	}

	


}
