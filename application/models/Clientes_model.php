<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Clientes_model extends CI_Model{
    public function __construct()
    {
        $this->load->database();
    }
   
    public function listar($filtros = FALSE){
        
        if($filtros === FALSE){

            $query = $this->db->get('clientes');
            return $query->result_array();
        }

        $query=$this->db->get_where('clientes', $filtros);
        return $query->row_array();

    }

    public function set_clientes()
    {

        $data = array(
            'nombre' => $this->input->post('nombre'),
            'apellido' => $this->input->post('apellido'),
            'sexo' => $this->input->post('sexo'),
            'fecha' => $this->input->post('fecha'),
            'identidad' => $this->input->post('identidad'),
            'direccion' => $this->input->post('direccion'),
            'telefono' => $this->input->post('telefono'),
            'correo' => $this->input->post('correo'),
        );
        return $this->db->insert('clientes', $data);
    }

    public function get_one($id)
    {
        $query = $this->db->get_where('clientes', array('idCliente' => $id));
        return $query->row();
    }

    public function update_clientes(){
        $data = array(
            'idCliente' => $this->input->post('id'),
            'nombre' => $this->input->post('nombre'),
            'apellido' => $this->input->post('apellido'),
            'sexo' => $this->input->post('sexo'),
            'fecha' => $this->input->post('fecha'),
            'identidad' => $this->input->post('identidad'),
            'direccion' => $this->input->post('direccion'),
            'telefono' => $this->input->post('telefono'),
            'correo' => $this->input->post('correo'),
        );

        $id = $data['idCliente'];

        $this->db->where('idCliente', $id);
        $this->db->update('clientes', $data);
    }

    public function delete($id)
    {
        return $this->db->delete('clientes', array('idCliente' => $id));
        
    }



}

