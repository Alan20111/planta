<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
	}
	public function index()
	{
		$this->load->view('inicio');
	}
	function Inicio()
	{
		$this->load->view('inicio');
	}
	function Admin()
	{
		$this->load->view('admin');
	}
}
