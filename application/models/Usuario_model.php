<?php
/**
 * Created by PhpStorm.
 * User: PisoniPC
 * Date: 16/05/2019
 * Time: 08:30
 */

class Usuario_model extends CI_Model {

    function autenticar($email, $senha){
        $this->db->select("p.id, e.email, u.senha,
                           count(adm.pessoa_id) as admin")
            ->from("pessoa p")
            ->join('usuario u','u.pessoa_id = p.id ', 'left')
            ->join('email e','e.pessoa_id = p.id', 'left')
            ->join('administrador adm','adm.pessoa_id = p.id', 'left')
            ->where("e.email", $email)
            ->where("u.senha", $senha);

        $query = $this->db->get();
        $usuario = $query->result();
        $usuario = json_decode(json_encode($usuario), True);
        return $usuario;
    }

    function buscarPermissaoAdmin($admin_id){
        $this->db->select("p.*")
            ->from("permissao_admin pa")
            ->join("permissao p","p.id=pa.permissao_id")
            ->where("pa.admin_id",$admin_id);
        $query=$this->db->get();
        $retorno = $query->result();
        $retorno = json_decode(json_encode($retorno), True);
        return $retorno;
    }



    /*/  FUNÇÕES DE BUSCA  /*/

    function buscarUsuarioEspecifico($id){
        $this->db->select("p.id as pessoa_id, p.nome, p.foto, e.email")
            ->from("pessoa p")
            ->join("usuario u", "p.id = u.pessoa_id")
            ->join("email e", "e.pessoa_id = p.id")
            ->where("u.id", $id);
        $query=$this->db->get();
        $retorno = $query->result();
        $retorno = json_decode(json_encode($retorno), True);
        $retorno = $retorno[0];

        /*/  é professor  /*/
        $professor = $this->usuarioProfessor($retorno['pessoa_id']);
        $retorno['professor'] = $professor;

        if($retorno['professor']==2){
            $this->db->select("c.curso_id")
                ->from("coordenador_curso c")
                ->join("professor pr", "pr.id = c.professor_id")
                ->where("pr.id", 1);
            $query=$this->db->get();
            $curso = $query->result();
            $curso = json_decode(json_encode($curso), True);
            $curso = $curso[0];
            $curso = $curso['curso_id'];

            $this->db->select("c.titulo")
                ->from("curso c")
                ->where("c.id", $curso);
            $query=$this->db->get();
            $curso = $query->result();
            $curso = json_decode(json_encode($curso), True);
            $curso = $curso[0];
            $curso = $curso['titulo'];

            $retorno['curso'] = $curso;
        }

        return $retorno;
    } // Retorna UM usuário específico



    /*/  FUNÇÕES DE CONFIRMAÇÃO  /*/

    function usuarioProfessor($pessoa_id){
    $this->db->select("pr.id")
        ->from("professor pr")
        ->join("pessoa p","pr.pessoa_id = p.id")
        ->where("p.id", $pessoa_id);
    $query=$this->db->get();
    $professor = $query->result();

    $this->db->select("cc.curso_id")
        ->from("coordenador_curso cc")
        ->join("professor pr","cc.professor_id = pr.id")
        ->join("pessoa p", "pr.pessoa_id = p.id")
        ->where("p.id", $pessoa_id);
    $query=$this->db->get();
    $coordenador = $query->result();

    if(count($professor)){
        if(count($coordenador)){
            return 2;
        }
        return 1;
    }
    else{
        return 0;
    }

} // busca se é professor
}