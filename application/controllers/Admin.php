<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('admin_model');
		$this->load->model('inicio_model');
		$this->load->helper('url');
	}

	public function index()
	{
		$this->load->view('login'); // Load the login view
	}

	public function Inicio()
	{
		$this->load->view('inicio'); // Load the inicio view
	}

	public function Admin()
	{
		$this->load->view('admin'); // Load the admin view
	}

	public function login()
	{
		$usuario = $this->input->post('usuario');
		$contrasena = $this->input->post('contrasena');

		$checkUser = $this->admin_model->leerUser($usuario, $contrasena);

		if ($checkUser) {
			$data = array(
				'usuario' => $checkUser->usuario,
				'status' => 'true'
			);
		} else {
			$data = array('Status' => 'False');
		}
		echo json_encode($data, JSON_NUMERIC_CHECK);
	}
	public function readData()
	{
		$pedidos = $this->inicio_model->readCardsPedidos();
		$exportador = $this->inicio_model->readCardsExportador();
		$peticiones = $this->inicio_model->readCardsPeticiones();
		$productos = $this->inicio_model->readCardsProductos();
		$formData = array();
		if ($pedidos && $exportador && $peticiones && $productos) {
			$formData["status"] = 'success';
			$formData["pedidos"] = $pedidos;
			$formData["exportador"] = $exportador;
			$formData["peticiones"] = $peticiones;
			$formData["productos"] = $productos;
		} else {
			$formData["status"] = 'error';
		}
		echo json_encode($formData, JSON_NUMERIC_CHECK);
	}
}
