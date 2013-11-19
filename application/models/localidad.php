class Localidad
  private $atributos;

  public function static create($params)

  {
   $this->db->insert('localidad', $params);
  }

  
end