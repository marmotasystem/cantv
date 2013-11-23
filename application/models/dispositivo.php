<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Dispositivo{
  private $atributos;
  public static function create($params)
  {
   $this->db->insert('dispositivos', $params);
  }
}