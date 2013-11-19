class Radio
  private $atributos;

  public function static create($params)

  {
   $this->db->insert('radio', $params);
  }

  
end