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
      'vista' => 'localidad/nuevo',
      'estados' => Estado::all_array(),
      'localidad' => new Localidad()
    );
    $this->load->view('layout',$data);
  }

  public function create()
  {
    $datos = $this->input->post('localidad');
    $localidad = Localidad::create($datos);
    redirect('localidades/index');
  }

  public function editar($id)
  {
    $data = array(
      'vista' => 'localidad/editar',
      'estados' => Estado::all_array(),
      'localidad' => Localidad::find($id)
    );
    $this->load->view('layout',$data);
  }

  public function actualizar()
  {
    $datos = $this->input->post('localidad');
    $localidad = Localidad::actualizar($datos);
    redirect('localidades/index');
  }

  
}