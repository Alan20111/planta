<?php
defined('BASEPATH') or exit('No direct script access allowed');

class login extends CI_Model
{
    public function __construct()
    {
        parent::__construct();

        $this->load->database();
    }
    public function leerUser($usuario, $contrasena)
    {

        $this->db->where('user', $usuario);
        $this->db->where('contrasena', $contrasena);
        $query = $this->db->get('usuarios');

        if ($query->num_rows() > 0) {

            $allData = array();

            foreach ($query->result() as $row) {

                $allData[] = $row;

            }
            return $allData[0];
        } else {
            return array();
        }
    }
    public function getCards($datosTarjeta, $idTarjeta = null)
    {
        if ($idTarjeta) {
            // Si proporcionaste un ID específico, actualiza los datos en lugar de insertarlos
            $this->db->where('id', $idTarjeta);
            $this->db->update('card-nosotros', $datosTarjeta);
            return $idTarjeta; // Devuelve el ID de la tarjeta actualizada
        } else {
            // Si no proporcionaste un ID, inserta una nueva tarjeta
            $this->db->insert('card-nosotros', $datosTarjeta);
            return $this->db->insert_id(); // Devuelve el ID de la nueva tarjeta insertada
        }
    }
    public function getCardData($idTarjeta)
    {
        $this->db->where('id', $idTarjeta);
        $query = $this->db->get('card-nosotros');

        // Verificar si se encontró una tarjeta con el ID dado
        if ($query->num_rows() > 0) {
            return $query->row_array();
        }

        return null; // Devuelve null si no se encontró ninguna tarjeta con el ID dado
    }
    public function deleteCard($idTarjeta)
    {
        $this->db->where('id', $idTarjeta);
        $this->db->delete('card-nosotros');

        return $this->db->affected_rows() > 0; // Devuelve true si se eliminó una fila (éxito), de lo contrario, devuelve false.
    }

    function readCards()
    {
        $query = $this->db->get("card-nosotros");
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