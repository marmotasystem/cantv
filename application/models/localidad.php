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

}  
