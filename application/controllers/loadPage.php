<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class loadPage extends CI_Controller {

    public function __construct(){
        parent::__construct();
        $this->load->model("Patrimonio_model");
        $this->load->model('servico_model');

    }

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
        elseif ($page == 'patrimonio'){
            $_SESSION['patrimonio_data']['select'] = $this->Patrimonio_model->listaPatrimonio();
            $_SESSION['patrimonio_data']["serv_patrimonio"]= $this->Patrimonio_model->listaItem();
            $_SESSION['page_data'] = 'patrimonio/lista_item';
        }
        elseif ($page == 'patrimonios'){
            $_SESSION['patrimonio_data']['select'] = $this->Patrimonio_model->listaPatrimonio();
            $_SESSION['patrimonio_data']["serv_patrimonio"]= $this->Patrimonio_model->listaItem();
            $_SESSION['page_data'] = 'patrimonio/lista_patrimonio';
        }
        elseif ($page == 'servicos'){
            $_SESSION['chamados'] = $this->servico_model->busca_chamado();
            $_SESSION['page_data'] = 'servicos/suporte/index';
        }
        $this->loadTemplates(2);
        $this->load->view ('templates/page');
    }

}