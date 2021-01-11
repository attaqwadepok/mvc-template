<?php

class Testing extends Controller
{

  // public function index_oke()
  // {
  //   $data['title'] = 'Testing';
  //   $data['nama'] = 'Alvin';
  //   $data['nama_model'] = $this->model('Testing_model')->test_nama();

  //   $this->view('templates/bootstrap_blank_template/header', $data);
  //   $this->view('testing/index', $data);
  //   $this->view('templates/bootstrap_blank_template/footer');
  // }

  public function index()
  {
    $data['title'] = 'Index';
    $data['testing'] = $this->model('Testing_model')->testing();

    $this->view('templates/bootstrap_blank_template/header', $data);
    $this->view('testing/index', $data);
    $this->view('templates/bootstrap_blank_template/footer');
  }
}
