<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		//$this->load->helper('url');
		$this->load->helper('url');
        $this->load->helper('form');
        $this->load->library('form_validation');
		$this->load->model('Home_model'); //cargando el modelo Usuarios
	}
	public function index()
	{
	 	$data['content'] ='template/adelante';
		 $this->load->view('template/home',$data); // view/index.php
		

	}
	public function registrado()
	{
	 	$data['content'] ='template/adelante';
		 $this->load->view('template/registrado',$data); // view/index.php
	}
	
	public function login()
	{
	 	$data['content'] ='login/login';
		 $this->load->view('template/home',$data); // view/index.php
	}
	public function registro()
	{
	 	$data['content'] ='login/registro';
		 $this->load->view('template/home',$data); // view/index.php
	}
	public function cerrar_sesion()
   {
     $this->session->unset_userdata('user_data');//elimina la session
     	
     $data['content']='login/login';
     $this->load->view('template/home',$data);
  }

    public function verifica()
    {
        $email = $this->input->post('email');
        $password = $this->input->post('password');

        if($this->Home_model->login($email, $password))
        {

			$usuariocodtipo=$this->session->userdata('user_data')['tipousuarios'];
		


			switch ($usuariocodtipo) {
				case 1:
				    $this->load->view('index');
					break;
			    case 2:
			         redirect('/Universidad');
			         break;
				case 3:
				redirect('Home/registrado');
					break;
				
				default:
					# code...
					break;
			}

		}
		else
        {
            $this->session->set_flashdata('error','Contraseña incorrecta');	
       	
            $data['content']='login/login';
            $this->load->view('template/home',$data);
            
		}

		
		
	}
	public function guardarusuario(){
		if($this->Home_model->agregrarusuario())
		   echo "Registro Guardado";
		else 
		echo "Error al guardar";
	}
	public function usuarioentidad(){


/* 

		 $codusuario=$this->session->userdata('user_data')['cod'];
		$enti=$this->Home_model->usuarioentidad($codusuario); */ 
	
var_dump($enti);

	}
}
