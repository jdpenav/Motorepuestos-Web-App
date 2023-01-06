<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dftep extends CI_Controller {
	
	public function index()
	{
		$this->load->view('plantillas/headers');
		$this->load->view('dftep');
		$this->load->view('plantillas/footers');	
	}
}
