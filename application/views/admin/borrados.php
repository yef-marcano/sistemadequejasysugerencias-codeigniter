
                <!-- BO : Prestadores -->
                <?php if ($this->ion_auth->in_group($groupadmin)){ ?>

                <li <?php if($contr == 'prestadores'){?>class="active "<?php } ?>  >

                    <a href="javascript:;"><i class="fa fa-user"></i><span class="title">Prestadores</span>

                        <?php if($contr == 'prestadores'){?><span class="selected"></span><?php } ?>

                      <span class="arrow <?php if($contr == 'prestadores'){?>open<?php } ?>"></span>

                    </a>

                    <ul class="nav nav-second-level">

                      <li <?php if($contrnew == 'prestadores/add'){?>class="active "<?php } ?>>

                        <a href="<?php echo base_url()?>admin/prestadores/add"><i class="fa fa-angle-double-right">

                            </i>Agregar Prestadores</a>

                      </li>

                      <li <?php if($contrnew == 'prestadores/'){?>class="active"<?php } ?>>

                        <a href="<?php echo base_url()?>admin/prestadores/index"><i class="fa fa-gear"></i>Administrar Prestadores</a>

                      </li>                       

                    </ul>

                </li>
                <?php } ?>
                <!--  EO : Prestadores -->