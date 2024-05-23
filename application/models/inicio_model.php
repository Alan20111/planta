<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Inicio_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();

        $this->load->database();
    }
    function readCards()
    {
        $query = $this->db->get("pedidos");
        if ($query->num_rows() > 0) {
            $datos = array();

            foreach ($query->result() as $fila) {
                $datos[] = $fila;
            }

            return $datos;
        } else {

            return array();
        }
    }
}
?>