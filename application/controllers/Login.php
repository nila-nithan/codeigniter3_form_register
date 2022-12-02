<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Login extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    $this->load->model('Nithan_model');
  }
  public function index()
  {
    $this->load->view('nithan_msg');
  }
  function login_page()
  {
    $this->load->view('Login_form');
  }
  function register_page()
  {
    $this->load->view('register_form');
  }
  public function register_process()
  {
    $data['name'] = $this->input->POST('name');
    $data['email'] = $this->input->POST('email');
    $data['password'] = $this->input->POST('password');
    $status = $this->Nithan_model->register_user($data);
    if ($status == true) {
      echo "record created successfully";
    } else {
      echo "failed to register";
    }
  }
  public function login()
  {
    $data['email'] = $this->input->POST('email');
    $data['password'] = $this->input->POST('password');
    $res = $this->Nithan_model->authenticate($data);
    if ($res) {
      print_r('LoggedIn successfully');
      print_r('<br>');
      print_r($res);
    } else {
      print_r('Invalid credentials');
    }
  }
}
