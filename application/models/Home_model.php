<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home_model extends CI_Model {
    var $table='usuarios';

    public function __construct()
    {
        parent::__construct();
        $this->load->database();// cargando la conexion a DB
    }

    public function login($email, $password)

    {
       /*  var_dump($email,$password); */
        $con="email='".$email."' AND password='".$password."'";
        $this->db->where($con, NULL, FALSE);  
        $query=$this->db->get($this->table);
        if($query->num_rows() == 1)
        {
                $row=$query->row();
                $data=array('user_data'=>array(
                    'cod'=>$row->cod,
                    'nombres'=>$row->nombres,
                    'apellidos'=>$row->apellidos,
                    'genero'=>$row->genero,
                    'email'=>$row->email,
                    'password'=>$row->password,
                    'tipousuarios'=>$row->tipousuarios_codtipo)

                );
                $this->session->set_userdata($data);
                //$this->session->userdata('user_data')['id'];
                return true;
        }
        $this->session->unset_userdata('user_data');
        return false;
    }
    public function agregrarusuario()
    {
        $data['nombres']=$this->input->post('nombres');
        $data['apellidos']=$this->input->post('apellidos');
        $data['genero']=$this->input->post('genero');
        $data['email']=$this->input->post('email');
        $data['password']=$this->input->post('password');
        $data['tipousuarios_codtipo']=3;
        
    
        return $this->db->insert($this->table, $data);
    }







    


    
    

    


}//end class

?>