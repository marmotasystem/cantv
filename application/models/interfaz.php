<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Interfaz extends CI_Model
{
  private $atributos;
  private static $db;

  public function __construct()
  {
    parent::__construct();
    self::$db = &get_instance()->db;
  }

  public function dispositivo()
  {
    return Dispositivo::find($this->dispositivos_id);
  }

  /***********
  ** METODOS DE CLASES
  */

  public static function create($params)
  {
    self::$db->insert('interfaces', $params);
  }

  public static function actualizar($params)
  {
    self::$db->where('id', $params['id']);
    self::$db->update('interfaces', $params);
      
  }

  public static function all()
  {
    $sql = self::$queries['all']; 
    $results_objects = array();
    $results = self::run_query($sql);

    foreach ($results as $interfaz_array)
    {
      $object = new Interfaz();
      $object->load_by_array($interfaz_array);
      $results_objects[] = $object;
    }
    return $results_objects;
  }

  public static function all_array()
  {
    $sql = self::$queries['all'];
    $array = self::run_query($sql);
    return self::compress_array($array,'id','nombre');
  }

  // METODOS MAGICOS

  public function __set($name, $value)
  {
    $this->atributos[$name] = $value;    
  }
  public function __get($name)
  {
    return $this->atributos[$name];    
  }

  private function load_by_array($array){
    $this->id = $array['id'];
    $this->dispositivos_id = $array['dispositivos_id'];
    $this->ip = $array['ip'];
    $this->tipo = $array['tipo'];
    $this->numero = $array['numero'];
    $this->nombre= $array['nombre'];
    $this->trafico = $array['trafico'];
    $this->descripcion = $array['descripcion'];
    $this->speed = $array['speed'];
    $this->bw = $array['bw'];

  } 
  private static function compress_array($array,$key,$value){
    $result = array();
    foreach ($array as $ar) {
      $result[$ar[$key]] = $ar[$value];
    }
    return $result;
  }
  
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
    'all' => 'SELECT id,dispositivos_id,radio_id,ip,tipo,numero,nombre,trafico,descripcion,speed,bw FROM interfaces',
    'find' => 'SELECT id,dispositivos_id,radio_id,ip,tipo,numero,nombre,trafico,descripcion,speed,bw FROM interfaces WHERE id = ?'
  );

  public static function find($id){
    $sql = self::$queries['find']; 
    $results = self::run_query($sql,array($id));
    if( count($results) == 0)
      return false;
    else
    {
      $object = new Interfaz();
      $object->load_by_array($results[0]);
      return $object;
    }
  }


}  
