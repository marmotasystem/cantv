<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Dispositivo{
  private $atributos;
  public function static create($params)
  {
   $this->db->insert('dispositivos', $params);
  }
}