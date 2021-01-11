<?php

class Testing extends Controller
{
  public function index()
  {
    echo $this->view('templates/sidebar_template/header');
    echo $this->view('templates/sidebar_template/sidebar_wrapper');
    echo $this->view('testing/index');
    echo $this->view('templates/sidebar_template/footer');
  }
}
