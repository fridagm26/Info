<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Inicio extends CI_Controller {

	public function __construct(){
		parent::__construct();

		$this->load->model('modulo_modelo');
	}
	public function index()
	{
		$data['modulos'] = $this->modulo_modelo->obtenerModulos();
    $this->load->view('inicio',$data);
	}
	
	public function hola(){
		$data['modulos'] = $this->modulo_modelo->obtenerModulos();
		$this->load->view('ejemplo',$data);
	}

	public function adios(){
		$data['modulos'] = $this->modulo_modelo->obtenerModulos();
		$this->load->view('ejemplo2',$data);
	}
}
