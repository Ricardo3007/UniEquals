<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Comparar extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		//$this->load->helper('url');
		$this->load->model('Comparar_model'); //cargando el modelo Comparar
	}

	public function index()
	{
	 	$data['carreras'] = $this->Comparar_model->cargarCarrera();	
	 	$data['content'] ='comparar/index';
	 	$this->load->view('template/homecomparar',$data); // view/index.php
	}

	public function filtro()
	{
		if($this->input->post()){ //Validar petición POST
			$data = array();
			$universidad = $this->Comparar_model->cargarUniversidadFiltro();
			if(!empty($universidad)){
				foreach ($universidad as $key => $uni) {
					$data[] = $uni; //aqui traemos todos los campos de la consulta
					/* $data['coduniversidad']=$uni->coduniversidad; una forma de hacerlo 
					$data['logo']=$uni->logo;
					$data['razonsocial']=$uni->razonsocial;
					$data['descripcion']=$uni->descripcion;
					$data['url']=$uni->url;
					$data['codcarrera']=$uni->codcarrera; */
				}
				echo json_encode($data); //Retornamos la data en un Json
			}else{
				echo "ERROR";
			}
		}
	}

	public function comparar()
	{
		if($this->input->post()){ //Validar petición POST
			$data = array();
			$listaComparar = $this->input->post('listaComparar'); //Obtenemos la lista creada en Js
			$arrayComparar = json_decode($listaComparar, true); //Convertimos Json to Array
			$where = "";
			$cont = 0;
			foreach ($arrayComparar as $key => $uni) {
				$operador = ($cont != count($arrayComparar) - 1) ? "||" : "";
				$where .=" dcar.`cod`='".$uni["id"]."' ".$operador;
				$cont++;
			}
			$carrera = $this->Comparar_model->buscarDetalleCarreras($where);
			if(!empty($carrera)){
				foreach ($carrera as $key => $car) {
					$data[] = $car;
				}
				echo json_encode($data); //Retornamos la data en un Json
			}else{
				echo "ERROR";
			}
		}
	}
}
