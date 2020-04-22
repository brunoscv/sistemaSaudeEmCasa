<div id="main-wrapper" class="container" style="margin-top: 2em; height: 100vh;">
	<div class="row" data-container="all">
        <div class="col-md-12">
            <div class="panel panel-white has-shadow">
				<div class="panel-heading clearfix">
					<h4 class="panel-title">Convenios / Editar</h4>
					<a href="<?php echo site_url("convenios");?>" class="btn btn-primary pull-right"><span class="fa fa-list"></span> Todos</a>
				</div>
				<div class="panel-body" style="margin-top:10px;">
					<?php $this->load->view('layout/messages.php'); ?>

					<form id="form_convenios" class="form-horizontal" method="post" action="<?php echo site_url();?>documentos/salvar_documentos" enctype="multipart/form-data">
						<input type="hidden" id="id" name="id" value="<?php echo set_value("id", @$item->id); ?>" />
						<div class="form-group">
							<label class="col-sm-2 control-label" for="profissionais_id">Profissional</label>
							<div class="col-sm-10">
								<?php echo form_dropdown('profissionais_id', $listaProfissionais, set_value('profissionais_id', @$item->profissionais_id), 
								'data-size="7" data-live-search="true" class="form-control" id="profissionais"required=""'); ?>
								<?php echo form_error('profissionais_id'); ?>
							</div>
						</div>

						<div class="form-group">
							<label class="col-sm-2 control-label" for="descricao">Descrição</label>
							<div class="col-sm-10">
								<input name="descricao" type="text" id="descricao" required="" class="form-control" value="<?php echo set_value("descricao", @$item->descricao) ?>" />
							<?php echo form_error('descricao'); ?>
							</div>
						</div>
						
						<div class="form-group">
							<label class="col-sm-2 control-label" for="data_envio">Data de Referência</label>
							<div class="col-sm-10">
								<input name="data_envio" type="text" id="data_envio" required="" class="form-control" value="<?php echo set_value("data_envio", @$item->data_envio) ?>" />
							<?php echo form_error('data_envio'); ?>
							</div>
						</div>
						<!-- /control-group -->
						<div class="form-group">
							<label class="col-sm-2 control-label" for="status">Documentos</label>
							<div class="col-sm-10">
								<input type="file" name="files[]" multiple required="required"/>
							</div>
						</div>

						<div class="form-group">
							<div class="col-sm-offset-2 col-sm-10">
								<input type="submit" name="enviar" class="btn btn-primary" value="Salvar" />
								<a href="<?php echo site_url("documentos")?>" class="btn">
									Cancelar
								</a>
							</div>
						</div>
					</form>
				</div>	
			</div>
		</div>
	</div>
</div>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/modulos/convenios/js.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/modulos/convenios/validate.js"></script>
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$("#profissionais").selectpicker();
		$("#data_envio").datepicker({
			format: 'dd/mm/yyyy',
			autoclose: true,
			language: "pt",
			todayHighlight: true
		});
		$("#data_envio").mask("99/99/9999");
	});
</script>

