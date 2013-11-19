<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Localidad extends CI_Model
{
  private $atributos;
  private static $db;

  public function static create($params)

  {
   $this->db->insert('Localidades', $params);
  }

}  
