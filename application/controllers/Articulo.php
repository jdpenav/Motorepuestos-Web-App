<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Articulo extends CI_Controller {

	function __construct(){
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
		$this->load->view('articulos/index', $data);
		$this->load->view('plantillas/footers', $data);	
	}

	public function crear()
	{

		$this->load->model('articulos_model');

		$this->load->helper('form');
		$this->load->library('form_validation');

		$this->form_validation->set_rules('nombre', 'Nombre', 'Required');
		$this->form_validation->set_rules('descripcion', 'Descripcion', 'Required');
		$this->form_validation->set_rules('codProducto', 'Codigo de  Producto', 'Required');
		$this->form_validation->set_rules('Precio', 'Precio', 'Required');
		$this->form_validation->set_rules('Costo', 'Costo', 'Required');
		$this->form_validation->set_rules('Existencias', 'Existencias', 'Required');
		$this->form_validation->set_rules('Categorias_idCategoria', 'Id de Categoria', 'Required');

		if ($this->form_validation->run() === FALSE) {
			$this->load->view('plantillas/headers');
			$this->load->view('articulos/crear');
			$this->load->view('plantillas/footers');
		} else {
			$this->articulos_model->set_articulos();
			redirect('/articulo');
		}
	}

	public function update($id)
	{
		$data['data'] = $this->articulos_model->get_one($id);
		if ($data['data'] == null) {
			redirect('/dftep');
		}

		$this->load->helper('form');
		$this->load->library('form_validation');

		$this->form_validation->set_rules('nombre', 'Nombre', 'Required');
		$this->form_validation->set_rules('descripcion', 'Descripcion', 'Required');
		$this->form_validation->set_rules('codProducto', 'Codigo de  Producto', 'Required');
		$this->form_validation->set_rules('Precio', 'Precio', 'Required');
		$this->form_validation->set_rules('Costo', 'Costo', 'Required');
		$this->form_validation->set_rules('Existencias', 'Existencias', 'Required');
		$this->form_validation->set_rules('Categorias_idCategoria', 'Id de Categoria', 'Required');

		if ($this->form_validation->run() === FALSE) {

			$this->load->view('plantillas/headers', $data);
			$this->load->view('articulos/modificar');
			$this->load->view('plantillas/footers', $data);
		} else {
			$this->articulos_model->update_articulos();
			redirect('/articulo');
		}
	}

	public function delete($id)
	{
		if ($this->input->method() == 'post') {
			// aqui va tu funcion de delete en la base de datos
			$this->articulos_model->delete($id);
			redirect('/articulo');
		} else {
			show_error('PETICION INVALIDA');
		}
	}

	public function imprimir()
	{
		$data['lista'] = $this->articulos_model->listar();
		$this->load->view('articulos/imprimir', $data);
	}

}
