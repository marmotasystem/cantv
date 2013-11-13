<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Radio extends CI_Controller {

  public function __construct()
  {
    parent::__construct();
  }

  public function index()
  {
    $this->load->helper('form');
    $this->load->view('radio_formulario');
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