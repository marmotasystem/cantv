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
    $results_objects = array();
    $results = self::run_query($sql);

    foreach ($results as $estado_array)
    {
      $object = new Estado();
      $object->nombre=$estado_array['nombre'];
      $object->id=$estado_array['id'];
      $results_objects[] = $object;
    }

    return $results_objects;
  }
  public static function all_array()
  {
    $sql = self::$querys['all'];
    $array = self::run_query($sql);
    return self::compress_array($array,'id','nombre');
  }
 
  private static function compress_array($array,$key,$value){
    $result = array();
    foreach ($array as $ar) {
      $result[$ar[$key]] = $ar[$value];
    }
    return $result;
  }
  
  private static function run_query($sql){
    $query = self::$db->query($sql);
    $results = array();
    foreach ($query->result_array() as $row)
    {
      $results[] = $row;
    }
    return $results;
  }
  public function __set($name, $value)
  {
    $this->atributos[$name] = $value;
  }


  private static $querys = array(
    'all' => 'SELECT id,nombre FROM estados'
  );

}  
