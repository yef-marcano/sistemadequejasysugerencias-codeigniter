<!DOCTYPE html>
<html>

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

<body>
    <div id="wrapper">
        <nav class="navbar-default navbar-static-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav metismenu" id="side-menu">
                    <li class="skin-1 nav-header ">
                        <div class="dropdown profile-element">
                            <span>
                                <center>
                                    <h2>
                                        <b>
                                            <script language="JavaScript1.2">
                                                var message = " Sistema de quejas y sugerencias"
                                                var neonbasecolor = "white"
                                                var neontextcolor = "white"
                                                //var flashspeed = 150  //in milliseconds
                                                ///No need to edit below this line/////
                                                var n = 0
                                                if (document.all || document.getElementById) {
                                                    document.write('<font color="' + neonbasecolor + '">')
                                                    for (m = 0; m < message.length; m++)
                                                        document.write('<span id="neonlight' + m + '">' + message.charAt(m) + '</span>')
                                                    document.write('</font>')
                                                } else
                                                    document.write(message)

                                                function crossrefaa(number) {
                                                    var crossobj = document.all ? eval("document.all.neonlight" + number) : document.getElementById("neonlight" + number)
                                                    return crossobj
                                                }

                                                function neonaa() {
                                                    //Change all letters to base color
                                                    if (n == 0) {
                                                        for (m = 0; m < message.length; m++)
                                                            //eval("document.all.neonlight"+m).style.color=neonbasecolor
                                                            crossrefaa(m).style.color = neonbasecolor
                                                    }
                                                    //cycle through and change individual letters to neon color
                                                    crossrefaa(n).style.color = neontextcolor
                                                    if (n < message.length - 1)
                                                        n++
                                                    else {
                                                        n = 0
                                                        clearInterval(flashing)
                                                        setTimeout("beginneonaa();", 1500)
                                                        return
                                                    }
                                                }

                                                function beginneonaa() {
                                                    if (document.all || document.getElementById)
                                                        flashing = setInterval("neonaa();", flashspeed)
                                                }
                                                beginneonaa();
                                            </script>
                                            <script>
                                                function set_common_delete(id, table_name) {
                                                    $("#set_commondel_id").val(id);
                                                    $("#table_name").val(table_name);
                                                }

                                                function delete_return() {
                                                    del_id = $("#set_commondel_id").val();
                                                    table_name = $("#table_name").val();
                                                    $.ajax({
                                                        url: "<?php echo base_url(); ?>admin/" + table_name + "/delete/" + del_id,
                                                        data: "id=" + del_id + "&table_name=" + table_name + "&<?php echo $this->security->get_csrf_token_name(); ?>=" + '<?php echo $this->security->get_csrf_hash(); ?>',
                                                        type: "post",
                                                        success: function(result) {
                                                            if (result.trim() == "success") {
                                                                $('#commonDelete').modal('toggle');
                                                                $("#hide" + del_id).hide();
                                                            }
                                                        },
                                                        error: function(output) {}
                                                    });
                                                }
                                            </script>
                                        </b>
                                    </h2>
                                </center>
                            </span>
                            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                                <span class="clear">
                                    <span class="block m-t-xs">
                                        <strong class="font-bold">
                                            <!-- TRADE TEAMS -->
                                        </strong>
                                    </span>
                            </a>
                        </div>
                        <div class="logo-element">
                            SGD
                        </div>
                    </li>
                    <!-- BO : left nav  -->
                    <?php
                    $contr = $this->uri->segment(2);
                    $action = $this->uri->segment(3);
                    $actionNext = $this->uri->segment(4);
                    if (!empty($action)) {
                        $module = $contr . '/' . $action;
                        if (!empty($actionNext)) {
                            $module = $contr . '/' . $action . '/' . $actionNext;
                        }
                    } else {
                        $module = $contr;
                    }
                    $contrnew = $contr . '/' . $action;
                    ?>
                    <!-- BO : dashboard -->
                    <li <?php if ($contr == '') { ?>class="active " <?php } ?>>
                        <a href="<?php echo base_url() . 'admin' ?>"><i class="fa fa-home"></i><span class="title">Inicio</span>
                            <?php if ($module == '') { ?><span class="selected"></span><?php } ?>
                        </a>
                    </li>
                    <!-- EO : dashboard -->

                    <!-- BO : dashboard 
                <li  <?php if ($contr == 'create_user') { ?>class="active "<?php } ?>>
                    <a href="<?php echo base_url() . 'auth/create_user' ?>"><i class="fa fa-user"></i><span class="title">Crear Usuario</span>
                        <?php if ($module == '') { ?><span class="selected"></span><?php } ?>
                    </a>
                </li> -->




                    <!-- EO : permisos -->
                    <?php $groupadmin = array('superadministrador', 'administrador'); ?>

                    <!-- EO : permisos -->



                    <?php if ($this->ion_auth->in_group("superadministrador")) { ?>

                        <li <?php if ($contr == 'create_user') { ?>class="active " <?php } ?>>

                            <a href="javascript:;"><i class="fa fa-user-plus"></i><span class="title">Crear Usuario</span>

                                <?php if ($contr == 'create_user') { ?><span class="selected"></span><?php } ?>

                                <span class="arrow <?php if ($contr == 'create_user') { ?>open<?php } ?>"></span>

                            </a>

                            <ul class="nav nav-second-level">

                                <li <?php if ($contrnew == 'auth/create_user') { ?>class="active " <?php } ?>>

                                    <a href="<?php echo base_url() ?>auth/create_user"><i class="fa fa-angle-double-right">

                                        </i>Agregar Usuario</a>

                                </li>

                                <li <?php if ($contrnew == 'auth/index') { ?>class="active" <?php } ?>>

                                    <a href="<?php echo base_url() ?>auth/index"><i class="fa fa-gear"></i>Administrar Usuarios</a>

                                </li>

                            </ul>

                        </li>

                    <?php } ?>


                    <!-- EO : dashboard -->

                    <!-- BO : Items -->

                    <li <?php if ($contr == 'items') { ?>class="active " <?php } ?>>

                        <a href="<?php echo base_url() ?>admin/items/index"><i class="fa fa-envelope-o"></i><span class="title">Administrar Mensajes</span>

                            <?php if ($contr == 'items') { ?><span class="selected"></span><?php } ?>

                            <span class="arrow <?php if ($contr == 'items') { ?>open<?php } ?>"></span>

                        </a>

                        <!-- <ul class="nav nav-second-level">

                      <li <?php if ($contrnew == 'items/add') { ?>class="active "<?php } ?>>

                        <a href="<?php echo base_url() ?>admin/items/add"><i class="fa fa-angle-double-right">

                            </i>Add Items</a>

                      </li>

                      <li <?php if ($contrnew == 'items/') { ?>class="active"<?php } ?>>

                        <a href="<?php echo base_url() ?>admin/items/index"><i class="fa fa-gear"></i>Administrar Quejas/ Sugerencias</a>

                      </li>                       

                    </ul> -->

                    </li>

                    <!--  EO : Items -->


                    <!-- BO : Departamento -->

                    <li <?php if ($contr == 'departamento') { ?>class="active " <?php } ?>>

                        <a href="javascript:;"><i class="fa fa-users"></i><span class="title">Departamentos</span>

                            <?php if ($contr == 'departamento') { ?><span class="selected"></span><?php } ?>

                            <span class="arrow <?php if ($contr == 'departamento') { ?>open<?php } ?>"></span>

                        </a>

                        <ul class="nav nav-second-level">

                            <li <?php if ($contrnew == 'departamento/add') { ?>class="active " <?php } ?>>

                                <a href="<?php echo base_url() ?>admin/departamento/add"><i class="fa fa-angle-double-right">

                                    </i>Agregar Departamento</a>

                            </li>

                            <li <?php if ($contrnew == 'departamento/') { ?>class="active" <?php } ?>>

                                <a href="<?php echo base_url() ?>admin/departamento/index"><i class="fa fa-gear"></i>Administrar Departamento</a>

                            </li>

                        </ul>

                    </li>

                    <!--  EO : Departamento -->



                    <!--  @@@@@#####@@@@@ -->


                    <li <?php if ($contr == 'change_password') { ?>class="active " <?php } ?>>
                        <a href="<?php echo base_url() ?>auth/change_password"><i class="fa fa-key"></i><span class="title">Cambiar Contraseña</span>
                            <?php if ($contr == 'change_password') { ?><span class="selected"></span><?php } ?>
                            <span class="arrow <?php if ($contr == 'change_password') { ?>open<?php } ?>"></span>
                        </a>
                    </li>

                    <li><a data-toggle="modal" data-target="#commonClose"><i class="fa fa-power-off"></i><span class="title">Cerrar Sesión</span></a></li>
                </ul>
            </div>
        </nav>
        <div id="page-wrapper" class="gray-bg dashbard-1">
            <div class="row border-bottom">
                <nav class="navbar navbar-static-top" role="navigation" style="margin-bottom: 0">
                    <div class="navbar-header">
                        <a class="navbar-minimalize minimalize-styl-2 btn btn-primary " href="#"><i class="fa fa-bars"></i> </a>
                    </div>
                    <ul class="nav navbar-top-links navbar-right">
                        <li>
                            <span class="m-r-sm text-muted welcome-message">Bienvenido <?php $user = $this->ion_auth->user()->row();
                                                                                        echo $user->last_name;  ?> <?php echo $user->first_name; ?>

                            </span>
                        </li>
                        <li class="dropdown">
                            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                                <span class="clear">
                                    <span class="text-muted text-xs block">
                                        <img src="<?php echo $this->config->item('accet_url') ?>img/user.png" class="img-circle" alt="User Image" width="20px">
                                    </span>
                                </span>
                            </a>
                            <span>
                            </span>
                            <ul class="dropdown-menu animated fadeInRight m-t-xs">
                                <!-- <li><a href="<?php echo $this->config->item('left_url') ?>admin/profile/edit">Profile</a></li> -->
                                <li><a href="<?php echo $this->config->item('left_url') ?>password">Cambiar Contraseña</a></li>
                                <li class="divider"></li>
                                <li><a data-toggle="modal" data-target="#commonClose">Cerrar sesión</a></li>
                            </ul>
                        </li>
                    </ul>
                </nav>
            </div>
            <!-- Common Delete Popup  -->
            <div class="modal fade" id="commonDelete" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <form action="<?php echo base_url() ?>welcome/delete_notification/" method="post">
                    <input type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>" value="<?php echo $this->security->get_csrf_hash(); ?>">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                                <h4 class="modal-title" id="frm_title">Delete</h4>
                            </div>
                            <div class="modal-body" id="frm_body">
                                Do you really want to delete?
                                <input type="hidden" id="set_commondel_id">
                                <input type="hidden" id="table_name">
                            </div>
                            <div class="modal-footer">
                                <button style='margin-left:10px;' type="button" class="btn btn-primary col-sm-2 pull-right" id="frm_submit" onclick="delete_return();">Yes</button>
                                <button type="button" class="btn btn-danger col-sm-2 pull-right" data-dismiss="modal" id="frm_cancel">No</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <!-- ./ Common Delete Popup /. -->




            <!-- Cerrar Delete Popup  -->
            <div class="modal fade" id="commonClose" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <form action="<?php echo base_url() ?>welcome/delete_notification/" method="post">
                    <input type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>" value="<?php echo $this->security->get_csrf_hash(); ?>">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                                <h4 class="modal-title" id="frm_title">Cerrar Sesión</h4>
                            </div>
                            <div class="modal-body" id="frm_body">
                                Esta seguro desea cerrar sesión?
                                <input type="hidden" id="set_commondel_id">
                                <input type="hidden" id="table_name">
                            </div>
                            <div class="modal-footer">
                                <a href="<?php echo $this->config->item('left_url') ?>auth/logout">
                                    <button style='margin-left:10px;' type="button" class="btn btn-primary col-sm-2 pull-right" id="frm_submit">Si</button>
                                </a>
                                <button type="button" class="btn btn-danger col-sm-2 pull-right" data-dismiss="modal" id="frm_cancel">No</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <!-- ./ Common Delete Popup /. -->