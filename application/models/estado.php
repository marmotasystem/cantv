<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Estado extends CI_Model
{
  private $atributos;
  private static $db;
    
  public function __construct()
  {
    parent::__construct();
    self::$db = &get_instance()->db;
    $this->atributos = array();
  }

  public static function all()
  {
    $sql = self::$querys['all']; 
    $query = self::$db->query($sql);
    $results = array();
    $results_objects = array();
    foreach ($query->result_array() as $row)
    {
      $results[] = $row;
    }
    foreach ($results as $estado_array)
    {
      $object = new Estado();
      $object->nombre=$estado_array['nombre'];
      $object->id=$estado_array['id'];
      $results_objects[] = $object;
    }
    return $results_objects;
  }
 
  public function __set($name, $value)
  {
    $this->atributos[$name] = $value;
  }


  private static $querys = array(
    'all' => 'SELECT id,nombre FROM estados'
  );

}  
