<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class modulo_controllers extends CI_Controller {

	public function __construct(){
		parent::__construct();

		$this->load->model('modulo_modelo')
	}
    
    public function modulos(){
        $modulos = $this->modulo_modelo->obtenerModulos();
        echo $modulos
    }
}

