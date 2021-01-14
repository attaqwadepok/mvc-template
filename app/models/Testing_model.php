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

  public function tambahDataModel($data)
  {
    $query = "INSERT INTO testing_table
              VALUES
              ('', :nama, :usia, :jk, :gambar)";

    $this->db->query($query);
    $this->db->bind('nama', $data['nama']);
    $this->db->bind('usia', $data['usia']);
    $this->db->bind('jk', $data['jk']);
    $this->db->bind('gambar', $data['gambar']);

    $this->db->execute();
    return $this->db->rowCount();
  }
}
