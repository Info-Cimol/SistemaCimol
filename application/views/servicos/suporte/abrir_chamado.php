

<style>
    .ibox-footer{
        text-align: end;
        margin-top: 30px;
        margin-left: 10px;
        height: 50px;
        float: left;
    }

    .ibox-title{
        margin-left: 90px;
        margin-top: 20px;
        width: 230px;
    }

    .contentor{
        width: 400px;
        padding: 10px;
        height: 80px;
    }

    .contentor > div{
        text-align: start;
    }

    input{
        float: right;
    }



</style>

<div style="width: 75%; float: right">
    <div style="text-align: center; width: 500px; float: left; margin-left: 200px;">
        <div class="row">
            <div class="col-md-6">
                <div class="ibox">
                    <form class="form-purple" method="post" id="submit_formulario">
                        <div class="ibox-head" >
                            <div class="ibox-title"><h3>Abrir Chamado</h3></div>
                        </div>

                        <div style="width: 500px;height: 400px">
                            <div class="contentor" id="adicionar">
                                <div class="div1">
                                    <span class="input-icon input-icon-left">Código</span>
                                </div>
                                <div class="div2">
                                    <input class="form-control" type="text" id="codigo" name="codigo">
                                </div>
                            </div>

                            <div class="contentor" id="equipamento">
                                <div>
                                    <span class="input-icon input-icon-left" >Equipamento</span>
                                </div>
                                <div>
                                    <input class="form-control" type="text" name="equipamento" >
                                </div>
                            </div>

                            <div class="contentor" id="num_serie">
                                <div>
                                    <span class="input-icon input-icon-left" >Nº de Série</span>
                                </div>
                                <div>
                                    <input class="form-control" type="text" name="num_serie" >
                                </div>
                            </div>

                            <div class="contentor" id="local">

                                <div>
                                    <span class="input-icon input-icon-left" >Local</span>
                                </div>
                                <div>
                                    <select class="form-control" name="local" id="local_option" ></select>
                                </div>

                            </div>

                            <div class="contentor" id="defeito">

                                <div>
                                    <span class="input-icon input-icon-left" >Defeito</span>
                                </div>
                                <div>
                                    <textarea id="defeito" name="defeito" style="width: 100%;"></textarea>
                                </div>

                            </div>

                            <div class="ibox-footer">
                                <button type="submit" class="btn btn-primary mr-2">Abrir</button>
                                <a class="btn btn-secondary" href="<?php echo base_url() ?>servico/servicos" type="reset">Voltar</a>
                            </div>

                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!--  adicionar local  -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header" style="text-align: center">
                    <h3 class="modal-title" id="exampleModalLabel">Adicionar Local</h3>
                </div>
                <div class="modal-body" id="modal_body">
                    <form method="post" id="formulario_adicionar_local">
                        <table style="width: 100%">
                            <tr style="margin-bottom: 20px;">
                                <td style="width: 30%; text-align: center;">
                                    <div class="form-group" style="margin-bottom: 10px">
                                        <div class="input-group">
                                            <span class="input-icon input-icon-left" style="font-size: 15px;">Informe o local</span>
                                <td style="width: 70%; text-align: left;">
                                    <input class="form-control" name="local" type="text" id="add_local" style="width: 250px">
                                </td>
                            </tr>
                        </table>
                    </form>
                </div>
            </div>
        </div>
        <div class="modal-footer" style="text-align: center;">
            <button type="button" id="fecha_modal" class="btn btn-secondary" data-dismiss="modal">Sair</button>
            <button type="submit" class="btn btn-primary">Adicionar</button>
        </div>
    </div>
</div>







<!--  Modal que edita o chamado -->


		<!-- Carrega Ajax -->
<script type="text/javascript">
		
	$(document).ready(function(){

	    /*/  pesquisar os locais para o select  /*/
        $.ajax({
            url:"<?php echo base_url() ?>suporte/busca_local",
            method:"POST",
            dataType: 'json',
            success:function(data){
                for (var i = 0; i < data.length; i++) {
                    $('#local_option').append('<option value='+data[i].id+'>'+data[i].descricao+'</option>');
                }
            }
        })


		$('#codigo').keyup(function(){
			
			if ($('#codigo').val().length > 1) {

				var codigo = $('#codigo').val();
				$('#codigo_input').empty();
				$('#equipamento').empty();
        		$('#num_serie').empty();
        		$('#local').empty();
        		$('#defeito').empty();
				$.ajax({
		            url:"<?php echo base_url() ?>suporte/busca_detalhes_abrir_chamado",
		            method:"POST",
		            dataType: 'json',
		            data:{codigo:codigo},
		            success:function(data){
		            	if (data[0]) {

		            		$('#codigo_input').html('<div ><span class="input-icon input-icon-left" >Código</span></div><div ><div><input class="form-control" type="text" name="codigo" readonly="readonly" value="'+data[0].codigo+'" ></div></div>');

		            		$('#equipamento').html('<div ><span class="input-icon input-icon-left" >Equipamento</span></div><div ><div><input class="form-control" type="text" name="equipamento" readonly="readonly" value="'+data[0].nome+'" ></div></div>');
		            		
		            		$('#num_serie').html('<div ><span class="input-icon input-icon-left" >Nº de Série</span></div><div ><div><input class="form-control" type="text" name="num_serie" readonly="readonly" value="'+data[0].num_serie+'" ></div></div>');

		            		$('#local').html('<div ><span class="input-icon input-icon-left" >Local</span></div><div ><div><select class="form-control" name="local" id="local_option" disabled="disabled">'+data[0].descricao+'</select></div></div>');

		            		$('#defeito').html('<div ><span class="input-icon input-icon-left" >Defeito</span></div><div ><div><textarea id="defeito" style="width: 100%;" name="local" ></textarea></div></div>');

                            $.ajax({
                                url:"<?php echo base_url() ?>suporte/busca_local",
                                method:"POST",
                                dataType: 'json',
                                success:function(data){
                                    for (var i = 0; i < data.length; i++) {
                                        $('#local_option').append('<option value='+data[i].id+'>'+data[i].descricao+'</option>');
                                    }
                                }
                            })

		            	}else{

                            $('#codigo_input').html('<div ><span class="input-icon input-icon-left" >Código</span></div><div ><div><input class="form-control" type="text" name="codigo" value="" ></div></div>');

                            $('#equipamento').html('<div ><span class="input-icon input-icon-left" >Equipamento</span></div><div ><div><input class="form-control" type="text" name="equipamento" value="" ></div></div>');

                            $('#num_serie').html('<div ><span class="input-icon input-icon-left" >Nº de Série</span></div><div ><div><input class="form-control" type="text" name="num_serie" value="" ></div></div>');

                            $('#local').html('<div ><span class="input-icon input-icon-left" >Local</span></div><div ><div><select class="form-control" name="local" id="local_option" ></select></div></div>');

                            $('#defeito').html('<div ><span class="input-icon input-icon-left" >Defeito</span></div><div ><div><textarea id="defeito" name="local" style="width: 100%;"></textarea></div></div>');

                            $.ajax({
                                url:"<?php echo base_url() ?>suporte/busca_local",
                                method:"POST",
                                dataType: 'json',
                                success:function(data){
                                    for (var i = 0; i < data.length; i++) {
                                        $('#local_option').append('<option value='+data[i].id+'>'+data[i].descricao+'</option>');
                                    }
                                }
                            })
                        }
		            }
	       		})
			}

		})

		$('#submit_formulario').submit(function(e){
			e.preventDefault();
	        var codigo = $('input[name=codigo]').val();
	        var equipamento = $('input[name=equipamento]').val();
	        var num_serie = $('input[name=num_serie]').val();
	        var local_id = $("#local_option").val();
	        var defeito = $('textarea#defeito').val();
	        //alert(local);
	        //return false;
	        if (equipamento == '') {
	        	$('#alert').html('<div class="alert alert-danger alert-dismissable"><h4 class="text-white">Informe o equipamento</h4></div>');
	                	return;
	        }
	        if (local == '') {
	        	$('#alert').html('<div class="alert alert-danger alert-dismissable"><h4 class="text-white">Informe o local</h4></div>');
	                	return;
	        }

	        if (defeito == '') {
	        	$('#alert').html('<div class="alert alert-danger alert-dismissable"><h4 class="text-white">Informe o defeito do equipamento</h4></div>');
	                	return;
	        }

	        $.ajax({
	            url:"<?php echo base_url() ?>suporte/abrir_chamado_submit",
	            method:"POST",
	            dataType: 'json',
	            data:{codigo:codigo, equipamento:equipamento, num_serie:num_serie, local_id:local_id, defeito:defeito},
	            success:function(data){

	                if (data == true) {
	                	window.location.href = "<?php echo base_url() ?>servico/servicos";
	                	return; 
	                }

	                if ((data[0].num_serie > 0)) {
	                	$('#alert').html('<div class="alert alert-danger alert-dismissable"><h4 class="text-white">Já existe um chamado aberto com esse Nº de Série</h4></div>');
	                	return;
	                }else if (data[0].codigo > 0) {
	                	$('#alert').html('<div class="alert alert-danger alert-dismissable"><h4 class="text-white">Já existe um chamado aberto com esse Código</h4></div>');
	                	return;
	                }                	                
	            }  
	        })         
	    })

	})

	// Evita o envio do formulario com ENTER
   	$(document).keypress(function (e) {
        var code = null;
        code = (e.keyCode ? e.keyCode : e.which);                
        return (code == 13) ? false : true;
   	});
	
	// Ao clicar ENTER abre o formulario para Cadastrar novo chamado, á pedido do Candido
	$(document).keyup(function(e){
		e.preventDefault();
		var key = e.which || e.keyCode;
	  	if (key == 13) { 
	    	$('#adicionar_equipamento').trigger('click');
	  	}
	})

	// Pula o campo ao dar ENTER
	$(document).on('keyup', 'input', function(event) {
	  
	  if (event.which == 13) {
	    var generico = $(document).find('input:visible');
	    var indice = generico.index(event.target) + 1;
	    var seletor = $(generico[indice]).focus();

	    if (seletor.length == 0) {
	      event.target.focus();
	    }
	  }
	})

	$('#formulario_adicionar_local').submit(function(e){
		e.preventDefault();
        var local = $('#add_local').val();
        if (local == '') {
        	alert('Digite o local');
        	//$('#alert').html('<div class="alert alert-danger alert-dismissable"><h4 class="text-white">Informe o local</h4></div>');
                	return;
        }

        $.ajax({
            url:"<?php echo base_url() ?>servico/suporte/adicionar_local",
            method:"POST",
            dataType: 'json',
            data:{local:local},
            success:function(data){

                if (data == true) {
                	$.ajax({
			            url:"<?php echo base_url() ?>servico/suporte/busca_local",
			            method:"POST",
			            dataType: 'json',
			            success:function(data){
			            	//$('#local_option').val() = null;
			            	
			            	$('#fecha_modal').trigger('click');
			            	for (var i = 0; i < data.length; i++) {
			            		$('#local_option').append('<option value='+data[i].id+'>'+data[i].descricao+'</option>');
			            	}	
			            }  
			        })
                	//window.location.href = "<?php echo base_url() ?>servico/suporte/abrir_chamado";
                	
                }    
        	}  
    	})         
	})

	// Gatilho para abrir modal
	$('#myModal').on('shown.bs.modal', function () {
	   $('#myInput').trigger('focus')
	})
		
</script>