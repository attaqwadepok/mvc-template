<?php

class Login extends Controller
{
  public function index()
  {
    echo $this->view('login/index');
  }
}
