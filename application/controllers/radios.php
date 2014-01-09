<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Radios extends CI_Controller
{

  public function __construct()
  {
    parent::__construct();
  }

  public function index(){
    $data = array(
      'radios' => Radio::all(),
      'vista' => 'radio/index'
    );
    $this->load->view('layout',$data);
  }

  public function nuevo()
  {
    $data = array(
      'vista' => 'radio/nuevo',
      'localidades' => Localidad::all_array(),
      'radio' => new Radio()
    );
    $this->load->view('layout',$data);
  }

  public function create()
  {
    $datos = $this->input->post('radio');
    $radio = Radio::create($datos);
    redirect('radios/index');
  }

  public function editar($id)
  {
    $data = array(
      'vista' => 'radio/editar',
      'localidades' => Localidad::all_array(),
      'radio' => Radio::find($id)
    );
    $this->load->view('layout',$data);
  }

  public function actualizar()
  {
    $datos = $this->input->post('radio');
    $radio = Radio::actualizar($datos);
    redirect('radios/index');
  }

  
}