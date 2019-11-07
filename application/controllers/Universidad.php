<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Universidad extends CI_Controller {

public function __construct()
 {
     parent::__construct();
     //$this->load->helper('url');
     $this->load->model('Pregrados_model');//cargando el modelo Usuarios
 }

	public function index()
	{
		$data['carreras'] = $this->Pregrados_model->cargarCarrera();
		$data['entidadeducativa'] = $this->Pregrados_model->cargarEntidad();	
		$data['modalidad'] = $this->Pregrados_model->cargarModalidad();
		$data['formacion'] = $this->Pregrados_model->cargarFormacion();
	    $data['content'] ='pregrados/index';
		$this->load->view('template_universidad/perfil_universidad',$data); // view/index.php
	 
	}

	/* public function eliminar($id)
	{
	if($this->Usuarios_model->eliminar($id))
	$this->session->set_flashdata('msg','Registro Eliminado');
		//echo '<h1> Registro Eliminado..</h1>';
	 else	
	 $this->session->set_flashdata('error','No se pudo eliminar');
	   //echo '<h1> Error No se pudo Eliminar el registro..</h1>';
	 $this->index();
	} */

	/* public function actualizar()
	{
		if($this->input->post()){
			if($this->Usuarios_model->update()){
				$this->session->set_flashdata('msg','Registro Actualizado');
			//echo "<h1>Registro Actualizado</h1>";
			}else 
			$this->session->set_flashdata('error','Registro error! No se pudo actualizar');
		 //echo "<h1>error Actualizado</h1>";
		}	

	} */
	public function guardar()
	{
		if($this->Pregrados_model->agregarPregrados())
		   echo "Registro Guardado";
		else 
		echo "Error al guardar";
	}
	public function guardarNuevasCarreras()
	{
		if($this->Pregrados_model->nuevasCarreras())
		   echo "Registro Guardado";
		else 
		echo "Error al guardar";
	}


	/* public function getByid($id)
  {
      $data=$this->Usuarios_model->getByid($id);  
      foreach($data as $regdata)
      {
      $msg['id']=$regdata->id;
      $msg['nombres']=$regdata->nombres;
      $msg['apellidos']=$regdata->apellidos;
      $msg['direccion']=$regdata->direccion;
      $msg['telefono']=$regdata->telefono;
      $msg['email']=$regdata->email;
      $msg['password']=$regdata->password;
      }
      echo json_encode($msg);
  } */
}
