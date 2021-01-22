<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title> Sistema de quejas y sugerencias </title>
  <link href="<?php echo $this->config->item('accet_url') ?>css/plugins/select2/select2.min.css" rel="stylesheet">
  <script src="<?php echo $this->config->item('accet_url') ?>js/jquery-2.1.1.min.js"></script>
  <script src="<?php echo $this->config->item('accet_url') ?>js/plugins/slimscroll/jquery.slimscroll.min.js"></script>
  <script src="<?php echo $this->config->item('accet_url') ?>js/app.js"></script>
  <script src="<?php echo $this->config->item('accet_url') ?>js/plugins/pace/pace.min.js"></script>
  <link href="<?php echo $this->config->item('accet_url') ?>css/plugins/chosen/chosen.css" rel="stylesheet">
  <link href="<?php echo $this->config->item('accet_url') ?>css/bootstrap.min.css" rel="stylesheet">
  <link href="<?php echo $this->config->item('accet_url') ?>font-awesome/css/font-awesome.css" rel="stylesheet">
  <!-- Toastr style -->
  <link href="<?php echo $this->config->item('accet_url') ?>css/plugins/toastr/toastr.min.css" rel="stylesheet">
  <!-- Gritter -->
  <link href="<?php echo $this->config->item('accet_url') ?>js/plugins/gritter/jquery.gritter.css" rel="stylesheet">
  <link href="<?php echo $this->config->item('accet_url') ?>css/animate.css" rel="stylesheet">
  <link href="<?php echo $this->config->item('accet_url') ?>css/style.css" rel="stylesheet">
  <link href="<?php echo $this->config->item('accet_url') ?>css/plugins/dataTables/datatables.min.css" rel="stylesheet">
  <!-- Date Picker-->
  <link href="<?php echo base_url() ?>accets/datepicker/datepicker.css" rel="stylesheet">
  <script src="<?php echo base_url() ?>accets/datepicker/bootstrap-datepicker.js"></script>
  <link href="<?php echo $this->config->item('accet_url') ?>css/plugins/clockpicker/clockpicker.css" rel="stylesheet">
  <script src="<?php echo $this->config->item('accet_url') ?>js/recordDel.js"></script>
  <link href="<?php echo $this->config->item('accet_url') ?>css/bootstrap-datetimepicker.css" rel="stylesheet">

</head>

<!--  BO :heading -->


<!--  EO :heading -->

<div class="row">

  <div class="wrapper wrapper-content animated fadeInRight">

    <div class="ibox ">


        <div class="ibox-tools">
        <h1 class="text-center  ">Realiza tu quejas y/o sugerencias</h1>
        </div>

      <!-- ............................................................. -->

      <!-- BO : content  -->

      <div class="col-sm-12 white-bg ">

        <div class="box box-info">

          <div class="box-header with-border">

            <h3 class="box-title"></h3>

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





              <!-- Nombrecompleto Start -->

              <div class="form-group">

                <div class="col-sm-1">

                </div>
                <label for="nombrecompleto" class="col-sm-3 control-label"> Nombre </label>

                <div class="col-sm-4">

                  <input type="text" class="form-control" id="nombrecompleto" name="nombrecompleto" value="<?php echo set_value("nombrecompleto"); ?>">

                </div>

                <div class="col-sm-5">



                  <?php echo form_error("nombrecompleto", "<span class='label label-danger'>", "</span>") ?>

                </div>

              </div>

              <!-- Nombrecompleto End -->

              <!-- Telefono Start -->

              <div class="form-group">
                <div class="col-sm-1">

                </div>

                <label for="telefono" class="col-sm-3 control-label"> Telefono </label>

                <div class="col-sm-4">

                  <input type="text" class="form-control" id="telefono" name="telefono" value="<?php echo set_value("telefono"); ?>">

                </div>

                <div class="col-sm-5">



                  <?php echo form_error("telefono", "<span class='label label-danger'>", "</span>") ?>

                </div>

              </div>

              <!-- Telefono End -->











              <!-- Direccion Start -->

              <div class="form-group">
                <div class="col-sm-1">

                </div>

                <label for="direccion" class="col-sm-3 control-label"> Direccion </label>

                <div class="col-sm-4">

                  <input type="text" class="form-control" id="direccion" name="direccion" value="<?php echo set_value("direccion"); ?>">

                </div>

                <div class="col-sm-5">



                  <?php echo form_error("direccion", "<span class='label label-danger'>", "</span>") ?>

                </div>

              </div>

              <!-- Direccion End -->









              <!-- Tipo Start -->

              <div class="form-group">
                <div class="col-sm-1">

                </div>

                <label class="col-sm-3 control-label">Select Tipo</label>

                <div class="col-sm-4">

                  <span style="margin-right:20px;"><input type="radio" style="width:20px; height:20px;" name="tipo" value="Pregunta"> Pregunta </span>

                  <span style="margin-right:20px;"><input type="radio" style="width:20px; height:20px;" name="tipo" value="Reclamo"> Reclamo </span>

                  <span style="margin-right:20px;"><input type="radio" style="width:20px; height:20px;" name="tipo" value="Felicitación"> Felicitación </span>

                  <span style="margin-right:20px;"><input type="radio" style="width:20px; height:20px;" name="tipo" value="Duda"> Duda </span>

                </div>

              </div>

              <!-- Tipo End -->







              <!-- Mensaje Start -->

              <div class="form-group">
                <div class="col-sm-1">

                </div>

                <label for="mensaje" class="col-sm-3 control-label"> Mensaje </label>

                <div class="col-sm-4">

                  <textarea class="form-control" id="mensaje" name="mensaje"><?php echo set_value("mensaje"); ?></textarea>

                </div>

                <div class="col-sm-5">



                  <?php echo form_error("mensaje", "<span class='label label-danger'>", "</span>") ?>

                </div>

              </div>

              <!-- Mensaje End -->







              <!-- Creado_fecha Start -->

              <div class="form-group">
                <div class="col-sm-1">

                </div>

                <label for="creado_fecha" class="col-sm-3 control-label"> Fecha </label>

                <div class="col-sm-4">

                  <input type="text" class="form-control span2 datepicker" id="creado_fecha" name="creado_fecha" value="<?php echo date("d-m-Y H:i:s");    ?>" disabled />

                </div>

                <div class="col-sm-5">

                  <?php echo form_error("creado_fecha", "<span class='label label-danger'>", "</span>") ?>

                </div>

              </div>

              <!-- Creado_fecha End -->







              <!-- Departamento_id Start -->

              <div class="form-group">
                <div class="col-sm-1">

                </div>

                <label class="control-label col-md-3"> Departamento </label>

                <div class="col-md-4">

                  <select class="form-control select2" name="departamento_id" id="departamento_id">

                    <option value="">Seleccione el Departamento</option>

                    <?php

                    if (isset($departamento) && !empty($departamento)) :

                      foreach ($departamento as $key => $value) : ?>

                        <option value="<?php echo $value->id; ?>">

                          <?php echo $value->nombre; ?>

                        </option>

                      <?php endforeach; ?>

                    <?php endif; ?>

                  </select>

                </div>

              </div>

              <!-- Departamento_id End -->





              <div class="form-group">
                <div class="col-sm-1">

                </div>

                <div class="col-sm-3">

                </div>

                <div class="col-sm-6">

                  <button type="reset" class="btn btn-default ">Limpiar</button>

                  <button type="submit" class="btn btn-info ">Enviar</button>

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

<div class="footer">
  <div class="pull-right">
  </div>
  <div>
    <strong>Copyright</strong> <a href="https://yefersonmarcano.com" target="_blank" >yefersonmarcano.com</a>
  </div>
</div>
</div>
</div>
<!-- Mainly scripts -->
<script src="<?php echo $this->config->item('accet_url') ?>js/bootstrap.min.js"></script>
<script src="<?php echo $this->config->item('accet_url') ?>js/plugins/datepicker/bootstrap-datepicker.js"></script>
<script src="<?php echo $this->config->item('accet_url') ?>/js/plugins/cropper/cropper.min.js"></script>
<script src="<?php echo $this->config->item('accet_url') ?>js/plugins/metisMenu/jquery.metisMenu.js"></script>
<script src="<?php echo $this->config->item('accet_url') ?>js/plugins/jeditable/jquery.jeditable.js"></script>
<script src="<?php echo $this->config->item('accet_url') ?>js/plugins/dataTables/datatables.min.js"></script>
<!-- Custom and plugin javascript -->
<script type="text/javascript">
  $(function() {
    var navMain = $("#nav-main");
    navMain.on("click", "a", null, function() {
      navMain.collapse('hide');
    });
  });
</script>
<script src="<?php echo $this->config->item('accet_url') ?>js/plugins/chosen/chosen.jquery.js"></script>
<script type="text/javascript">
  $(".chosen-select").chosen();
</script>
<script src="<?php echo $this->config->item('accet_url') ?>js/plugins/select2/select2.full.min.js"></script>
<script type="text/javascript">
  $(".select2").select2();
</script>
<script type="text/javascript">
  $(function() {
    window.prettyPrint && prettyPrint();
    $('.datepicker').datepicker({
      format: 'dd-mm-yyyy'
    });
  });
</script>
<script src="<?php echo $this->config->item('accet_url') ?>js/plugins/clockpicker/clockpicker.js"></script>
<script type="text/javascript">
  $('.clockpicker').clockpicker();
</script>
<script src="<?php echo $this->config->item('accet_url') ?>css/plugins/moment-develop/min/moment-with-locales.js"></script>
<script src="<?php echo $this->config->item('accet_url') ?>js/bootstrap-datetimepicker.js"></script>
<script type="text/javascript">
  $(function() {
    $(".datetimepicker").datetimepicker({
      format: 'DD-MM-YYYY HH:mm:ss'
    });
  });
</script>
</body>

</html>