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
      $object->load_by_array($dispositvo_array);
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
    return $this->atributos[$name];
  }


  private static function run_query($sql,$params = array())

  {
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
  );
}