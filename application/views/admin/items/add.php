<?php $this->load->view('header'); ?>
<!--  BO :heading -->
<div class="row wrapper border-bottom white-bg page-heading">
  <div class="col-sm-4">
    <h2>Items</h2>
    <ol class="breadcrumb">
      <li>
        <a href="<?php echo base_url().'admin/'?>">Dashboard</a>
      </li>
      <li class="active">
        <strong>Items</strong>
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
      <div class="ibox-title" >
        <h5>Add <small></small></h5>
        <div class="ibox-tools">                           
        </div>
      </div>
      <!-- ............................................................. -->
      <!-- BO : content  -->
      <div class="col-sm-12 white-bg ">
        <div class="box box-info">
          <div class="box-header with-border">
            <h3 class="box-title">  </h3>
          </div>
          <!-- /.box-header -->
          <!-- form start -->
          <form action="" id="" class="form-horizontal " method="post" enctype="multipart/form-data">
          <input type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>" value="<?php echo $this->security->get_csrf_hash(); ?>">
            <div class="box-body">
              <?php if($this->session->flashdata('message')): ?>
              <div class="alert alert-success">
                <button type="button" class="close" data-close="alert"></button>
                <?php echo $this->session->flashdata('message'); ?>
              </div>
              <?php endif; ?> 
              





	<!-- Nombrecompleto Start -->

	<div class="form-group">

	  <label for="nombrecompleto" class="col-sm-3 control-label"> Nombrecompleto </label>

	  <div class="col-sm-4">

	    <input type="text" class="form-control" id="nombrecompleto" name="nombrecompleto" 

	    

	    value="<?php echo set_value("nombrecompleto"); ?>"

	    >

	  </div>

	  <div class="col-sm-5" >

	 

	    <?php echo form_error("nombrecompleto","<span class='label label-danger'>","</span>")?>

	  </div>

	</div> 

	<!-- Nombrecompleto End -->





	





	<!-- Telefono Start -->

	<div class="form-group">

	  <label for="telefono" class="col-sm-3 control-label"> Telefono </label>

	  <div class="col-sm-4">

	    <input type="text" class="form-control" id="telefono" name="telefono" 

	    

	    value="<?php echo set_value("telefono"); ?>"

	    >

	  </div>

	  <div class="col-sm-5" >

	 

	    <?php echo form_error("telefono","<span class='label label-danger'>","</span>")?>

	  </div>

	</div> 

	<!-- Telefono End -->





	





	<!-- Direccion Start -->

	<div class="form-group">

	  <label for="direccion" class="col-sm-3 control-label"> Direccion </label>

	  <div class="col-sm-4">

	    <input type="text" class="form-control" id="direccion" name="direccion" 

	    

	    value="<?php echo set_value("direccion"); ?>"

	    >

	  </div>

	  <div class="col-sm-5" >

	 

	    <?php echo form_error("direccion","<span class='label label-danger'>","</span>")?>

	  </div>

	</div> 

	<!-- Direccion End -->





	



 <!-- Tipo Start -->

 <div class="form-group">

          <label class="col-sm-3 control-label">Select Tipo</label>

          <div class="col-sm-4">

            <span style="margin-right:20px;"><input type="checkbox" style="width:20px; height:20px;" name="tipo[]" value="Pregunta"> Pregunta </span>

            <span style="margin-right:20px;"><input type="checkbox" style="width:20px; height:20px;" name="tipo[]" value="Reclamo"> Reclamo </span>

            <span style="margin-right:20px;"><input type="checkbox" style="width:20px; height:20px;" name="tipo[]" value="Felicitación"> Felicitación </span>

            <span style="margin-right:20px;"><input type="checkbox" style="width:20px; height:20px;" name="tipo[]" value="Duda"> Duda </span>

        </div>

    </div>

      <!-- Tipo End -->







				<!-- Mensaje Start -->

			<div class="form-group">

			  <label for="mensaje" class="col-sm-3 control-label"> Mensaje </label>

			  <div class="col-sm-4">

			    <textarea class="form-control" id="mensaje" name="mensaje"><?php echo set_value("mensaje"); ?></textarea>

			  </div>

			  <div class="col-sm-5" >

			 

			    <?php echo form_error("mensaje","<span class='label label-danger'>","</span>")?>

			  </div>

			</div> 

			<!-- Mensaje End -->



			



	<!-- Fueleido Start -->

	<div class="form-group">

        <label class="control-label col-md-3">Fueleido</label>

         <div class=" col-md-4 switch">

                    <div class="onoffswitch">

     <input type="checkbox" class="onoffswitch-checkbox" checked data-on-label="Yes" data-off-label="No"  name="fueleido" value="1" id="fueleido" <?php echo set_checkbox("fueleido","1")?>/>

    <?php echo form_error("fueleido","<span class=err-msg>,</span>")?>

                        <label class="onoffswitch-label" for="fueleido">

                            <span class="onoffswitch-switch"></span>

                            <span class="onoffswitch-inner"></span>

                            

                        </label>

                    </div>

                </div>

      </div>

      <!-- Fueleido End -->







	<!-- Creado_fecha Start -->

	<div class="form-group">

	  <label for="creado_fecha" class="col-sm-3 control-label"> Creado_fecha </label>

	  <div class="col-sm-4">

	    <input type="text" class="form-control datetimepicker" id="creado_fecha"  name="creado_fecha"/>

	  </div>

	  <div class="col-sm-5" >

	    <?php echo form_error("creado_fecha","<span class='label label-danger'>","</span>")?>

	  </div>

	</div>

	<!-- Creado_fecha End -->



	



	<!-- Departamento_id Start -->

	<div class="form-group">

        <label class="control-label col-md-3"> Departamento_id </label>

          <div class="col-md-4">

              <select class="form-control select2" name="departamento_id" id="departamento_id">

              <option value="">Select Departamento_id</option>

      <?php 

      if(isset($departamento) && !empty($departamento)):

      foreach($departamento as $key => $value): ?>

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
                <div class="col-sm-3" >                       
                </div>
                <div class="col-sm-6">
                  <button type="reset" class="btn btn-default ">Reset</button>
                  <button type="submit" class="btn btn-info ">Submit</button>
                </div>
                <div class="col-sm-3" >                       
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