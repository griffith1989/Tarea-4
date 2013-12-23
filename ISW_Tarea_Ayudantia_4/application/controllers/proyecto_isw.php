<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Proyecto_isw extends CI_Controller {
    
    function __construct() {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('modelo_tarea4');
    }
    function ver_inicio() {
        
        $this->load->view('welcome_message');
    }
    function ver_crear() {
        
        $this->load->view('crear');
    }
    function ver_ver() {
        
        $this->load->view('ver');
    }
    function ver_modificar() {
        
        $this->load->view('modificar');
    }
    function ver_eliminar() {
        
        $this->load->view('eliminar');
    }
    public function index() {
        
        $usuario = $this->input->post('usuario');
        $id = $this->input->post('id');
        $query = $this->modelo_tarea4->mostrar($usuario);
        $this->load->view('ver_resultado', compact("query"));
    }
    function crear() {
                $formulario = array(
                    'Usuario' => $this->input->post('usuario', true),
                    'Contrasenia' => $this->input->post('pass', true),
                    'Rut' => $this->input->post('rut', true),
                    'Nombre1' => $this->input->post('nombre1', true),
                    'Nombre2' => $this->input->post('nombre2', true),
                    'Apellido1' => $this->input->post('apellido1', true),
                    'Apellido2' => $this->input->post('apellido2', true),
                    'Telefono1' => $this->input->post('telefono1', true),
                    'Telefono2' => $this->input->post('telefono2', true),
                    'Correo' => $this->input->post('correo', true),
                    'Cargo' => $this->input->post('cargo', true),
                    'Sexo' => $this->input->post('sexo', true),
                    'Comuna' => $this->input->post('comuna', true),
                    'Direccion' => $this->input->post('direccion', true),
                    'Fecha_Nacimiento' => $this->input->post('fecha', true)
                );
                $this->modelo_tarea4->agregar($formulario);
                $this->load->view('crear');
            
    }
    function eliminar() {
        $id = $this->input->post('id',TRUE);
        $this->modelo_tarea4->eliminar($id);
        $this->load->view('eliminar');
    }
    function ver_modif() {
        $id = $this->input->post('id');
        $query = $this->modelo_tarea4->mostrar_modificar($id);
        $this->load->view('modificar_resultado', compact("query"));
    }
    function modificar() {
                $id = $this->input->post('id');
                $formulario2 = array(
                    'Usuario' => $this->input->post('usuario', true),
                    'Contrasenia' => $this->input->post('pass', true),
                    'Rut' => $this->input->post('rut', true),
                    'Nombre1' => $this->input->post('nombre1', true),
                    'Nombre2' => $this->input->post('nombre2', true),
                    'Apellido1' => $this->input->post('apellido1', true),
                    'Apellido2' => $this->input->post('apellido2', true),
                    'Telefono1' => $this->input->post('telefono1', true),
                    'Telefono2' => $this->input->post('telefono2', true),
                    'Correo' => $this->input->post('correo', true),
                    'Cargo' => $this->input->post('cargo', true),
                    'Sexo' => $this->input->post('sexo', true),
                    'Comuna' => $this->input->post('comuna', true),
                    'Direccion' => $this->input->post('direccion', true),
                    'Fecha_Nacimiento' => $this->input->post('fecha', true)
                );
                $this->modelo_tarea4->modificar2($id,$formulario2);
                $this->load->view('modificar');
    }
}