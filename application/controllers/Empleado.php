<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Empleado extends CI_Controller
{

	function __construct()
	{
		parent::__construct();

		$this->load->helper('form');
		$this->load->helper('html');
		$this->load->helper('url');
		$this->load->model('empleados_model');
		$this->load->library('session');

	}

	public function index()
	{
		$data['lista'] = $this->empleados_model->listar();
		$this->load->view('plantillas/headers', $data);
		$this->load->view('empleados/index', $data);
		$this->load->view('plantillas/footers', $data);
	}

	public function crear()
	{

		$this->load->model('empleados_model');

		$this->load->helper('form');
		$this->load->library('form_validation');


		$this->form_validation->set_rules('nombre', 'Nombre', 'Required');
		$this->form_validation->set_rules('apellido', 'Apellido', 'Required');
		$this->form_validation->set_rules('usuario', 'Usuario', 'Required');
		$this->form_validation->set_rules('contraseña', 'Contraseña', 'Required');


		if ($this->form_validation->run() === FALSE) {

			$this->load->view('plantillas/headers');
			$this->load->view('empleados/crear');
			$this->load->view('plantillas/footers');
		} else {
			$resp = $this->empleados_model->set_empleados();
			if ($resp)
				redirect('/empleado');
			else
				var_dump('error al guardar');
		}
	}

	/*
	public function modificar()
	{
		$this->load->model('empleados_model');


		$this->load->helper('form');
		$this->load->library('form_validation');

		$this->form_validation->set_rules('nombre', 'Nombre', 'Required');
		$this->form_validation->set_rules('apellido', 'Apellido', 'Required');
		$this->form_validation->set_rules('usuario', 'Usuario', 'Required');
		$this->form_validation->set_rules('contraseña', 'Contraseña', 'Required');

		if ($this->form_validation->run() === FALSE) {

			$data['lista'] = $this->empleados_model->listar();

			$this->load->view('plantillas/headers', $data);
			$this->load->view('empleados/modificar', $data);
			$this->load->view('plantillas/footers', $data);
		} else {


			$resp = $this->empleados_model->update_empleados();

			if ($resp) {
				redirect('/empleado');
			} else {
				var_dump('error al modificar');
			}
		}
	}
	*/

	public function update($id)
	{
		$data['data'] = $this->empleados_model->get_one($id);
		if ($data['data'] == null) {
			redirect('/dftep');
		}

		$this->load->helper('form');
		$this->load->library('form_validation');

		$this->form_validation->set_rules('nombre', 'Nombre', 'Required');
		$this->form_validation->set_rules('apellido', 'Apellido', 'Required');
		$this->form_validation->set_rules('usuario', 'Usuario', 'Required');
		$this->form_validation->set_rules('contraseña', 'Contraseña', 'Required');

		if ($this->form_validation->run() === FALSE) {

			$this->load->view('plantillas/headers', $data);
			$this->load->view('empleados/modificar', $data);
			$this->load->view('plantillas/footers', $data);
		} else {
			$this->empleados_model->update_empleados($data['data']);
			redirect('/empleado');
		}
	}

	public function delete($id)
	{
		if ($this->input->method() == 'post') {
			// aqui va tu funcion de delete en la base de datos
			$this->empleados_model->delete($id);
			redirect('/empleado');
		} else {
			show_error('PETICION INVALIDA');
		}
	}
}


