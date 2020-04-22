<div id="main-wrapper" class="container" style="margin-top: 2em; height: 100vh;">
	<div class="row" data-container="all">
		<div class="col-md-12">
			<h3 class="">Documentos</h3>
			<p>
				<a href="<?php echo site_url("documentos/criar");?>" class="btn btn-primary"><span class="fa fa-plus"></span> Novo Documento </a>
				<a href="<?php echo site_url("documentos/criar");?>" class="btn btn-primary"><span class="fa fa-archive"></span> Relatório </a>
			</p>
		</div>
        <div class="col-md-12">
            <div class="panel panel-white has-shadow">
				<div class="panel-heading clearfix">
					<h4 class="panel-title">Lista de Documentos</h4>
				</div>
				<div class="panel-body" style="margin-top:10px;">
					<?php $this->load->view("layout/messages"); ?>
					<div class="table-responsive">
						<table class="display table table-documentos table-hover mg-top-20">
							<thead>
								<tr>
									<th>#</th>
									<th>Profissional</th>
									<th>Nome Doc.</th>
									<!--<th>URL</th>-->
									<th>Data Envio.</th>
									<th>Download</th>
									<th class="td-actions"></th>
								</tr>
							</thead>
							<tbody>
								<?php foreach($listaDocumentos as $item): ?>
								<tr>
									<td><?php echo $item->id; ?></td>
									<td><?php echo $item->nome_prof; ?></td>
									<td><?php echo $item->descricao; ?></td>
									<!--<td><?php echo $item->url; ?></td> -->
									<td><?php echo date("d/m/Y", strtotime($item->data_envio)); ?></td>
									<!--<td><?php echo $item->cidade_pac; ?></td>
									<td><?php echo $item->uf_pac; ?></td>
									<td><?php echo ($item->status == 1 ? '<span class="label label-success"> Ativo </span>' : '<span class="label label-danger"> Inativo </span>') ?></td>
									<td><?php echo date("d/m/Y", strtotime($item->createdAt)); ?></td> -->
									<td><a href="<?php echo $item->url . $item->nome_arquivo; ?>" class="mr-2"><i class="fa fa-download text-info font-16"></i></a></td>
									<td class="td-actions">
										
									</td>
								</tr>
								<?php endforeach; ?>
							</tbody>
						</table>
					</div>
				</div>
			</div>
        </div>
	</div>
</div>
<script type="text/javascript">
    $(document).ready(function(event) {
        $('[data-toggle="popover"]').popover();
		$('.table-documentos').dataTable();
    });
</script>