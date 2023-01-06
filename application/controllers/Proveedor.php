<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Proveedor extends CI_Controller {

	function __construct(){
		parent::__construct();

		$this->load->helper('form');
		$this->load->helper('html');
		$this->load->helper('url'); 
		$this->load->model('proveedores_model');
		$this->load->library('session');
		
	}
	
	public function index()
	{
		$data['lista'] = $this->proveedores_model->listar();
		$this->load->view('plantillas/headers', $data);
		$this->load->view('proveedores/index', $data);
		$this->load->view('plantillas/footers', $data);	
	}

	public function crear()
	{

		$this->load->model('proveedores_model');

		$this->load->helper('form');
		$this->load->library('form_validation');

		$this->form_validation->set_rules('nombre', 'Nombre', 'Required');
		$this->form_validation->set_rules('telefono', 'Telefono', 'Required');

		if ($this->form_validation->run() === FALSE) {
			$this->load->view('plantillas/headers');
			$this->load->view('proveedores/crear');
			$this->load->view('plantillas/footers');
		} else {
			$this->proveedores_model->set_proveedores();
			redirect('/proveedor');
		}
	}

	public function update($id)
	{
		$data['data'] = $this->proveedores_model->get_one($id);
		if ($data['data'] == null) {
			redirect('/dftep');
		}

		$this->load->helper('form');
		$this->load->library('form_validation');

		$this->form_validation->set_rules('nombre', 'Nombre', 'Required');
		$this->form_validation->set_rules('telefono', 'Telefono', 'Required');

		if ($this->form_validation->run() === FALSE) {

			$this->load->view('plantillas/headers', $data);
			$this->load->view('proveedores/modificar', $data);
			$this->load->view('plantillas/footers', $data);
		} else {
			$this->proveedores_model->update_proveedores();
			redirect('/proveedor');
		}
	}

	
	public function delete($id)
	{
		if ($this->input->method() == 'post') {
			// aqui va tu funcion de delete en la base de datos
			$this->proveedores_model->delete($id);
			redirect('/proveedor');
		} else {
			show_error('PETICION INVALIDA');
		}
	}



}
