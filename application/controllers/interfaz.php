<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Interfaz extends CI_Controller {

  public function __construct()
  {
    parent::__construct();
  }

  public function index()
  {
    $this->load->helper('form');
    $this->load->view('interfaz_formulario');
  }

  public function create()
  {
    
  }

  public function edit()
  {
    
  }

  public function update()
  {
    
  }
}