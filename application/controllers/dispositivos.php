<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Dispositivos extends CI_Controller
{

  public function __construct()
  {
    parent::__construct();
  }

  public function index()
  {
    $data = array(
      'dispositivo' => Dispositivo::all(),
      'vista' => 'dispositivo/index'
    );
    $this->load->view('layout',$data);
  }

  public function nuevo()
  {
    $data = array(
      'vista' => 'dispositivo/nuevo',
     // 'estados' => Estado::all_array(),
      'dispositivo' => new Dispositivo()
    );
    $this->load->view('layout',$data);
  }

  public function create()
  {
    $datos = $this->input->post('dispositivos');
    $dispositivo = Dispositivo::create($datos);
    redirect('dispositivos/index');
  }

  public function editar($id)
  {
    
  }

  public function actualizar()
  {
    
  }

  
}