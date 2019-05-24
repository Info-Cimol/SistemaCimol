<?php
if(!empty($_SESSION['patrimonio_data'])){
    $select = $_SESSION['patrimonio_data']['select'];
    $serv_patrimonio = $_SESSION['patrimonio_data']["serv_patrimonio"];
}
?>


<head>
    <meta charset="utf-8">
    <title>Controle de Patrimonios- </title>
    <link href="<?php echo  base_url()?>/assets/css/reset.css" rel="stylesheet" type="text/css">
    <link href="<?php echo  base_url()?>/assets/css/estilo.css" rel="stylesheet" type="text/css">

    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>


<script>
function confirmar_exclusao(Patrimonio) {
    if (!confirm("Tem certeza que deseja excluir o Patrimonio: " + patrimonio + "?")) {
        return false;
    }
    alert("Patrimonio Excluido com sucesso!");
    return true;
}
</script>


<button  style="float:right" <a class="btn btn-success" onClick="window.location.href = '<?php echo base_url();?>coordenacao/patrimonio/cadastro_patrimonio';return false;">Novo </a></button>

<div>  

    <h4 style="font-family: arial; position:relative; left:400px">Lista de Patrimonios</h4>

    <div style="background-color: white; margin-left: 400px; ">
        <div class="table-respnsive">        
            <table class="table table-striped table-bordered table-hover" style="border-style: solid">
                <thead>
                    <tr>           
                                           
                        <th scope="col">Patrimonios</th>
                        <tr>
                        </thead>
                        <?php
                        $contador = 0;



                        foreach ($serv_patrimonio as $serv_patrimonios) {
                            ?>
                            <tbody>
                                <tr>                
                                                             
                                    <td> <?php echo $serv_patrimonios->nome?> </td>
                                    <?php $contador++;
                                } ?>
                            </tbody>
                        </table>
                    </div>

                </div>
                ...
            </div>

        </div>
    </div>
</div>



<script type="text/javascript">

    function adicionar_item_modal($id){
        var id = $id;
        $('#id_patrimonio').val(id);
    }


    $('#myModal').on('shown.bs.modal', function () {
        $('#myInput').trigger('focus');
    }

</script>



