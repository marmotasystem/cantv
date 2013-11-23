<?php
class Interfaz{
  private $atributos;

  public static function create($params)

  {
   $this->db->insert('interfaz', $params);
  }  
}
