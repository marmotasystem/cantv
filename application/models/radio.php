<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Radio{
  private $atributos;

  public static function create($params)

  {
   $this->db->insert('radio', $params);
  }

}