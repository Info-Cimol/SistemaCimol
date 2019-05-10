<style>
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
</style>

<main id="mainLogin">
    <div id="form">
        <form action="<?= base_url()?>usuario/autenticar" method="POST">
            <div>
                <h1 id="h1Login">LOGIN</h1>
                <hr id="hrLogin"/>
            </div>

            <div id="formInput">
                <div class="divInputs">
                    <div>
                        <label> Email </label>
                    </div>
                    <input type="email" class="input" name="email" placeholder="Email" />
                </div>

                <div class="divInputs">
                    <div>
                        <label> Senha </label>
                    </div>
                    <input type="password" class="input" name="senha" placeholder="Senha" />
                </div>
            </div>

            <div>
                <input type="submit" id="inputSubmit" name="autenticar" value="Enviar" />
            </div>
        </form>
    </div>

</main>