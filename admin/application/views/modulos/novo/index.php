<div class="page-title">
	<div class="container">
		<h3>Protótipo de Tela - Reintegrar</h3>
	</div>
</div>

<section>
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="panel panel-white has-shadow">
					<div class="panel-heading">
						<h4 class="panel-title"><i class="fa fa-line-chart"></i> Informações do Paciente</h4>
						<div class="alterar-visualizacao" id='alterar-visualizacao'></div>
					</div>
					<div class="panel-body">
						<form id="form_pacientes" action="<?php echo current_url(); ?>" class="form-horizontal" method="post">
							<input name="id" type="hidden" id="id" class="form-control" value="<?php echo set_value("id", @$item->id) ?>" />

							<div class="row">
								<div class="">
									<div class="">
										<label class="col-sm-4" for="nome_pac">Nome
											<input name="nome_pac" type="text" id="nome_pac" class="form-control" value="<?php echo set_value("nome_pac", @$item->nome_pac) ?>" />
											<?php echo form_error('nome_pac'); ?>
										</label>
										
									</div>
								</div>
								<div class="">
									<div class="">
										<label class="col-sm-4" for="filiacao">Filiação
											<input name="filiacao" type="text" id="filiacao" class="form-control" value="<?php echo set_value("filiacao", @$item->filiacao) ?>" />
											<?php echo form_error('filiacao'); ?>
										</label>
										
									</div>
								</div>
								<div class="">
									<div class="">
										<label class="col-sm-4" for="email_pac">Email
											<input name="email_pac" type="text" id="email_pac" class="form-control" value="<?php echo set_value("email_pac", @$item->email_pac) ?>" />
											<?php echo form_error('email_pac'); ?>
										</label>
										
									</div>
								</div>
							</div>
							<div class="row">
								<div class="">
									<div class="">
										<label class="col-sm-4" for="data_nasc">Data Nascimento
											<input name="data_nasc" type="text" id="data_nasc" class="form-control" value="<?php echo set_value("data_nasc", @$item->data_nasc) ?>" />
											<?php echo form_error('data_nasc'); ?>
										</label>
										
									</div>
								</div>
								<div class="">
									<div class="">
										<label class="col-sm-4" for="rg">RG
											<input name="rg" type="text" id="rg" class="form-control" value="<?php echo set_value("rg", @$item->rg) ?>" />
											<?php echo form_error('rg'); ?>
										</label>
										
									</div>
								</div>
								<div class="">
									<div class="">
										<label class="col-sm-4" for="cpf">CPF
											<input name="cpf" type="text" id="cpf" class="form-control" value="<?php echo set_value("cpf", @$item->cpf) ?>" />
											<?php echo form_error('cpf'); ?>
										</label>
										
									</div>
								</div>
							</div>
							<div class="row">
								<div class="">
									<div class="">
										<label class="col-sm-3" for="carteira">Carteira
											<input name="carteira" type="text" id="carteira" class="form-control" value="<?php echo set_value("carteira", @$item->carteira) ?>" />
											<?php echo form_error('carteira'); ?>
										</label>
										
									</div>
								</div>
								<div class="">
									<div class="">
										<label class="col-sm-3" for="telefone_pac">Telefone
											<input name="telefone_pac" type="text" id="telefone_pac" class="form-control" value="<?php echo set_value("telefone_pac", @$item->telefone_pac) ?>" />
											<?php echo form_error('telefone_pac'); ?>
										</label>
										
									</div>
								</div>
								<div class="">
									<div class="">
										<label class="col-sm-3" for="telefone_pac2">Telefone 2
											<input name="telefone_pac2" type="text" id="telefone_pac2" class="form-control" value="<?php echo set_value("telefone_pac2", @$item->telefone_pac2) ?>" />
											<?php echo form_error('telefone_pac2'); ?>
										</label>
										
									</div>
								</div>
								<div class="">
									<div class="">
										<label class="col-sm-3" for="telefone_pac_fixo">Telefone Fixo
											<input name="telefone_pac_fixo" type="text" id="telefone_pac_fixo" class="form-control" value="<?php echo set_value("telefone_pac_fixo", @$item->telefone_pac_fixo) ?>" />
											<?php echo form_error('telefone_pac_fixo'); ?>
										</label>
										
									</div>
								</div>
							</div>
							<div class="row">
								<div class="">
									<div class="">
										<label class="col-sm-3" for="planos_id">Plano
										<?php echo form_dropdown('planos_id', $listaPlanos, set_value('planos_id', @$item->planos_id), 'class="form-control" id="planos_id"'); ?>
											<?php echo form_error('planos_id'); ?>
										</label>
										
									</div>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="dashboard-header">
	<div class="container-fluid">
		<div class="row">
			<!-- Statistics -->
			<div class="statistics col-lg-3 col-12">
				<div class="statistic d-flex align-items-center bg-white has-shadow">
					<div class="icon bg-red"><i class="fa fa-tasks"></i></div>
					<div class="text"><strong></strong><br><small>Atendimentos Realizados</small></div>
				</div>
				<div class="statistic d-flex align-items-center bg-white has-shadow">
					<div class="icon bg-green"><i class="fa fa-calendar-o"></i></div>
					<div class="text"><strong>108</strong><br><small>Especialidades Cadastradas</small></div>
				</div>
				<div class="statistic d-flex align-items-center bg-white has-shadow">
					<div class="icon bg-orange"><i class="fa fa-paper-plane-o"></i></div>
					<div class="text"><strong>15</strong><br><small>Convênios Atendidos</small></div>
				</div>
				<div class="statistic d-flex align-items-center bg-white has-shadow">
					<div class="icon bg-orange"><i class="fa fa-paper-plane-o"></i></div>
					<div class="text"><strong>15</strong><br><small>Convênios Atendidos</small></div>
				</div>
			</div>
			<div class="col-lg-9 col-12">
				<div class="panel panel-white has-shadow">
					<div class="panel-heading clearfix">
						<h4 class="panel-title">Perfis de Acesso</h4>
					</div>
					<div class="panel-body" style="margin-top:10px;">
						<!-- Pie Chart  -->
						<div class="col-lg-5 col-12">
							<div class="pie-chart d-flex align-items-center justify-content-center">
								<canvas id="pieChart"></canvas>
							</div>
							<div id="legends" class="chart-legend"></div>
							<style type="text/css">
								.chart-legend li span {
									display: inline-block;
									width: 12px;
									height: 12px;
									margin-right: 5px;
								}
							</style>
						</div>
						<!-- Line Chart  -->
						<div class="col-lg-7 col-12">
							<div class="line-chart d-flex align-items-center justify-content-center">
								<canvas id="lineChart"></canvas>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/modulos/dashboard/js.js"></script>