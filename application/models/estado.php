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
    $sql = self::$queries['all']; 
    $results_objects = array();
    $results = self::run_query($sql);

    foreach ($results as $estado_array)
    {
      $object = new Estado();
      $object->load_by_array($estado_array);
      $results_objects[] = $object;
    }

    return $results_objects;
  }

  // Para buscar se requiere 1 id
  public static function find($id){
    $sql = self::$queries['find']; 
    $results = self::run_query($sql,array($id));
    if( count($results) == 0)
      return false;
    else
    {
      $object = new Estado();
      $object->load_by_array($results[0]);
      return $object;
    }
  }

  // Carga un objeto con la informacion de un array
  private function load_by_array($array){
    $this->nombre = $estado_array['nombre'];
    $this->id = $estado_array['id'];
  }

// Consulta en la base de datos, y retorna un array con el formato 'id' => 'nombre'
  public static function all_array()
  {
    $sql = self::$queries['all'];
    $array = self::run_query($sql);
    return self::compress_array($array,'id','nombre');
  }
 
  // 'convierte los queries de la bd a formato 'id' => 'nombre'
  private static function compress_array($array,$key,$value){
    $result = array();
    foreach ($array as $ar) {
      $result[$ar[$key]] = $ar[$value];
    }
    return $result;
  }
  
  // $params esta inicializado por defecto con un array vacio
  // Esto con el fin de que el metodo pueda ser llamado.
  // con un unico parametro
  private static function run_query($sql,$params = array()){
    $query = self::$db->query($sql,$params);
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


  private static $queries = array(
    'all' => 'SELECT id,nombre FROM estados',
    'find' => 'SELECT id,nombre FROM estados WHERE id = ?',
  );

}  
