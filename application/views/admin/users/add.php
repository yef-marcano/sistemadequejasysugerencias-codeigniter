<?php $this->load->view('header'); ?>

<!--  BO :heading -->

<div class="row wrapper border-bottom white-bg page-heading">

	<div class="col-sm-4">

		<h2>Users</h2>

		<ol class="breadcrumb">

			<li>

				<a href="<?php echo base_url() . 'admin/' ?>">Dashboard</a>

			</li>

			<li class="active">

				<strong>Users</strong>

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

	<div class="wrapper wrapper-content animated fadeInRight">

		<div class="ibox ">

			<div class="ibox-title">

				<h5>Agregar <small></small></h5>

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

						<input type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>" value="<?php echo $this->security->get_csrf_hash(); ?>">

						<div class="box-body">

							<?php if ($this->session->flashdata('message')) : ?>

								<div class="alert alert-success">

									<button type="button" class="close" data-close="alert"></button>

									<?php echo $this->session->flashdata('message'); ?>

								</div>

							<?php endif; ?>


							<!-- Password Start -->

							<div class="form-group">

								<label for="password" class="col-sm-3 control-label"> Contraseña </label>

								<div class="col-sm-4">

									<input type="text" class="form-control" id="password" name="password" value="<?php echo set_value("password"); ?>">

								</div>

								<div class="col-sm-5">



									<?php echo form_error("password", "<span class='label label-danger'>", "</span>") ?>

								</div>

							</div>

							<!-- Password End -->



							<!-- Email Start -->

							<div class="form-group">

								<label for="email" class="col-sm-3 control-label"> Correo Electronico </label>

								<div class="col-sm-4">

									<input type="text" class="form-control" id="email" name="email" value="<?php echo set_value("email"); ?>">

								</div>

								<div class="col-sm-5">



									<?php echo form_error("email", "<span class='label label-danger'>", "</span>") ?>

								</div>

							</div>

							<!-- Email End -->


							<!-- First_name Start -->

							<div class="form-group">

								<label for="first_name" class="col-sm-3 control-label"> Nombre </label>

								<div class="col-sm-4">

									<input type="text" class="form-control" id="first_name" name="first_name" value="<?php echo set_value("first_name"); ?>">

								</div>

								<div class="col-sm-5">



									<?php echo form_error("first_name", "<span class='label label-danger'>", "</span>") ?>

								</div>

							</div>

							<!-- First_name End -->




							<!-- Last_name Start -->

							<div class="form-group">

								<label for="last_name" class="col-sm-3 control-label"> Apellido </label>

								<div class="col-sm-4">

									<input type="text" class="form-control" id="last_name" name="last_name" value="<?php echo set_value("last_name"); ?>">

								</div>

								<div class="col-sm-5">



									<?php echo form_error("last_name", "<span class='label label-danger'>", "</span>") ?>

								</div>

							</div>

							<!-- Last_name End -->




							<!-- Company Start -->

							<div class="form-group">

								<label for="company" class="col-sm-3 control-label"> Compañia </label>

								<div class="col-sm-4">

									<input type="text" class="form-control" id="company" name="company" value="<?php echo set_value("company"); ?>">

								</div>

								<div class="col-sm-5">



									<?php echo form_error("company", "<span class='label label-danger'>", "</span>") ?>

								</div>

							</div>

							<!-- Company End -->











							<!-- Phone Start -->

							<div class="form-group">

								<label for="phone" class="col-sm-3 control-label"> Telefono </label>

								<div class="col-sm-4">

									<input type="text" class="form-control" id="phone" name="phone" value="<?php echo set_value("phone"); ?>">

								</div>

								<div class="col-sm-5">



									<?php echo form_error("phone", "<span class='label label-danger'>", "</span>") ?>

								</div>

							</div>

							<!-- Phone End -->







							<div class="form-group">

								<div class="col-sm-3">

								</div>

								<div class="col-sm-6">

									<button type="reset" class="btn btn-default ">Limpiar</button>

									<button type="submit" class="btn btn-info ">Guardar</button>

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