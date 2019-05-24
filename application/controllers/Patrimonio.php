<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Patrimonio  extends MX_Controller {

    public function __construct(){
        parent::__construct();
        $this->load->model("Patrimonio_model");

    }
  



    public function index(){
        $this->data['content']="patrimonio/lista_item";
        $this->data['select'] = $this->Patrimonio_model->listaPatrimonio();
        $this->data["serv_patrimonio"]= $this->Patrimonio_model->listaItem();
        $this->view->show_view($this->data);
    }


//public function lista_item() {

   /* //$this->load->view("template",$dados);
   $this->data['content']="patrimonio/lista_item"; 

   $this->data["serv_patrimonio"]= $this->Patrimonio_model->listaItem();  
   $this->view->show_view($this->data);
*/


 //}

    public function lista_patrimonio() {

        //$this->load->view("template",$dados);
         $this->data['content']="patrimonio/lista_patrimonio";

         $this->data["serv_patrimonio"]= $this->Patrimonio_model->listaPatrimonio();
         $this->view->show_view($this->data);

    }

   public function cadastro_patrimonio() {

    //$this->load->view("template",$dados);
     $this->data['content']="patrimonio/cadastro_patrimonio"; 
     $this->view->show_view($this->data); 

   }

   public function excluir($id){
    $this->load->model("Patrimonio_model");
    $this->Patrimonio_model->excluir($id);
    redirect("coordenacao/patrimonio");



  }

  public function editar($id){
    $this->load->model("Patrimonio_model");
    $this->data["patrimonio"] = $this->Patrimonio_model->getPatrimonios($id)->row();
    $this->data['content']="patrimonio/cadastro_patrimonio";
    $this->view->show_view($this->data);
   // $this->load->view("template",$dados);
    print_r($id);




  }
  public function salvar(){
    $this->load->model("Patrimonio_model");
    $this->Patrimonio_model->salvar();
    redirect('coordenacao/patrimonio');



  }

  public function adicionar(){
  //echo "string";
  //exit;

    $this->load->model("Patrimonio_model");

    $adicionar = $this->Patrimonio_model->adicionar();
  //redirect('coordenacao/patrimonio');
    echo json_encode($adicionar);
  }

}