<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Comparar_model extends CI_Model {

    public function __construct()
    {
        parent::__construct();
        $this->load->database();// cargando la conexion a DB
    }

    public function cargarCarrera()
    {
        $query=$this->db->query("SELECT * FROM carreras");
        return $query->result();
    }

    public function cargarUniversidadFiltro()
    {
        $codcarrera = $this->input->post('dropCategoria');
        $valorMin = $this->input->post('txtPresupuestoMin');
        $valorMax = $this->input->post('txtPresupuestoMax');
        $consulta = "SELECT dcar.`cod` 'codcarrera',edu.`cod` 'coduniversidad',edu.* FROM carreras car INNER JOIN `detallecarreras` dcar ON car.`cod`=dcar.`carreras_cod` INNER JOIN `entidadeducativa` edu ON dcar.`entidadeducativa_cod`=edu.`cod`  WHERE car.`cod`='".$codcarrera."' AND (dcar.`valormatricula`>='".$valorMin."' AND dcar.`valormatricula`<='".$valorMax."') ";
        $query=$this->db->query($consulta);
        return $query->result();
    }

    public function buscarDetalleCarreras($where){
        $consulta = "SELECT car.`nombre`,car.`titulo`,dcar.*,edu.`cod` 'coduniversidad',edu.`descripcion`,form.`tipoformacion`,mo.`tipomodalidad` FROM `detallecarreras` dcar INNER JOIN `entidadeducativa` edu ON dcar.`entidadeducativa_cod`=edu.`cod` INNER JOIN `modalidad` mo ON dcar.`modalidad_cod`=mo.`cod` INNER JOIN `formacion` form ON dcar.`formacion_cod`=form.`cod` INNER JOIN `carreras` car ON dcar.`carreras_cod`=car.`cod` WHERE ".$where." ";
        $query=$this->db->query($consulta);
        return $query->result();
    }
}//end class

?>