<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pregrados_model extends CI_Model {
    public function __construct()
    {
        parent::__construct();
        $this->load->database();// cargando la conexion a DB
    }


var $table='detallecarreras';
var $table2='carreras';
var $tabla='entidadeducativa';
var $tablaubicacion="ubicacion";
var $tablausuarios="usuarios";
/* --------------------SECCION PARA AGREGAR NUEVOS DATOS DE PREGRADOS DESDE USUARIOS ADMIN Y UNIVERSITARIOS------------------- */



public function agregarPregrados()//AGREGRA LOS PREGRADOS EN EL MODAL DE LA VISTA PERFIL UNIVERSITARIO
{
    $data['snies']=$this->input->post('snies');
    $data['acreditacion']=$this->input->post('acreditacion');
    $data['duracion']=$this->input->post('duracion');
    $data['creditos']=$this->input->post('creditos');
    $data['perfilocupacional']=$this->input->post('perfilocupacional');
    $data['valormatricula']=$this->input->post('valormatricula');
    $data['planestudio']=$this->input->post('planestudio');
    $data['entidadeducativa_cod']=$this->input->post('dropEntidad');
    $data['carreras_cod']=$this->input->post('dropCategoria');
    $data['modalidad_cod']=$this->input->post('dropModalidad');
    $data['formacion_cod']=$this->input->post('dropFormacion');
    

    return $this->db->insert($this->table, $data);
}

public function agregarCarreras()//AGREGA NUEVAS CARRERAS EN EL MODAL DE LA VISTA PERFIL UNIVERSITARIO
{
    $data['nombre']=$this->input->post('nombre');
    $data['titulo']=$this->input->post('titulo');
  
    

    return $this->db->insert($this->table2, $data);
}
/* ------------------------FIN DE LA SECCION DE AGREGAR DESDE USUARIOS ADMIN Y UNIVERSITARIOS------------------------------------------- */




/* -------------------------------------INICIO DE SECCION CARGA LOS DIFERENTES ITEMS DE LOS PREGRADOS ----------------------------------------*/




public function cargarModalidad()//CARGA LOS TIPO DE MODALIDADES DE PREGRADOS
{
    $query=$this->db->query("SELECT * FROM modalidad");
    return $query->result();
}
public function cargarFormacion()//CARGA LOS TIPO DE FORMACION DE PREGRADOS
{
                $query=$this->db->query("SELECT * FROM formacion");
                return $query->result();
    }
public function cargarCarrera()//CARGA LAS CARRERAS EXISTENTES
    {
                $query=$this->db->query("SELECT * FROM carreras");
                return $query->result();
    }
    public function cargarEntidad()
    {
                $query=$this->db->query("SELECT * FROM entidadeducativa");
                return $query->result();
    }
/* -----------------------------FIN DE SECCION DE DIFERENTES ITEMS DE PREGRADOS----------------------------------------------------------- */




    public function obtenerEntidad($codusuario){//FUNCION PARA OBTENER POR CONSULTA LOS DATOS DE LA ENTIDAD POR MEDIO DEL USUARIO UNIVERSIDAD

                //ALIAS------NOMBRE TABLA EN BASE DE DATOS
                //eedu=>"entidadeducativa" 
                //usu=>"usuarios" 
                //uuni=>"usuariouniversidad"
                $consulta = "SELECT eedu.razonsocial,eedu.cod,eedu.snies,eedu.nit,eedu.descripcion,eedu.direccionurl,ubi.nombreubicacion,ubi.direccionubicacion  FROM `usuarios` usu 
                INNER JOIN `usuariouniversidad` uuni ON usu.`cod`=uuni.`codusuario` 
                INNER JOIN `entidadeducativa` eedu ON uuni.`codentidad`=eedu.`cod`
                INNER JOIN `detalleubicacion` dubi ON eedu.`cod`=dubi.`entidadeducativa_cod`
                INNER JOIN `ubicacion` ubi ON dubi.`ubicacion_cod`=ubi.`cod`

                WHERE usu.cod=$codusuario";
                $query=$this->db->query($consulta);
                return $query->result();

    }
    public function obtenerusuario($codusuario){//FUNCION PARA OBTENER POR CONSULTA LOS DATOS DE LA ENTIDAD POR MEDIO DEL USUARIO UNIVERSIDAD

        //ALIAS------NOMBRE TABLA EN BASE DE DATOS
        //eedu=>"entidadeducativa" 
        //usu=>"usuarios" 
        //uuni=>"usuariouniversidad"
        $consulta = "SELECT usu.cod,usu.nombres,usu.apellidos,usu.genero,usu.email,usu.password  FROM `usuarios` usu 
        INNER JOIN `usuariouniversidad` uuni ON usu.`cod`=uuni.`codusuario` 
        INNER JOIN `entidadeducativa` eedu ON uuni.`codentidad`=eedu.`cod`
        INNER JOIN `detalleubicacion` dubi ON eedu.`cod`=dubi.`entidadeducativa_cod`
        INNER JOIN `ubicacion` ubi ON dubi.`ubicacion_cod`=ubi.`cod`

        WHERE usu.cod=$codusuario";
        $query=$this->db->query($consulta);
        return $query->result();

}
    
    public function obtenercodEntidad($cod){//FUNCION PARA OBTENERPOR CONSULTA LOS DATOS DE LA ENTIDAD POR MEDIO DEL USUARIO UNIVERSIDAD

        //ALIAS------NOMBRE TABLA EN BASE DE DATOS
        //eedu=>"entidadeducativa" 
        //usu=>"usuarios" 
        //uuni=>"usuariouniversidad"
        $consulta = "SELECT eedu.cod,eedu.logo,eedu.razonsocial,eedu.snies,eedu.nit,eedu.descripcion,eedu.direccionurl,ubi.nombreubicacion,ubi.direccionubicacion FROM `entidadeducativa` eedu 
        INNER JOIN `usuariouniversidad` uuni ON eedu.`cod`=uuni.`codentidad` 
        INNER JOIN `usuarios` usu ON uuni.`codusuario`=usu.`cod`
        INNER JOIN `detalleubicacion` dubi ON eedu.`cod`=dubi.`entidadeducativa_cod`
        INNER JOIN `ubicacion` ubi ON dubi.`ubicacion_cod`=ubi.`cod`
      
        
        WHERE eedu.cod=$cod";
        $query=$this->db->query($consulta);
        return $query->result();

}




    public function detallespregradosentidad($codusuario){//FUNCION PARA OBTENER POR CONSULTA LOS DETALLES DEL PREGRADO DE UNA UNIVERSIDAD
                //ALIAS------NOMBRE TABLA EN BASE DE DATOS
                //dcar=>"detallecarreras"
                //eedu=>"entidadeducativa" 
                //usu=>"usuarios" 
                //uuni=>"usuariouniversidad"
                //dcar=>"detallecarreras"
                //car=>"carreras"
                $consulta = "SELECT dcar.cod,dcar.snies,dcar.acreditacion,dcar.duracion,dcar.creditos,dcar.perfilocupacional,dcar.valormatricula,dcar.planestudio,dcar.modalidad_cod,dcar.formacion_cod,car.nombre FROM `usuarios` usu 
                INNER JOIN `usuariouniversidad` uuni ON usu.`cod`=uuni.`codusuario` 
                INNER JOIN `entidadeducativa` eedu ON uuni.`codentidad`=eedu.`cod` 
                INNER JOIN `detallecarreras` dcar ON eedu.`cod`=dcar.`entidadeducativa_cod`
                INNER JOIN `carreras` car ON dcar.`carreras_cod`=car.`cod` 
                WHERE usu.cod=$codusuario ";
                $query=$this->db->query($consulta);
                return $query->result();
        
            }
            public function detallespregrados($cod){//FUNCION PARA OBTENER POR CONSULTA LOS DETALLES DEL PREGRADO DE UNA UNIVERSIDAD
                //ALIAS------NOMBRE TABLA EN BASE DE DATOS
                //dcar=>"detallecarreras"
                //eedu=>"entidadeducativa" 
                //usu=>"usuarios" 
                //uuni=>"usuariouniversidad"
                //dcar=>"detallecarreras"
                //car=>"carreras"
                $consulta = "SELECT dcar.cod,dcar.snies,dcar.acreditacion,dcar.duracion,dcar.creditos,dcar.perfilocupacional,dcar.valormatricula,dcar.planestudio,dcar.modalidad_cod,dcar.formacion_cod,car.nombre FROM `usuarios` usu 
                INNER JOIN `usuariouniversidad` uuni ON usu.`cod`=uuni.`codusuario` 
                INNER JOIN `entidadeducativa` eedu ON uuni.`codentidad`=eedu.`cod` 
                INNER JOIN `detallecarreras` dcar ON eedu.`cod`=dcar.`entidadeducativa_cod`
                INNER JOIN `carreras` car ON dcar.`carreras_cod`=car.`cod` 
                WHERE dcar.cod=$cod ";
                $query=$this->db->query($consulta);
                return $query->result();
        
            }


            

            public function update()
            {
                $data['cod']=$this->input->post('cod');
                $data['logo']=$this->input->post('logo');
                $data['razonsocial']=$this->input->post('razonsocial');
                $data['nit']=$this->input->post('nit');
                $data['snies']=$this->input->post('snies');
                $data['descripcion']=$this->input->post('descripcion');
                $data['direccionurl']=$this->input->post('direccionurl');
               

                $this->db->where('cod',$data['cod']);
                
                echo $this->db->update($this->tabla,$data);
              
             
             
                return $this->db->affected_rows();// retornar el numero de registros afectados
            }
            public function updateUsuario()
            {
                $data['cod']=$this->input->post('cod');
                $data['nombres']=$this->input->post('nombres');
                $data['apellidos']=$this->input->post('apellidos');
                $data['genero']=$this->input->post('genero');
                $data['email']=$this->input->post('email');
                $data['password']=$this->input->post('password');
               

                $this->db->where('cod',$data['cod']);
                
                echo $this->db->update($this->tablausuarios,$data);
              
             
             
                return $this->db->affected_rows();// retornar el numero de registros afectados
            }
            public function updatePregrado()
            {
                $data['cod']=$this->input->post('cod');
                $data['snies']=$this->input->post('snies');
                $data['acreditacion']=$this->input->post('acreditacion');
                $data['duracion']=$this->input->post('duracion');
                $data['creditos']=$this->input->post('creditos');
                $data['perfilocupacional']=$this->input->post('perfilocupacional');
                $data['valormatricula']=$this->input->post('valormatricula');
                $data['planestudio']=$this->input->post('planestudio');
                $data['entidadeducativa_cod']=$this->input->post('dropEntidad');
                $data['carreras_cod']=$this->input->post('dropCategoria');
                $data['modalidad_cod']=$this->input->post('dropModalidad');
                $data['formacion_cod']=$this->input->post('dropFormacion');


               

                $this->db->where('cod',$data['cod']);
                
                echo $this->db->update($this->table,$data);
              
             
             
                return $this->db->affected_rows();// retornar el numero de registros afectados
            }
         
         


           



}//end class



?>