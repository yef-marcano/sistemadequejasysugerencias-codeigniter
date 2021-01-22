<?php $this->load->view('header'); ?>

<!--  BO :heading -->

<div class="row wrapper border-bottom white-bg page-heading">

	<div class="col-sm-4">

		<h2>Quejas y Sugerencias</h2>

		<ol class="breadcrumb">

			<li>

				<a href="<?php echo base_url() . 'admin/' ?>">Inicio</a>

			</li>

			<li class="active">

				<strong>Administrar Mensajes</strong>

			</li>

		</ol>

	</div>

	<div class="col-sm-8">

		<div class="title-action">

		</div>

	</div>

</div>

<!--  EO :heading -->

<div class="row">

	<div class="col-lg-12 row wrapper ">

		<div class="ibox ">

			<div class="ibox-title">

				<h5>View <small></small></h5>

				<div class="ibox-tools">

				</div>

			</div>

			<!-- ............................................................. -->

			<!-- BO : content  -->

			<div class="col-sm-12 white-bg ">

				<div class="box box-info">

					<div class="box-header with-border">

						<h3 class="box-title"> </h3>

					</div>

					<!-- /.box-header -->

					<!-- form start -->

					<form action="" id="" class="form-horizontal " method="post" enctype="multipart/form-data">

						<div class="box-body">

							<?php if ($this->session->flashdata('message')) : ?>

								<div class="alert alert-success">

									<button type="button" class="close" data-close="alert"></button>

									<?php echo $this->session->flashdata('message'); ?>

								</div>

							<?php endif; ?>



							<table class='table table-bordered' style='width:70%;' align='center'>

								<tr>

									<td>

										<label for="nombrecompleto" class="col-sm-3 control-label"> Nombre </label>

									</td>

									<td>

										<?php echo set_value("nombrecompleto", html_entity_decode($items->nombrecompleto)); ?>

									</td>

								</tr>



								<tr>

									<td>

										<label for="telefono" class="col-sm-3 control-label"> Telefono </label>

									</td>

									<td>

										<?php echo set_value("telefono", html_entity_decode($items->telefono)); ?>

									</td>

								</tr>



								<tr>

									<td>

										<label for="direccion" class="col-sm-3 control-label"> Direccion </label>

									</td>

									<td>

										<?php echo set_value("direccion", html_entity_decode($items->direccion)); ?>

									</td>

								</tr>





								<!-- Tipo Start -->

								<tr>

									<td>

										<label class="col-sm-3 control-label">Tipo</label>

									</td>

									<td>

										<?php $arr = explode(", ", $items->tipo) ?>



										<span style="margin-left:5px;"><?php echo in_array("Pregunta", $arr) ? 'Pregunta' : ""; ?></span>

										<span style="margin-left:5px;"><?php echo in_array("Reclamo", $arr) ? 'Reclamo' : ""; ?></span>

										<span style="margin-left:5px;"><?php echo in_array("Felicitación", $arr) ? 'Felicitación' : ""; ?></span>

										<span style="margin-left:5px;"><?php echo in_array("Duda", $arr) ? 'Duda' : ""; ?></span>

									</td>

								</tr>

								<!-- Tipo End -->







								<!-- Mensaje Start -->

								<tr>

									<td>

										<label for="mensaje" class="col-sm-3 control-label"> Mensaje </label>

									</td>

									<td>

										<?php echo set_value("mensaje",  html_entity_decode($items->mensaje)); ?>

									</td>

								</tr>

								<!-- Mensaje End -->

								<!-- Fueleido Start -->

								<tr>

									<td>

										<label class="control-label col-md-3">Estado</label>

									</td>

									<td>

										<?php if (set_value("fueleido", $items->fueleido == 1)) {
											echo "Realizado";
										} else {
											echo "En proceso";
										} ?>

									</td>

								</tr>

								<!-- Fueleido End -->


								<!-- Creado_fecha Start -->

								<tr>

									<td>

										<label for="creado_fecha" class="col-sm-3 control-label"> Fecha </label>

									</td>

									<td>

										<?php echo set_value("creado_fecha", html_entity_decode($items->creado_fecha)); ?>

									</td>

								</tr>

								<!-- Creado_fecha End -->

								<!-- Departamento_id Start -->

								<tr>

									<td>

										<label class="control-label col-md-3"> Departamento </label>

									</td>

									<td>

										<?php

										if (isset($departamento) && !empty($departamento)) :



											foreach ($departamento as $key => $value) :

												if ($value->id == $items->departamento_id)

													echo $value->nombre;



											endforeach;

										endif; ?>

									</td>

								</tr>

								<!-- Departamento_id End -->



								<tr>
									<td colspan="2"><a type="reset" class="btn btn-info pull-right" onclick="history.back()">Volver</a></td>
								</tr>
							</table>

							<div class="form-group">

								<div class="col-sm-3">

								</div>

								<div class="col-sm-6">

								</div>

								<div class="col-sm-3">

								</div>

							</div>

						</div>

						<!-- /.box-body -->

						<div class="box-footer">

						</div>

						<!-- /.box-footer -->

					</form>

				</div>

				<!-- /.box -->

				<br><br><br><br>

			</div>

			<!-- EO : content  -->

			<!-- ...................................................................... -->

		</div>

	</div>

</div>

<?php $this->load->view('footer'); ?>