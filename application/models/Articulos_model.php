<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Articulos_model extends CI_Model{
    public function __construct()
    {
        $this->load->database();
    }
   
    public function listar($filtros = FALSE){
        
        if($filtros === FALSE){

            $query = $this->db->get('articulos');
            return $query->result_array();
        }

        $query=$this->db->get_where('articulos', $filtros);
        return $query->row_array();

    }

    public function set_articulos(){
        
        $data = array(
            'nombre' => $this->input->post('nombre'),
            'descripcion' => $this->input->post('descripcion'),
            'imagen' => $this->input->post('imagen'),
            'codProducto' => $this->input->post('codProducto'),
            'Precio' => $this->input->post('Precio'),
            'Costo' => $this->input->post('Costo'),
            'Existencias' => $this->input->post('Existencias'),
            'Categorias_idCategoria' => $this->input->post('Categorias_idCategoria')

        );

        return $this->db->insert('articulos', $data);
    }

    public function get_one($id)
    {
        $query = $this->db->get_where('articulos', array('idArticulo' => $id));
        return $query->row();
    }

    public function update_articulos(){

        $data = array(
            'idArticulo' => $this->input->post('id'), 
            'nombre' => $this->input->post('nombre'),
            'descripcion' => $this->input->post('descripcion'),
            'imagen' => $this->input->post('imagen'),
            'codProducto' => $this->input->post('codProducto'),
            'Precio' => $this->input->post('Precio'),
            'Costo' => $this->input->post('Costo'),
            'Existencias' => $this->input->post('Existencias'),
            'Categorias_idCategoria' => $this->input->post('Categorias_idCategoria')
        );

        $id = $data['idArticulo'];

        $this->db->where('idArticulo', $id);
        $this->db->update('articulos', $data);

    }

    public function delete($id)
    {
        return $this->db->delete('articulos', array('idArticulo' => $id));
    }


}

