class Dispositivo
  private $atributos;

  public function static create($params)

  {
   $this->db->insert('dispositivos', $params);
  }

  
end