<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuario extends CI_Controller {

    public function inicio()
    {
        $this->load->view('templates/header');
    }


    /*/  LOGIN, LOGOUT E AUTENTICAÇÃO  /*/

    public function login($tentativa)
    {
        $this->load->view('templates/header');
        $this->load->view('login', $tentativa);
    }

    public function logout()
    {
        unset($_SESSION['user_data']);
        $this->load->view('templates/header');
        $this->load->view('login');
    }

    function autenticar(){
        $this->load->model('usuario_model', 'user');
        $email = $this->input->post('email');
        $senha = md5($this->input->post('senha'));

        $resultado = $this->user->autenticar($email,$senha);

        if(empty($resultado[0])){
            redirect("login/1");
        }
        else{
            $resultado = $resultado[0];
            if($resultado){
                $_SESSION['user_data']['id']=$resultado['id'];
                $_SESSION['user_data']['perfil'] = $this->user->buscarUsuarioEspecifico($resultado['id']);

                if($resultado['admin'] == 1){
                    $_SESSION['user_data']['permissoes']['titulo']="admin";
                    $permissoes = $this->user->buscarPermissaoAdmin($resultado['id']);
                    $_SESSION['user_data']['permissoes']['permissoes'] = $permissoes[0];
                }

                redirect("perfil/".$resultado['id']);
            }

        }
    }


    /*/  CARREGAMENTO DE PÁGINAS  /*/

    public function loadTemplates($var){
        if($var == 1){
            $this->load->view('templates/header');
        }
        elseif($var == 2){
            $this->load->view('templates/header');
            $this->load->view('templates/nav');
        }
    }

    function page($page, $id=0){

        unset($_SESSION['page_data']);
        if($page == 'perfil'){
            $_SESSION['page_data'] = 'perfil';
        }
        elseif ($page == 'biblioteca'){
            $_SESSION['page_data'] = 'biblioteca';
        }
        $this->loadTemplates(2);
        $this->load->view ('templates/page');

        $this->load->view('templates/footer');
    }
}