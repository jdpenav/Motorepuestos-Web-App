<?php
defined('BASEPATH') or exit('No direct script access allowed');
use Dompdf\Dompdf;

class Categoria extends CI_Controller
{

	function __construct()
	{
		parent::__construct();

		$this->load->helper('form');
		$this->load->helper('html');
		$this->load->helper('url');
		$this->load->model('categorias_model');
		$this->load->library('session');
	}

	public function index()
	{
		$data['lista'] = $this->categorias_model->listar();
		$this->load->view('plantillas/headers', $data);
		$this->load->view('categorias/index', $data);
		$this->load->view('plantillas/footers', $data);
	}

	public function crear()
	{
		$this->load->model('categorias_model');

		//$this->load->helper('form');
		$this->load->library('form_validation');

		$this->form_validation->set_rules('nombre', 'Nombre de Categoria', 'Required');

		if ($this->form_validation->run() === FALSE) {
			$this->load->view('plantillas/headers');
			$this->load->view('categorias/crear');
			$this->load->view('plantillas/footers');
		} else {
			$this->categorias_model->set_categorias();
			redirect('/categoria');
		}
	}

	public function update($id)
	{
		$data['data'] = $this->categorias_model->get_one($id);
		if ($data['data'] == null) {
			redirect('/dftep');
		}

		$this->load->helper('form');
		$this->load->library('form_validation');

		$this->form_validation->set_rules('nombre', 'Nombre', 'Required');

		if ($this->form_validation->run() === FALSE) {

			$this->load->view('plantillas/headers', $data);
			$this->load->view('categorias/modificar', $data);
			$this->load->view('plantillas/footers', $data);
		} else {
			$this->categorias_model->update_categorias();
			redirect('/categoria');
		}
	}

	public function delete($id)
	{
		if ($this->input->method() == 'post') {
			// aqui va tu funcion de delete en la base de datos
			$this->categorias_model->delete($id);
			redirect('/categoria');
		} else {
			show_error('PETICION INVALIDA');
		}
	}

	public function imprimir()
	{
		$data['lista'] = $this->categorias_model->listar();
		$this->load->view('categorias/imprimir', $data);
	}

	/*
	public function pdf(){
		
		$data['lista'] = $this->categorias_model->listar();
		
		$dompdf = new Dompdf();
		$dompdf->loadHtml('<h1>REPORTE DE CAREGORIAS</h1>');

		$dompdf->setPaper('A4', 'landscape');

		$dompdf->render();

		$dompdf->stream();

		

	}
	*/
}
