<?php

class Testing_model
{
  private $table = 'testing_table';
  private $db;

  public function __construct()
  {
    $this->db = new Database;
  }

  public function testing()
  {
    $this->db->query('SELECT * FROM ' . $this->table);
    return $this->db->resultSet();
  }

  public function testing_detail($id)
  {
    $this->db->query('SELECT * FROM ' . $this->table . ' WHERE id=:id');
    $this->db->bind('id', $id);
    return $this->db->single();
  }
}
