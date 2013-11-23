<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Localidades extends CI_Controller
{

  public function __construct()
  {
    parent::__construct();
  }

  public function index(){
    
  }

  public function nuevo()
  {
    $this->load->model('Estado');
    $this->load->helper('form');
    $data = array(
      'vista' => 'localidad_formulario',
      'estados' => Estado::all_array()
    );
    $this->load->view('layout',$data);
  }

  public function create()
  {
    $this->load->model('Localidad');
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