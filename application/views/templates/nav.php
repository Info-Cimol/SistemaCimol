<style>
    .select{
        border-left: 5px solid #17a2b8!important;
        background-color: #343a40 !important;
    }
    .select > a{
        color: white;
    }

    .select, .unselect{
         cursor: pointer;
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

</style>
<?php
    $page = $_SESSION['page_data'];
    $permissoes = $_SESSION['user_data']['permissoes']['permissoes']['permissao'];


    if ($permissoes == 'total'){
        $permissoes = 1;
    }
?>
<script>
    let page = "<?php echo $page?>";
</script>

<nav class="nav flex-column w-25 h-75 bg-white float-left">
    <?php
        if ($permissoes == 1){
            echo '<div id="perfil" class="unselect container bgwhite border-top border-dark pt-1 pl-3" style="height: 50px">
                    <a class="nav-link" href="'.base_url().'perfil/1" id="nav-perfil">Perfil</a>
                  </div>';
        }
    ?>

    <?php
    if ($permissoes == 1){
        echo '<div id="biblioteca" class="unselect container bgwhite border-top border-dark pt-1 pl-3" style="height: 50px">
                <a class="nav-link" href="'.base_url().'biblioteca" id="nav-biblioteca">Biblioteca</a>
              </div>';
    }
    ?>

    <?php
    if ($permissoes == 1){
        echo '<div id="armarios" class="unselect container bgwhite border-top border-dark pt-1 pl-3" style="height: 50px">
                <a class="nav-link" id="nav-armarios">Armários</a>
              </div>';
    }
    ?>

    <?php
    if ($permissoes == 1){
        echo '<div id="topico" class="unselect container bgwhite border-top border-dark pt-1 pl-3" style="height: 50px">
                <a class="nav-link" id="nav-topico">Usuários atuais</a>
              </div>';
    }
    ?>

    <?php
    if ($permissoes == 1){
        echo '<div id="topico2" class="unselect container bgwhite border-top border-dark pt-1 pl-3 border-bottom" style="height: 50px">
                <a class="nav-link" id="nav-topico2">Cadastrar</a>
              </div>';
    }
    ?>

</nav>

<script>

    switch (page) {
        case 'perfil':
            document.getElementById("perfil").classList.toggle('select');
            document.getElementById("perfil").classList.toggle('unselect');
            break;
        case 'biblioteca':
            document.getElementById("biblioteca").classList.toggle('select');
            document.getElementById("biblioteca").classList.toggle('unselect');
            break;
    }

    $(".unselect").click(function () {
        $(this).toggleClass('select');
        $(this).toggleClass('unselect');
    });
</script>