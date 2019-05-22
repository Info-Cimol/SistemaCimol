<link type="text/css" href="<?= base_url(); ?>assets/css/bootstrap.css" rel="stylesheet">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>

<style>
    body{
        background-color: #dfdfdf!important;
    }
</style>

<header class="bg-white justify-content-around align-items-center shadow"
    style="height: 12%;">
    <div class="w-25 float-left h-100 d-flex justify-content-center align-items-center"
        style="background-color: #115E7F">
        <h1 class="text-white">CIMOL</h1>
    </div>
    <div class="w-25 float-right h-100 d-flex justify-content-center align-items-center">
    <?php
        if(!empty($_SESSION['user_data'])){
            echo '<h3><a  class="text-dark " href="'.base_url().'logout">SAIR</a></h3>';
        }
        else{
            echo '<h3><a  class="text-dark " href="'.base_url().'login/0">LOGIN</a></h3>';
        }
    ?>
    </div>
</header>

<body>