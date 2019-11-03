<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Comparar_model extends CI_Model {

    public function __construct()
    {
        parent::__construct();
        //$this->load->database();// cargando la conexion a DB
    }

    public function cargarCarrera()
    {
        $query=$this->db->query("SELECT * FROM carreras");
        return $query->result();
    }

    public function cargarUniversidadFiltro()
    {
        $codcarrera = $this->input->post('dropCategoria');
        $presupuesto = $this->input->post('txtPresupuesto');
        $query=$this->db->query("");
        return $query->result();
    }

    public function buscarPrestamoXid($id){
        $query=$this->db->query("SELECT * FROM prestamos WHERE id='".$id."' ");
        return $query->result();
    }

    public function buscarDetallePrestamoXid($id){
        $sql = "SELECT li.* FROM detalles dt INNER JOIN libros li ON dt.libros_id=li.id WHERE prestamos_id='".$id."' ";
        $query=$this->db->query($sql);
        return $query->result();
    }

    public function buscarUsuarioPrestamoXid($id){
        $sql = "SELECT us.* FROM detalles dt INNER JOIN prestamos pr ON dt.prestamos_id=pr.id INNER JOIN usuarios us ON pr.usuarios_id=us.id WHERE pr.id='".$id."' GROUP BY us.id";
        $query=$this->db->query($sql);
        return $query->result();
    }

    public function getUsuariosPrestamos()
    {
        $query=$this->db->query("SELECT * FROM  usuarios u RIGHT JOIN prestamos ps ON ps.usuarios_id = u.id GROUP BY u.id");
        return $query->result();
    }
    
    public function buscarPrestamosUsuario($id){
        $query=$this->db->query("SELECT * FROM  prestamos WHERE usuarios_id='".$id."' ");
        return $query->result();
    }

}//end class

?>