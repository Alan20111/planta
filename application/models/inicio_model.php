<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Inicio_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();

        $this->load->database();
    }
    function readCardsPedidos()
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
    function readCardsExportador()
    {
        $query = $this->db->get("exportador");
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
    function readCardsPeticiones()
    {
        $query = $this->db->get("peticiones");
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
    function readCardsProductos()
    {
        $query = $this->db->get("productos");
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