<style>
    .foto{
        height: 150px;
        width: 150px;
    }
</style>
<?php
    $usuario = $_SESSION['user_data']['perfil'];
    print_r($_SESSION['user_data']['perfil']['curso']);
?>
<main class="w-75 float-right d-flex justify-content-center">
    <div class="bg-white h-75 w-50 m-5 p-4">
        <img src="<?= base_url().$usuario['foto']?>" class="bg-info rounded-circle foto d-flex justify-content-center align-items-center m-auto">
            <h3 class="text-white">foto</h3>
        </img>
        <div class="mt-4 ml-auto">
            <h2 class="text-center text-dark"><?= $usuario['nome']?></h2>
            <h4 class="text-center text-secondary"><?php if($usuario['curso']){echo $usuario['curso'];}?></h4>
        </div>
        <hr />
        <div class="ml-auto mt-2">
            <h4 class="text-center text-dark"><?= $usuario['email']?></h4>
        </div>
        <button type="button" class="btn float-right mt-3" style="background-color: #115e7f; color:white;">Editar</button>
    </div>
</main>
