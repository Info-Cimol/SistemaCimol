<link type="text/css" href="<?= base_url(); ?>assets/css/bootstrap.css" rel="stylesheet">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>


<header class="bg-white d-flex justify-content-around align-items-center shadow p-3 bg-white rounded ">
    <h1 class="text-dark ">CIMOL</h1>
    <h2></h2>
    <h2></h2>
    <?php
        if(!empty($_SESSION['user_data'])){
            echo '<h3><a  class="text-dark " href="'.base_url().'logout">SAIR</a></h3>';
        }
        else{
            echo '<h3><a  class="text-dark " href="'.base_url().'login/0">LOGIN</a></h3>';
        }
    ?>


</header>
<body class="bg-light">