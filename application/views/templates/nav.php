<style>
    #templatesNav{
        float: left;
        width: 30%;
        height: 84%;
        font-family: Tahoma;
        border-top: solid #707070 2px;
    }
    #nav{
        width: 95%;
        height: 95%;
        background-color: white;
        padding: 10px;
        padding-right: 0px;
    }
    .item{
        cursor: pointer;
        color: #707070;
        padding: 2px;
        margin-top: -2px;
        padding-left: 10px;
    }
    .item:hover{
        background-color: #707070;
        color: white;
    }
    .nome{
        font-size: 25px;

    }
    .itemHr{
        background-color: #707070;
        margin: 0px;
    }
    .select{
        border-right: solid #707070 3px;
    }
</style>

<script>

</script>

<div id="templatesNav">
    <div id="nav">
        <div class="item select">
            <div class="itemNome">
                <h3 class="nome">Perfil</h3>   <!--  Padrão  -->
            </div>
        </div>
        <hr class="itemHr"/>

        <div class="item">
            <div class="itemNome">
                <h3 class="nome">Armários</h3>
            </div>
        </div>
        <hr class="itemHr"/>

        <div class="item">
            <div class="itemNome">
                <h3 class="nome">Biblioteca</h3>
            </div>

        </div>
        <hr class="itemHr"/>

        <div class="item">
            <div class="itemNome">
                <h3 class="nome">Alunos</h3>
            </div>

        </div>
        <hr class="itemHr"/>

        <div class="item">
            <div class="itemNome">
                <h3 class="nome">Tópico Aleatório</h3>
            </div>

        </div>
        <hr class="itemHr"/>

        <div class="item">
            <div class="itemNome">
                <h3 class="nome">Outro Tópico</h3>
            </div>

        </div>
        <hr class="itemHr"/>

    </div>
</div>