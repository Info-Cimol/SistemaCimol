<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>public/temas/admin/css/servicos.css">

<style type="text/css">
	body{
        font-family: Arial, Helvetica, sans-serif;
        font-size: 15px;
    }
</style>

<div style="text-align: center; width: 500px; float: left; margin-left: 200px;">
	
	<div class="row">
        <div class="col-md-6">
            <div class="ibox">
                <form class="form-purple" method="post" action="<?php echo base_url() ?>servico/suporte/editar_submit">
                    <div class="ibox-head" >
                        <div class="ibox-title" style="margin-left: 180px;"><h3>Editar Chamado</h3> </div>
                    </div>

                    <table style="width: 100%; margin-top: 30px;">
		        		<tr style="margin-bottom: 20px;">
		        			<td style="width: 30%; text-align: center;">
		        				<div class="form-group" style="margin-bottom: 10px;">
						            <div class="input-group">
						                
						                <h4>Código</h4>
						                <td style="width: 70%; text-align: left;">
						                	<input class="form-control" type="text" value="<?= $chamado[0]->codigo ?? '' ?>" name="codigo" style="width: 250px;">
						                </td>
						            </div>
						        </div>
		        			</td>
		        		</tr>

		        		<tr style="margin-bottom: 20px;">
		        			<td style="width: 30%; text-align: center;">
		        				<div class="form-group" style="margin-bottom: 10px;">
						            <div class="input-group">
						                
						                <h4>Equipamento</h4>
						                <td style="width: 70%; text-align: left;">
						                	<input class="form-control" type="text" value="<?= $chamado[0]->nome ?? '' ?>" name="equipamento" style="width: 250px;">
						                </td>
						            </div>
						        </div>
		        			</td>
		        		</tr>

		        		<tr style="margin-bottom: 20px;">
		        			<td style="width: 30%; text-align: center;">
		        				<div class="form-group" style="margin-bottom: 10px;">
						            <div class="input-group">
						            	<h4>Nº de Série</h4>
						                <td style="width: 70%; text-align: left;">
						                	<input class="form-control" type="text" value="<?= $chamado[0]->num_serie ?? '' ?>" name="num_serie" style="width: 250px;">
						                </td>
						            </div>
						        </div>
		        			</td>
		        		</tr>

		        		<tr style="margin-bottom: 20px;">
		        			<td style="width: 30%; text-align: center;">
		        				<div class="form-group" style="margin-bottom: 10px;">
						            <div class="input-group">
						            	<h4>Data de Atendimento</h4>
						                <td style="width: 70%; text-align: left;">
						                	<input class="form-control" type="date" value="<?= $chamado[0]->data_atendimento ?? '' ?>" name="data_atendimento" style="width: 250px;">
						                </td>
						            </div>
						        </div>
		        			</td>
		        		</tr>

		        		<tr style="margin-bottom: 20px;">
		        			<td style="width: 30%; text-align: center;">
		        				<div class="form-group" style="margin-bottom: 10px;">
						            <div class="input-group">
						            	<h4>Data de Solução</h4>
						                <td style="width: 70%; text-align: left;">
						                	<input class="form-control" type="date" value="<?= $chamado[0]->data_solucao ?? '' ?>" name="data_solucao" style="width: 250px;">
						                </td>
						            </div>
						        </div>
		        			</td>
		        		</tr>

		        		<tr style="margin-bottom: 20px;">
		        			<td style="width: 30%; text-align: center;">
		        				<div class="form-group" style="margin-bottom: 10px;">
						            <div class="input-group">
						            	<h4>Defeito</h4>
						                <td style="width: 70%; text-align: left;">
						                	<textarea class="form-control" type="text" name="defeito" rows="2" style="width: 230px;"><?= $chamado[0]->defeito ?? '' ?></textarea>
						                </td>
						            </div>
						        </div>
		        			</td>
		        		</tr>

		        		<tr style="margin-bottom: 20px;">
		        			<td style="width: 30%; text-align: center;">
		        				<div class="form-group" style="margin-bottom: 10px;">
						            <div class="input-group">
						            	<h4>Solução</h4>
						                <td style="width: 70%; text-align: left;">
						                	<textarea class="form-control" type="text" name="solucao" rows="2" style="width: 230px;"><?= $chamado[0]->solucao ?? '' ?></textarea>
						                </td>
						            </div>
						        </div>
		        			</td>
		        		</tr>

		        		<tr style="margin-bottom: 20px;">
		        			<td style="width: 30%; text-align: center;">
		        				<div class="form-group" style="margin-bottom: 10px;">
						            <div class="input-group">
						                <h4>Status</h4>
						                <td style="width: 70%; text-align: left;">
						                	<select class="form-control" name="status" style="width: 270px;">
						                		<option><?= $chamado[0]->status ?? '' ?></option>
						                		<option>Pendente</option>
						                		<option>Aguardando peça</option>
						                		<option>Aguardando orçamento</option>
						                		<option>Finalizado</option>
						                	
						                	</select>

						                </td>
						            </div>
						        </div>
		        			</td>
		        		</tr>

		        		<input type="hidden" name="id_equipamento" value="<?= $chamado[0]->id_equipamento ?? '' ?>">

        			</table>

                    <div class="ibox-footer">
                        <button type="submit" class="btn btn-primary mr-2">Editar</button>
                        <a class="btn btn-secondary" href="<?php echo base_url() ?>servico/suporte" type="reset">Voltar</a>
                    </div>
                </form>
            </div>
        </div>
    </div>    
</div>