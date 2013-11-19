<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Localidades extends CI_Controller {

  public function __construct()
  {
    parent::__construct();
  }

  public function index()
  {
    $this->load->helper('form');
    $this->load->view('localidad_formulario');
  }

  public function create()
  {
    $datos = $this->input->post('localidad');
    $localidad = Localidad::create($datos);

  }

  public function edit()
  {
    
  }

  public function update()
  {
    
  }

}