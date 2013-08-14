<?php if ($this->session->userdata('logged_in')){
    $auth_state = "Logout";
    $auth_controller = 'logout';
  } else {
    $auth_state = "Login";
     $auth_controller = 'login';
  }
  $active = current_url();
  ?>
<!DOCTYPE html>
<html>
  <head>
    <title>Project Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="<?php echo base_url(); ?>css/bootstrap.min.css" rel="stylesheet" media="screen">
    <link href="<?php echo base_url(); ?>css/bootstrap-glyphicons.css" rel="stylesheet" media="screen">
    <link href="<?php echo base_url(); ?>css/custom.css" rel="stylesheet" media="screen">
  </head>
  <body>
  
 <div class="navbar">
     <div class="container">
     <button type="button" data-toggle="collapse" data-target=".navbar-responsive-collapse" class="navbar-toggle collapsed">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
      </button>
  <a class="navbar-brand" href="<?php 
          if($auth_state === "Logout"){
            echo base_url().'search';
          } else {
            echo base_url();
          }
          ?>">Project Title</a>
          <div style="height: 0px;" class="nav-collapse navbar-responsive-collapse collapse">
          <ul class="nav navbar-nav">
    <li class="<?php if($active == base_url().'search'){
        echo 'active';
      }?>"><a href="<?php echo base_url() . 'search'; ?>">Search</a></li>
  </ul>
     <ul class="nav navbar-nav pull-right">
              <?php if($this->session->userdata('logged_in')){ ?>
                    <li class="<?php if($active == base_url().'admin'){echo 'active';} ?>">
                    <a href="<?php echo base_url().'admin' ?>">Adminstrator Dashboard</a>
                    </li>
              <?php } ?>
            <li class="<?php if($active == base_url().'login'){
                  echo 'active';
            }?>"><a href="<?php echo base_url().$auth_controller;?>"><?php echo $auth_state; ?></a></li>
  </ul>
  </div>
  </div>
</div>



<div class="container">
    <div class="row">   
      <div class="content col-12"> 
