<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title><?php echo $title;?></title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- Le styles -->
        <link href="<?php echo base_url(); ?>css/bootstrap.css" rel="stylesheet">
        <link href="<?php echo base_url(); ?>css/bootstrap-responsive.css" rel="stylesheet">
        <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
        <!--[if lt IE 9]>
        <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
        <!--[if IE 7]>
        <link rel="stylesheet" href="css/font-awesome-ie7.min.css">
        <![endif]-->
        <link rel="stylesheet" href="<?php echo base_url(); ?>css/font-awesome.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>css/select2.css">
        <link href="<?php echo base_url(); ?>css/custom.css" rel="stylesheet">
        <script src="<?php echo base_url(); ?>js/jquery-1.8.3.min.js"></script>
        <script src="<?php echo base_url(); ?>js/bootstrap.js"></script>
        <script src="<?php echo base_url(); ?>js/select2.js"></script>
        
        <script src="<?php echo base_url(); ?>js/jquery-bootalert.js"></script>
        <script src="<?php echo base_url(); ?>js/custom.js"></script>
        
        <!-- Tablesorter: required for bootstrap -->
        <link rel="stylesheet" href="<?php echo base_url(); ?>css/theme.bootstrap.css">
        <script src="<?php echo base_url(); ?>js/jquery.tablesorter.js"></script>
        <script src="<?php echo base_url(); ?>js/jquery.tablesorter.widgets.js"></script>

    <!-- Tablesorter: optional -->
        <link rel="stylesheet" href="<?php echo base_url(); ?>css/jquery.tablesorter.pager.css">
        <script src="<?php echo base_url(); ?>js/jquery.tablesorter.pager.js"></script>
        <script src="<?php echo base_url(); ?>js/tablesorter.js"></script>
        <script src="<?php echo base_url(); ?>js/bootbox.js"></script>

    </head>
    <body>
        <div class="wrapper">

            <div class="header">

                <div class="container">
                    <div class="row">


                        <div class="span12">

                            <div class="pull-left">
                                <div class="logo">
                                    <img src="<?php echo base_url(); ?>img/logo1.png">
                                </div>
                            </div>

                        </div>

                    </div>
                    
                   
                </div>

            </div>

            <div class="navbar navbar-inverse">
                <div class="navbar-inner noborder">
                    <div class="container margin80left">
                        <div class="row">
                            <div class="span12">
                                <ul class="nav">

                                    <li>
                                        <a href="<?php echo base_url(); ?>index.php">Home</a>
                                    </li>
                                   
                                   <?php if(isset($clienthash)) :?>
                                    <li>
                                        <a href="<?php echo base_url(); ?>index.php/index/mytickets">My Tickets</a>
                                    </li>
                                    <?php endif; ?>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container">
