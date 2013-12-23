<?php

class Modelo_tarea4 extends CI_Model {
   
    function mostrar($usuario) {
        $where = "Usuario = '".$usuario."'";
        $query = $this->db
                ->select("*")
                ->from("Administrador")
                ->where($where)
                ->get();
        return $query->result();
    }
    function agregar($datos = array()) {
        $this->db->insert("Administrador", $datos);
    }
    function eliminar($id) {
        $this->db->delete('Administrador', array(
            'Id_Administrador' => $id
                ));
    }
    function mostrar_modificar($id) {
        $where = "Id_Administrador = '".$id."'";
        $query = $this->db
                ->select("*")
                ->from("Administrador")
                ->where($where)
                ->get();
        return $query->row();
    }
    function modificar2($id,$datos = array()) {
        $this->db->where("Id_Administrador", $id);
        $this->db->update("Administrador", $datos);
    }
}