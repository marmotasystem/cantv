<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Localidad extends CI_Models
{
  private $atributos;

  public function static create($params)

  {
   $this->db->insert('Localidad', $params);
  }

}  
