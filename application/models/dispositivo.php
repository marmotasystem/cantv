<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Dispositivo extends CI_Model
{
  private $atributos;
  private static $db;

  public function __construct()
  {
    parent::__construct();
    self::$db = &get_instance()->db;
    $this->atributos = array();
  }

  /***********
  ** METODOS DE CLASES
  */

  public static function create($params)
  {
    self::$db->insert('dispositivos', $params);
  }

  public static function actualizar($params)
  {
    self::$db->where('id', $params['id']);
    self::$db->update('dispositivos', $params);
  }   

  public static function all()
  {
    $sql = self::$queries['all']; 
    $results_objects = array();
    $results = self::run_query($sql);

    foreach ($results as $dispositivo_array)
    {
      $object = new Dispositivo();
      $object->load_by_array($dispositivo_array);
      $results_objects[] = $object;
    }
    return $results_objects;
  }

 // METODOS MAGICOS

  public function __set($name, $value)
  {
    $this->atributos[$name] = $value;
  }

  public function __get($name)
  {
    if (array_key_exists($name,$this->atributos))
      return $this->atributos[$name];
    else
      return null;
  }

  public function __toString()
  {
    return $this->atributos['nombre'];
  }

  private function load_by_array($array){
    $this->id = $array['id'];
    $this->nombre = $array['nombre'];
    $this->ip_address = $array['ip_address'];
    $this->modelo = $array['modelo'];
    $this->proveedor = $array['proveedor'];
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

  private static $queries = array(
    'all' => 'SELECT id,nombre,ip_address,modelo,proveedor FROM dispositivos',
    'find' => 'SELECT id,nombre,ip_address,modelo,proveedor FROM dispositivos WHERE id = ?',
  );

  public static function find($id)
  {
    $sql = self::$queries['find']; 
    $results = self::run_query($sql,array($id));
    if( count($results) == 0)
      return false;
    else
    {
      $object = new Dispositivo();
      $object->load_by_array($results[0]);
      return $object;
    }
  }

}