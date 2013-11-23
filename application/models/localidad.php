<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Localidad extends CI_Model
{
  private $atributos;
  private static $db;

  public function __construct()
  {
    parent::__construct();
    self::$db = &get_instance()->db;
  }

  public static function create($params)
  {
    self::$db->insert('localidades', $params);
  }

  public static function all()
  {
    $sql = self::$queries['all']; 
    $results_objects = array();
    $results = self::run_query($sql);

    foreach ($results as $localidad_array)
    {
      $object = new Localidad();
      $object->load_by_array($localidad_array);
      $results_objects[] = $object;
    }
    return $results_objects;
  }

  public function estado(){
    Estado::find($this->estado_id);
  }

  private function load_by_array($array){
    $this->nombre = $estado_array['nombre'];
    $this->id = $estado_array['id'];
    $this->estado_id = $estado_array['estado_id'];
  }
  public static function all_array()
  {
    $sql = self::$queries['all'];
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
  public function __get($name)
  {
    return $this->atributos[$name];
  }


  private static $queries = array(
    'all' => 'SELECT id,nombre,estado_id FROM localidades'
  );

}  
