<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Localidad extends CI_Controller {

  public function __construct()
  {
    parent::__construct();
  }

  public function index()
  {
    $this->load->helper('form');
    $this->load->view('localidad_formulario');
  }
}