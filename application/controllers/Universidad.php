<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Universidad extends CI_Controller {

public function __construct()
 {
     parent::__construct();
     //$this->load->helper('url');
     $this->load->model('Pregrados_model');//cargando el modelo Usuarios
 }
/* CARGA EL TEMPLATE_UNIVERSIDAD */
	public function index()
	{
		$codusuario=$this->session->userdata('user_data')['cod'];
		$data['entidad'] = $this->Pregrados_model->obtenerEntidad($codusuario);
		$data['carreras'] = $this->Pregrados_model->cargarCarrera();
		$data['formacion'] = $this->Pregrados_model->cargarFormacion();
		$data['modalidad'] = $this->Pregrados_model->cargarModalidad();
	    $data['content'] ='pregrados/index';
		$this->load->view('template_universidad/perfil_universidad',$data); // view/index.php
	 
	}
	/**/

	/*--------------------- RUTA DE OPCION ADMINISTRACION EN EL TEMPLATE_UNIVERSIDAD ------------------------------*/

	public function indexadministracion()//VISTA ADMINISTRACION DEL TEMPLATE_UNIVERSIDAD
	{
		$codusuario=$this->session->userdata('user_data')['cod'];
		 
		$data['entidad'] = $this->Pregrados_model->obtenerEntidad($codusuario);
	    $data['content'] ='pregrados/dashboard';
		$this->load->view('pregrados/administracion',$data); // view/index.php
	 
	}
	public function perfilpersonal()//OPCION PERFIL PERSONAL DE LA VISTA ADMINISTRACION
	{
		$codusuario=$this->session->userdata('user_data')['cod'];
		$data['usuario'] = $this->Pregrados_model->obtenerusuario($codusuario);
	    $data['content'] ='usuarios/personal';
		$this->load->view('pregrados/administracion',$data); // view/index.php
	 
	}
	public function perfilentidad()//OPCION PERFIL ENTIDAD DE LA VISTA ADMINISTRACION
	{
		$codusuario=$this->session->userdata('user_data')['cod'];
		$data['entidad'] = $this->Pregrados_model->obtenerEntidad($codusuario);
        $data['content'] ='usuarios/universitario'; 
		$this->load->view('pregrados/administracion',$data); // view/index.php
	 
	}
	
	public function pregrados()//OPCION PREGRADO DE LA VISTA ADMINISTRACION
	{
		$codusuario=$this->session->userdata('user_data')['cod'];

		$data['entidad'] = $this->Pregrados_model->obtenerEntidad($codusuario);
		$data['carreras'] = $this->Pregrados_model->cargarCarrera();
		$data['formacion'] = $this->Pregrados_model->cargarFormacion();
		$data['modalidad'] = $this->Pregrados_model->cargarModalidad();
		$data['detallespregrados'] = $this->Pregrados_model->detallespregradosentidad($codusuario);
	    $data['content'] ='pregrados/listar_pregrados';
		$this->load->view('pregrados/administracion',$data); // view/index.php
	 
	}

	public function interesados()//OPCION INTERESADOS DE LA VISTA ADMINISTRACION
	{
		$codusuario=$this->session->userdata('user_data')['cod'];
		$this->load->view('pregrados/administracion',$data); // view/index.php
	 
	}
/*---------------------FIN  RUTA DE OPCION ADMINISTRACION EN EL TEMPLATE_UNIVERSIDAD ------------------------------*/


public function actualizarentidad()
	{
		if($this->input->post()){
			if($this->Pregrados_model->update()){
				$this->session->set_flashdata('msg','Registro Actualizado');
			//echo "<h1>Registro Actualizado</h1>";
			}else 
			$this->session->set_flashdata('error','Registro error! No se pudo actualizar');
		 //echo "<h1>error Actualizado</h1>";
		}	
	}
	public function actualizarUsuarioEntidad()
	{
		if($this->input->post()){
			if($this->Pregrados_model->updateUsuario()){
				$this->session->set_flashdata('msg','Registro Actualizado');
			//echo "<h1>Registro Actualizado</h1>";
			}else 
			$this->session->set_flashdata('error','Registro error! No se pudo actualizar');
		 //echo "<h1>error Actualizado</h1>";
		}	
	}
	public function actualizarPregrados()
	{
		if($this->input->post()){
			if($this->Pregrados_model->updatePregrado()){
				$this->session->set_flashdata('msg','Registro Actualizado');
			//echo "<h1>Registro Actualizado</h1>";
			}else 
			$this->session->set_flashdata('error','Registro error! No se pudo actualizar');
		 //echo "<h1>error Actualizado</h1>";
		}	
	}



/* -----------------SECCION GUARDAR PREGRADOS Y CARRERAS---------------------------------------------------------- */
	public function guardar()//GUARDA LOS PREGRADOS NUEVOS POR EL USUARIO ADMIN O UNIVERSIDAD
	{
		if($this->Pregrados_model->agregarPregrados())
		   echo "Registro Guardado";
		else 
		echo "Error al guardar";
	}
	public function guardarNuevasCarreras()//GUARDA LAS NUEVAS CARRERAS POR EL USUARIO ADMIN O UNIVERSIDAD
	{
		if($this->Pregrados_model->agregarCarreras())
		   echo "Registro Guardado";
		else 
		echo "Error al guardar";
		
	}

	


	public function obtenercodEntidad($cod)
  {
      $data=$this->Pregrados_model->obtenercodEntidad($cod);  
      foreach($data as $regdata)
      {
	  $msg['cod']=$regdata->cod;
	  $msg['logo']=$regdata->logo;
      $msg['razonsocial']=$regdata->razonsocial;
      $msg['nit']=$regdata->nit;
      $msg['snies']=$regdata->snies;
      $msg['descripcion']=$regdata->descripcion;
      $msg['direccionurl']=$regdata->direccionurl;
	  $msg['nombreubicacion']=$regdata->nombreubicacion;
	  $msg['direccionubicacion']=$regdata->direccionubicacion;

      }
      echo json_encode($msg);
  } 
  public function obtenerusuario($codusuario)
  {
      $data=$this->Pregrados_model->obtenerusuario($codusuario);  
      foreach($data as $regdata)
      {
	  $msg['cod']=$regdata->cod;
	  $msg['nombres']=$regdata->nombres;
      $msg['apellidos']=$regdata->apellidos;
      $msg['genero']=$regdata->genero;
      $msg['email']=$regdata->email;
      $msg['password']=$regdata->password;


      }
      echo json_encode($msg);
  } 

  public function detallespregrados($cod)
  {
      $data=$this->Pregrados_model->detallespregrados($cod);  
      foreach($data as $regdata)
      {
	  $msg['cod']=$regdata->cod;
	  $msg['snies']=$regdata->snies;
      $msg['acreditacion']=$regdata->acreditacion;
      $msg['duracion']=$regdata->duracion;
      $msg['creditos']=$regdata->creditos;
      $msg['perfilocupacional']=$regdata->perfilocupacional;
	  $msg['valormatricula']=$regdata->valormatricula;
	  $msg['planestudio']=$regdata->planestudio;
	  $msg['dropModalidad']=$regdata->modalidad_cod;
	  $msg['dropFormacion']=$regdata->formacion_cod;
	  $msg['dropCategoria']=$regdata->nombre;


      }
      echo json_encode($msg);
  } 
 
}
