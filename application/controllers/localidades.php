<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Localidades extends CI_Controller
{

  public function __construct()
  {
    parent::__construct();
  }

  public function index(){
    $data = array(
      'localidades' => Localidad::all()
    );
    var_dump(Localidad::all());
//    $this->load->view('layout',$data);
  }

  public function nuevo()
  {
    $this->load->model('Estado');
    $this->load->helper('form');
    $data = array(
      'vista' => 'localidad/formulario',
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