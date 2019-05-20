<?php
$last = $this->uri->total_segments();
$tentativa = $this->uri->segment($last);
?>
<main>
    <div class="container w-50 bg-white p-5 h-50 mt-5">
        <form action="<?= base_url()?>usuario/autenticar" method="POST" >

            <h2 class="text-dark">Login</h2>
            <hr class="mb-5"/>

            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="basic-addon1">email</span>
                </div>
                <input type="email" class="form-control" name="email" placeholder="Email">
            </div>
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="basic-addon1">Senha</span>
                </div>
                <input type="password" class="form-control" name="senha" placeholder="Senha">
            </div>

            <button type="submit" class="btn btn-info float-right mb-3">Pronto!</button>

        </form>
        <?php
        if($tentativa == 1){
            echo '<div id="message" class="alert alert-danger alert-dismissible">
                <strong>Email</strong> ou <strong>senha</strong> incorretos.
              </div>';
        }
        ?>
    </div>


</main>
<script>
    setTimeout(function(){
        $('#message').fadeOut();
    }, 2000)
</script>