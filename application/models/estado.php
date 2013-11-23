<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Estado extends CI_Model
{
  private $atributos;
  private static $db;
    
  public function __construct()
  {
    parent::__construct();
    self::$db = &get_instance()->db;
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
      $object = new Estados();
      $object->set_nombre($estado_array['nombre']);
      $object->set_id($estado_array['id']);
      $results_objects[] = $object;
    }
    return $results_objects;
  }


  private static $querys = array(
    'all' => 'SELECT id,nombre FROM Estados'
  );

}  
