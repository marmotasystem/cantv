<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Localidades extends CI_Controller
{

  public function __construct()
  {
    parent::__construct();
  }

  public function index()
  {
    $this->load->helper('form');
    $this->load->view('localidad_formulario');
  }

  public function create()
  {
    $this->load->model('Localidad');
    $datos = $this->input->post('localidad');
    $localidad = Localidad::create($datos);
  }

public function estados()
  {
    $this->load->model('Estado');
    print_r(Estado::all());
    var_dump(Estado::all());

      }



  public function edit()
  {
    
  }

  public function update()
  {
    
  }

}