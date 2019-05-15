<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuario extends CI_Controller {

    public function inicio()
    {
        $this->load->view('templates/header');
    }

    public function login()
    {
        $this->load->view('templates/header');
        $this->load->view('login');
    }

    function autenticar(){
        redirect("usuario/home");
    }

    function home(){
        $this->load->view('templates/header');
        $this->load->view('templates/nav');
        $this->load->view('home');
    }
}