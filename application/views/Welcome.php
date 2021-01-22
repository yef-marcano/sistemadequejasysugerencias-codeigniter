<?php $this->load->view('header'); ?>
<!-- content -->


<?php if (!empty($value->id)) {
    echo $count;
    $count++;
} ?>

<div class="row wrapper border-bottom white-bg page-heading">
    <div class="col-sm-4">
        <h2>Inicio</h2>
    </div>
    <div class="col-sm-8">
        <div class="title-action">
            <!-- <a href="" class="btn btn-primary">This is action area</a> -->
        </div>
    </div>


    <!-- Arreglo de datos Dinanzas-->


    <?php

    $query = $this->db->query('SELECT id from items where departamento_id = 1');

    $finanzas = $query->num_rows();

    ?>

    <!-- Arreglo de datos Legal-->


    <?php

    $query = $this->db->query('SELECT id from items where departamento_id = 2');

    //cuenta
    $legal = $query->num_rows();

    ?>

    <!-- Arreglo de datos Marketing-->


    <?php


    $query = $this->db->query('SELECT id from items where departamento_id = 3');

    //cuenta
    $marketing = $query->num_rows();


    ?>


    <!-- Arreglo de datos desarrollo-->


    <?php
    $query = $this->db->query('SELECT id from items where departamento_id = 4');

    //cuenta
    $desarrollo = $query->num_rows();

    ?>




</div>


<div class="wrapper wrapper-content">
    <div class="row">
        <div class="row">
            <div class="wrapper wrapper-content animated fadeInRight">
                <div class="ibox ">

                    <!--<div class="ibox-title">
            <br clear="all">
            <span class="m-r-sm text-muted welcome-message"> <h1> Bienvenido <?php $user = $this->ion_auth->user()->row();
                                                                                echo $user->first_name; ?> </h1></span>


<?php




?>
<br clear="all">
            </div>
            </div>-->



                        <!-- Graficas Futuras -->
                    <!-- <div class="row">

                        <div class="col-lg-3">
                            <div class="ibox ">
                                <div class="ibox-title">
                                    <span class="label label-success float-right">Monthly</span>
                                    <h5>Finanzas</h5>
                                </div>
                                <div class="ibox-content">
                                    <h1 class="no-margins"><?php echo $finanzas; ?></h1>
                                    <div class="stat-percent font-bold text-success">98% <i class="fa fa-bolt"></i></div>
                                    <small>Total</small>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="ibox ">
                                <div class="ibox-title">
                                    <span class="label label-info float-right">Annual</span>
                                    <h5>Legal</h5>
                                </div>
                                <div class="ibox-content">
                                    <h1 class="no-margins"><?php echo $legal; ?></h1>
                                    <div class="stat-percent font-bold text-info">20% <i class="fa fa-bolt"></i></div>
                                    <small>Total</small>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="ibox ">
                                <div class="ibox-title">
                                    <span class="label label-primary float-right">Today</span>
                                    <h5>Marketing</h5>
                                </div>
                                <div class="ibox-content">
                                    <h1 class="no-margins"><?php echo $marketing; ?></h1>
                                    <div class="stat-percent font-bold text-navy">44% <i class="fa fa-bolt"></i></div>
                                    <small>Total</small>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="ibox ">
                                <div class="ibox-title">
                                    <span class="label label-danger float-right">Low value</span>
                                    <h5>Total</h5>
                                </div>
                                <div class="ibox-content">
                                    <h1 class="no-margins"><?php echo $desarrollo; ?></h1>
                                    <div class="stat-percent font-bold text-danger">38% <i class="fa fa-bolt"></i></div>
                                    <small>Total</small>
                                </div>
                            </div>
                        </div>
                    </div> -->

                    <!-- FIN Graficas Futuras -->




                </div>
            </div>
            <!-- close main row -->
        </div>
    </div>

    <!-- content -->
    <?php $this->load->view('footer'); ?>