<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title><?php $title = "";
                    echo $title; ?>
        </title>
        <meta name="description" content="An interactive platform for programmers">
        <meta name = "author" content="Ibeh Victor">
        <meta name = "viewport" content="width=device-width,initial-scale=1.0">
        <link href='http://fonts.googleapis.com/css?family=Open+Sans&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
        <link rel = "icon" type="image/png" href="<?php echo base_url(); ?> /assets/icons/download.png">
        <link href="<?php echo base_url('/assets/css/main.css'); ?>" type = "text/css" rel="stylesheet">
        <link rel="stylesheet" type =  "text/css" href="<?php echo base_url(); ?>/assets/css/bootstrap.min.css">
    </head>
    
    <!--creating the nav for the page-->
<nav class="navbar navbar-default">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="<?php echo base_url(); ?>home"><span class = "glyphicon glyphicon-align-justify"></span> Procoders</a>
        </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav">
            <li><a href="<?php echo base_url(); ?>login"> <i class="fa fa-sign-in fa-1x"></i> Login</a></li>
            <li><a href="<?php echo base_url(); ?>register"> <i class="fa fa-check-square fa-1x"></i> Register</a></li>
            <li><a href="<?php echo base_url(); ?>team"> <i class="fa fa-link fa-1x"></i>Team</a></li>
        </ul>
      <form class="navbar-form navbar-left">
        <div class="form-group">
            <input type="text" class="form-control input-xs" placeholder="Search" required>
        </div>
            <button type="submit" class="btn btn-default">
                <span class = "glyphicon glyphicon-search"></span>
            </button>
      </form>
      <ul class="nav navbar-nav navbar-right">
        <li>
            <?php
                        if($this->session->userdata('logged_in') == TRUE){
                            ?>  
                                <a href = "<?php echo base_url(); ?>dashboard">
                                     <i class="fa fa-bar-chart fa-1x"></i> Dashboard</a>
                            <?php
                        }else{
                            //do nothing or echo nothing rather;
                        }
                    ?>
        </li>
        <li>
            <?php
                        if($this->session->userdata('logged_in') == TRUE){
                            ?>  
                                <a href = "<?php echo base_url(); ?>Main/logout"> <i class="fa fa-power-off fa-1x"></i> Logout</a>
                            <?php
                        }else{
                            //do nothing or echo nothing rather;
                        }
                    ?>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
<body>