<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Localidades extends CI_Controller
{

  public function __construct()
  {
    parent::__construct();
  }

  public function index(){
    $data = array(
      'localidades' => Localidad::all(),
      'vista' => 'localidad/index'
    );
    $this->load->view('layout',$data);
  }

  public function nuevo()
  {
    $data = array(
      'vista' => 'localidad/formulario',
      'estados' => Estado::all_array()
    );
    $this->load->view('layout',$data);
  }

  public function create()
  {
    $datos = $this->input->post('localidad');
    $localidad = Localidad::create($datos);
    redirect('localidad/index');
  }

  public function edit()
  {
    
  }

  public function update()
  {
    
  }

}