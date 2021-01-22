<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de quejas y sugerencias | Login</title>
    <link href="<?php echo $this->config->item('accet_url') ?>css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo $this->config->item('accet_url') ?>font-awesome/css/font-awesome.css" rel="stylesheet">
    <link href="<?php echo $this->config->item('accet_url') ?>css/animate.css" rel="stylesheet">
    <link href="<?php echo $this->config->item('accet_url') ?>css/style.css" rel="stylesheet">
</head>

<body class="gray-bg white-bg">


    <div class="col-sm-12 full-height vcenter">

        <div class="col-sm-3">
        </div>
        <div class="col-sm-6 text-center ">
            <h1><b>
                    <script language="JavaScript1.2">
                        var message = "Sistema de quejas y sugerencias"
                        var neonbasecolor = "black"
                        var neontextcolor = "gray"
                        //var flashspeed = 0  //in milliseconds
                        ///No need to edit below this line/////
                        var n = 0
                        if (document.all || document.getElementById) {
                            document.write('<font color="' + neonbasecolor + '">')
                            for (m = 0; m < message.length; m++)
                                document.write('<span id="neonlight' + m + '">' + message.charAt(m) + '</span>')
                            document.write('</font>')
                        } else
                            document.write(message)

                        function crossref(number) {
                            var crossobj = document.all ? eval("document.all.neonlight" + number) : document.getElementById("neonlight" + number)
                            return crossobj
                        }

                        function neon() {
                            //Change all letters to base color
                            if (n == 0) {
                                for (m = 0; m < message.length; m++)
                                    //eval("document.all.neonlight"+m).style.color=neonbasecolor
                                    crossref(m).style.color = neonbasecolor
                            }
                            //cycle through and change individual letters to neon color
                            crossref(n).style.color = neontextcolor
                            if (n < message.length - 1)
                                n++
                            else {
                                n = 0
                                clearInterval(flashing)
                                setTimeout("beginneon()", 1500)
                                return
                            }
                        }

                        function beginneon() {
                            if (document.all || document.getElementById)
                                flashing = setInterval("neon()", flashspeed)
                        }

                        beginneon()
                    </script>
                </b></h1>
        </div>
        <div class="col-sm-3">
        </div>
        <div class="col-sm-4">
        </div>
        <div class="col-sm-4">

            <?php if ($this->session->flashdata('message')) : ?>

                <div class="alert alert-success">
                    <button type="button" class="close" data-close="alert"></button>
                    <?php echo $this->session->flashdata('message'); ?>
                </div>

            <?php endif; ?>
            <form action="" method="post">
                <input type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>" value="<?php echo $this->security->get_csrf_hash(); ?>">

                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Usuario" value="<?php echo set_value('identity'); ?>" name='identity' id='identity' required="">
                    <?php echo form_error('identity', '<span class="err-msg">', '</span>') ?>
                </div>

                <div class="form-group">
                    <input type="password" class="form-control" placeholder="Contaseña" name='password' value="<?php echo set_value('password'); ?>" required="">
                    <?php echo form_error('password', '<span class="err-msg">', '</span>') ?>
                </div>

                <button type="submit" class="btn btn-primary block full-width m-b">Iniciar Sesión</button>
                <!-- <div>if not registered please <a href="<?php echo base_url() ?>register">click here</a> for registration</div> -->
            </form>
        </div>
        <div class="col-sm-4">
        </div>
    </div>
    <!-- Mainly scripts -->
    <script src="<?php echo $this->config->item('accet_url') ?>js/jquery-2.1.1.js"></script>
    <script src="<?php echo $this->config->item('accet_url') ?>js/bootstrap.min.js"></script>
</body>

</html>