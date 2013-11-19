class Interfaz
  private $atributos;

  public function static create($params)

  {
   $this->db->insert('interfaz', $params);
  }

  
end