<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Categorias_model extends CI_Model{
    public function __construct()
    {
        $this->load->database();
    }
   
    public function listar($filtros = FALSE){
        
        if($filtros === FALSE){

            $query = $this->db->get('categorias');
            return $query->result_array();
        }

        $query=$this->db->get_where('categorias', $filtros);
        return $query->row_array();

    }

    public function set_categorias(){
        
        $data = array(
            'nombre' => $this->input->post('nombre'),
            'descripcion' => $this->input->post('descripcion')
        );

        return $this->db->insert('categorias', $data);
    }

    public function get_one($id)
    {
        $query = $this->db->get_where('categorias', array('idCategoria' => $id));
        return $query->row();
    }


    public function update_categorias(){

        $data = array(
            'idCategoria' => $this->input->post('id'), 
            'nombre' => $this->input->post('nombre'), 
            'descripcion' => $this->input->post('descripcion')
        );

        $id = $data['idCategoria'];

        $this->db->where('idCategoria', $id);
        $this->db->update('categorias', $data);

    }

    public function delete($id)
    {
        return $this->db->delete('categorias', array('idCategoria' => $id));
        
    }

    /*
    public function delete_categorias(){

        $data = array(
            'idCategoria' => $this->input->post('id'), 
        );
        
        $id = $data['idCategoria'];

        $this->db->where('idCategoria', $id);
        $this->db->delete('categorias');
    }
    */

}