<style>
    .select{
        border-left: 5px solid #115e7f!important;
        background-color: #343a40 !important;
    }
    .select > a{
        color: white;
    }

    .select, .unselect{
        cursor: pointer;
        padding-left: 0px;
     }

    .unselect > a{
        color: #343a40;
    }
    .unselect:hover{
        border-left: 5px solid #343a40!important;
    }
    .unselect{
        border-left: 5px solid white!important;
    }


    .bgwhite{
        background-color: white;
    }

    .hr{
        border: #707070 0.5px solid;
        width: 45%;
        margin: 0px 0px 10px 20px;
    }
    .labelPerfil{
        margin: 10px 0px 0px 20px;
        color: #707070;
    }

    /*/  Footer bottom perfil  /*/
    #perfil{
        position: absolute;
        bottom: 0px;
        width: 25%;
        background-color: #115e7f !important;
    }
    #perfil > a{
        color: white;
    }

</style>
<?php
    $page = $_SESSION['page_data'];
    $usuario = $_SESSION['user_data'];

    $permissoes = $usuario['permissoes']['permissoes']['permissao'];
    if ($permissoes == 'total'){
        $permissoes = 1;
    }

    $perfil = $usuario['perfil'];
?>
<script>
    let page = "<?php echo $page?>";
</script>

<nav class="nav flex-column w-25 bg-white float-left"
    style="height: 88%; width: 25%; padding-top: 10px;">

    <?php    /*/  Aba para Administrador  /*/
    if ($permissoes == 1){
        call_user_func('labelTitulo', 'Admin');

        echo '<div id="topico" class="unselect container bgwhite pt-1 pl-3" style="height: 50px">
                <a class="nav-link" id="nav-topico">Usuários atuais</a>
              </div>';

        echo '<div id="topico2" class="unselect container bgwhite pt-1 pl-3" style="height: 50px">
                <a class="nav-link" id="nav-topico2">Cadastrar</a>
              </div>';
    }

    ?>

    <?php
    if ($perfil['professor'] >= 1){

        /*/  Aba para Professor  /*/
        if($perfil['professor'] == 2){
            call_user_func('labelTitulo', 'Coordenador');

            echo '<div id="armarios" class="unselect container bgwhite pt-1 pl-3" style="height: 50px">
                <a class="nav-link" href="'.base_url().'armarios" id="nav-armarios">Armários</a>
              </div>';
        }

        /*/  Aba para Professor  /*/
        call_user_func('labelTitulo', 'Professor');

        echo '<div id="biblioteca" class="unselect container bgwhite pt-1 pl-3" style="height: 50px">
                <a class="nav-link" href="'.base_url().'biblioteca" id="nav-biblioteca">Biblioteca</a>
              </div>';
    }

    ?>


    <!--  Footer bottom 'perfil'  -->
    <footer id="perfil" class="container bgwhite pt-1" style="height: 50px">
        <a class="nav-link" href="<?= base_url()?>perfil/1" id="nav-perfil">Perfil</a>
    </footer>

</nav>




<?php
/*/  Função construtora de elementos html  /*/

function labelTitulo($perfil){
    echo '<div class="labelPerfil">
                <span>'.$perfil.'</span>
              </div>';
    echo '<hr class="hr"/>';
}

?>




<script>

    switch (page) {
        case 'perfil':
            break;
        case 'biblioteca/biblioteca':
            document.getElementById("biblioteca").classList.toggle('select');
            document.getElementById("biblioteca").classList.toggle('unselect');
            break;
        case 'armarios':
            document.getElementById("armarios").classList.toggle('select');
            document.getElementById("armarios").classList.toggle('unselect');
            break;
    }

    $(".unselect").click(function () {
        $(this).toggleClass('select');
        $(this).toggleClass('unselect');
    });
</script>