<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class loadPage extends CI_Controller {


    public function loadTemplates($var){
        if($var == 1){
            $this->load->view('templates/header');
        }
        elseif($var == 2){
            $this->load->view('templates/header');
            $this->load->view('templates/nav');
        }
    }

    function page($page, $id = 0){

        unset($_SESSION['page_data']);
        if($page == 'perfil'){
            $_SESSION['page_data'] = 'perfil/perfil';
        }
        elseif ($page == 'biblioteca'){
            $_SESSION['page_data'] = 'biblioteca/biblioteca';
        }
        elseif ($page == 'armarios'){
            $_SESSION['page_data'] = 'armarios/index';
        }
        $this->loadTemplates(2);
        $this->load->view ('templates/page');
    }

}