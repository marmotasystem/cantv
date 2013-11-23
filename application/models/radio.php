<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Radio{
  private $atributos;

  public function static create($params)

  {
   $this->db->insert('radio', $params);
  }

}