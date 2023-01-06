<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Proveedores_model extends CI_Model{
    public function __construct()
    {
        $this->load->database();
    }
   
    public function listar($filtros = FALSE){
        
        if($filtros === FALSE){

            $query = $this->db->get('proveedores');
            return $query->result_array();
        }

        $query=$this->db->get_where('proveedores', $filtros);
        return $query->row_array();

    }

    public function set_proveedores(){
        
        $data = array(
            'nombre' => $this->input->post('nombre'),
            'telefono' => $this->input->post('telefono'),
            'direccion' => $this->input->post('direccion'),
            'correo' => $this->input->post('correo'),
        );

        return $this->db->insert('proveedores', $data);
    }
    
    public function get_one($id)
    {
        $query = $this->db->get_where('proveedores', array('idProveedor' => $id));
        return $query->row();
    }

    public function update_proveedores(){

        $data = array(
            'idProveedor' => $this->input->post('id'), 
            'nombre' => $this->input->post('nombre'), 
            'telefono' => $this->input->post('telefono'),
            'direccion' => $this->input->post('direccion'),
            'correo' => $this->input->post('correo')
        );

        $id = $data['idProveedor'];

        $this->db->where('idProveedor', $id);
        $this->db->update('proveedores', $data);
    }

    public function delete($id)
    {
        return $this->db->delete('proveedores', array('idProveedor' => $id));
    }


}

