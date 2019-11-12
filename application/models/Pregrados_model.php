<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pregrados_model extends CI_Model {
    public function __construct()
    {
        parent::__construct();
        $this->load->database();// cargando la conexion a DB
    }

/* var $table='usuarios';
 

 public function getAll()
 {
     $query=$this->db->get("usuarios");
    //$query=$this->db->query("select * from usuarios");
     return $query->result();
 }
  public function eliminar($id)
  {
      $this->db->where('id',$id);// where id=$id
      $this->db->delete('usuarios');
      if($this->db->affected_rows()>0) return true;
      else
        return false;
  }


  public function getByid($id)
  {    
    $this->db->from($this->table);
    $this->db->where('id',$id);
    $query = $this->db->get();
    return $query->result();
       
  }
  


  public function add()
  {
      $data['nombres']=$this->input->post('nombres');
      $data['apellidos']=$this->input->post('apellidos');
      $data['direccion']=$this->input->post('direccion');
      $data['telefono']=$this->input->post('telefono');
      $data['email']=$this->input->post('email');
      $data['password']=$this->input->post('password');
      $data['created']=date('Y-m-d G:i:s');
      $data['modified']=date('Y-m-d G:i:s');
      return $this->db->insert($this->table, $data);
  }
  public function update()
  {
      $data['id'] = $this->input->post('id');
      $data['nombres']=$this->input->post('nombres');
      $data['apellidos']=$this->input->post('apellidos');
      $data['direccion']=$this->input->post('direccion');
      $data['telefono']=$this->input->post('telefono');
      $data['email']=$this->input->post('email');
      $data['password']=$this->input->post('password');
      $data['modified']=date('Y-m-d G:i:s');
      $this->db->where('id',$data['id']);//where id= $id
      var_dump ($data);
     echo $this->db->update($this->table, $data);
      return $this->db->affected_rows();// retornar el numero de registros afectados
  }

  
 */
var $table='detallecarreras';
var $table2='carreras';

public function agregarPregrados()
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
public function nuevasCarreras()
{
    $data['nombre']=$this->input->post('nombre');
    $data['titulo']=$this->input->post('titulo');
  
    

    return $this->db->insert($this->table2, $data);
}

public function cargarModalidad()
{
    $query=$this->db->query("SELECT * FROM modalidad");
    return $query->result();
}
public function cargarFormacion()
{
    $query=$this->db->query("SELECT * FROM formacion");
    return $query->result();
}
public function cargarCarrera()
    {
        $query=$this->db->query("SELECT * FROM carreras");
        return $query->result();
    }
    public function cargarEntidad()
    {
        $query=$this->db->query("SELECT * FROM entidadeducativa");
        return $query->result();
    }

    public function usuarioentidad($codusuario){
        $consulta = "SELECT eedu.razonsocial,eedu.cod FROM `usuarios` usu INNER JOIN `usuariouniversidad` uuni ON usu.`cod`=uuni.`codusuario` INNER JOIN `entidadeducativa` eedu ON uuni.`codentidad`=eedu.`cod`  WHERE usu.cod=$codusuario ";
        $query=$this->db->query($consulta);
        return $query->result();

    }





}//end class



?>