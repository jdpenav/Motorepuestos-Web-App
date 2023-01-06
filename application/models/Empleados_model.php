<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Empleados_model extends CI_Model
{
    public function __construct()
    {
        $this->load->database();
    }

    public function listar($filtros = FALSE)
    {

        if ($filtros === FALSE) {

            $query = $this->db->get('empleados');
            return $query->result_array();
        }

        $query = $this->db->get_where('empleados', $filtros);
        return $query->row_array();
    }

    public function set_empleados()
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
            'usuario' => $this->input->post('usuario'),
            'contraseña' => password_hash($this->input->post('contraseña'), PASSWORD_DEFAULT)
        );
        return $this->db->insert('empleados', $data);
    }

    public function update_empleados($old_data)
    {

        $data = array(
            'idEmpleado' => $this->input->post('id'),
            'nombre' => $this->input->post('nombre'),
            'apellido' => $this->input->post('apellido'),
            'sexo' => $this->input->post('sexo'),
            'fecha' => $this->input->post('fecha'),
            'identidad' => $this->input->post('identidad'),
            'direccion' => $this->input->post('direccion'),
            'telefono' => $this->input->post('telefono'),
            'correo' => $this->input->post('correo'),
            'usuario' => $this->input->post('usuario'),
            //'contraseña' => $this->input->post('contraseña')
        );

        if($old_data->contraseña != $this->input->post('contraseña')){
            $data['contraseña'] = password_hash($this->input->post('contraseña'), PASSWORD_DEFAULT);
        } 
        

        $id = $data['idEmpleado'];

        $this->db->where('idEmpleado', $id);
        $this->db->update('empleados', $data);
    }

    public function get_one($id)
    {
        $query = $this->db->get_where('empleados', array('idEmpleado' => $id));
        return $query->row();
    }

    public function delete($id)
    {
        return $this->db->delete('empleados', array('idEmpleado' => $id));
        
    }

    
}
