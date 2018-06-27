<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
class Verificar_model extends CI_Model
{
    public function construct()
    {
        parent::__construct();
        $this->load->database();//con esto hacemos que pueda cargar nuestra base de datos con el modelo
    }
    function verificar($nom, $pass)
    {
        $this->db->where('username', $nom);
        $this->db->where('password', $pass);
        $query = $this->db->get('usuarios');
        if ($query->num_rows() == 1) {
            return $query->result();
        } else {
            redirect('http://localhost/prueba/index.php/verificar');
        }
    }
}
