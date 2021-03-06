<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Interfaces extends CI_Controller
{

  public function __construct()
  {
    parent::__construct();
  }

  public function index(){
    $data = array(
      'interfaces' => Interfaz::all(),
      'vista' => 'Interfaz/index'
    );
    $this->load->view('layout',$data);
  }

  public function nuevo()
  {
    $data = array(
      'vista' => 'interfaz/nuevo',
      'dispositivos' => Dispositivo::all_array(),
      'interfaces' => new Interfaz()
    );
    $this->load->view('layout',$data);
  }

  public function create()
  {
    $datos = $this->input->post('interfaces');
    $interfaces = Interfaz::create($datos);
    redirect('interfaces/index');
  }

  public function editar($id)
  {
    $data = array(
      'vista' => 'interfaz/editar',
      'dispositivos' => Dispositivo::all_array(),
      'interfaces' => Interfaz::find($id)
    );
    $this->load->view('layout',$data);
  }

  public function actualizar()
  {
    $datos = $this->input->post('interfaces');
    $interfaz = Interfaz::actualizar($datos);
    redirect('interfaces/index');
  }
  
}