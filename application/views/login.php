<!--<style>
    #mainLogin{
        font-family: Tahoma;
        color: #707070;
    }
    #form{
        background-color: white;
        margin: auto;
        margin-top: 50px;
        height: 350px;
        width: 370px;
        padding: 30px;
        box-shadow: 0px 20px 200px -100px black;
    }
    #h1Login{
        font-size: 35px;
        font-weight: bold;
        margin: 0px;
        cursor: pointer;
    }
    #hrLogin{
        background-color: #707070;
    }
    .divInputs{
        margin: 20px 0px 0px 0px;
    }
    label{
        font-size: 22px;
    }
    .input{
        width: 100%;
        height: 30px;
        font-size: 15px;
        margin-top: 5px;
        padding-left: 5px;
    }
    #formInput{
        margin-top: 65px;
    }
    #inputSubmit{
        height: 35px;
        width: 75px;
        border-radius: 15px;
        background-color: #115E7F;

        border: none;
        color: white;
        padding: 9px 16px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 16px;
        margin: 50px 0px;
        cursor: pointer;
        float: right;
    }
</style>-->

<main>
    <div class="container w-50 bg-white p-5 h-50 mt-5">
        <form action="<?= base_url()?>usuario/autenticar" method="POST" >

            <h2 class="text-dark">Login</h2>
            <hr class="mb-5"/>

            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="basic-addon1">email</span>
                </div>
                <input type="text" class="form-control" placeholder="Email" aria-label="Email" aria-describedby="basic-addon1">
            </div>

            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="basic-addon1">Senha</span>
                </div>
                <input type="password" class="form-control" placeholder="Senha" aria-label="Senha" aria-describedby="basic-addon1">
            </div>

            <button type="submit" class="btn btn-info float-right mb-3">Pronto!</button>

        </form>
    </div>

</main>