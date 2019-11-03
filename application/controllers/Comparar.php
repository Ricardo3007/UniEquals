<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Comparar extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		//$this->load->helper('url');
		$this->load->model('Comparar_model'); //cargando el modelo Usuarios
	}

	public function index()
	{
	 	$data['carreras']=$this->Comparar_model->cargarCarrera();	
	 	$data['content'] ='comparar/index';
	 	$this->load->view('template/home',$data); // view/index.php
	}

	public function filtro(){
		if($this->input->post()){
			//$data['universidades']=$this->Comparar_model->cargarUniversidadFiltro();
			$data['content'] ='comparar/comparar';
	 		$this->load->view('template/home',$data); // view/index.php
		}
	}
}
