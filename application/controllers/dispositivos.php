<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Dispositivos extends CI_Controller {

  public function __construct()
  {
    parent::__construct();
  }

  public function index()
  {
    $this->load->helper('form');
    $this->load->view('dispositivos_formulario');
  }

  public function create()
  {
    $datos = $this->input->post('Dispositivos');
    $dispositivos = Dispositivos::create($datos);

  }

  public function edit()
  {
    
  }

  public function update()
  {
    
  }
}