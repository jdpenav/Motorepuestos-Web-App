<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_model extends CI_Model{
    public function __construct()
    {
        $this->load->database();
    }
   
    public function login($usuario, $contraseña){

        $this->db->where('usuario', $usuario);
        $this->db->where('contraseña', $contraseña);
        $data = $this->db->get('empleados');

        if($data->num_rows()>0){
            
            return true;
        } else {
            return false;
        }
    }

}

