<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Resep extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->view('Daftar_Resep/list');
	}

  public function ayampalekko()
	{
		$this->load->view('Daftar_Resep/ayampalekko');
	}

  public function barongko()
	{
		$this->load->view('Daftar_Resep/barongko');
	}

  public function cotomakassar()
	{
		$this->load->view('Daftar_Resep/cotomakassar');
	}

  public function espisangijo()
	{
		$this->load->view('Daftar_Resep/espisangijo');
	}

  public function palbas()
	{
		$this->load->view('Daftar_Resep/pallubasa');
	}

  public function jalangkote()
	{
		$this->load->view('Daftar_Resep/jalangkote');
	}

  public function mietiti()
	{
		$this->load->view('Daftar_Resep/mietiti');
	}

  public function sopkonro()
	{
		$this->load->view('Daftar_Resep/sopkonro');
	}

  public function pallumara()
	{
		$this->load->view('Daftar_Resep/pallumara');
	}

  public function pisangepe()
	{
		$this->load->view('Daftar_Resep/pisangepe');
	}

  public function toppalada()
	{
		$this->load->view('Daftar_Resep/toppalada');
	}

}
