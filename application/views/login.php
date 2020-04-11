<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title; ?></title>

        <!-- jquery --> 
        <script type="text/javascript" src="<?php echo base_url('assets/jquery/jquery.min.js')?>"></script>
  
  <!-- bootstrap js --> 
  <script type="text/javascript" src="<?php echo base_url('assets/bootstrap/js/bootstrap.min.js')?>"></script>
    <!--bootstrap -->
   <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css')?>">
    <!-- bootstrap theme -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/bootstrap/css/bootstrap-theme.min.css')?>">

    <!-- custom css -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('custom/css/custom.css')?>">



</head>
<body>
<div class="col-md-6 col-md-offset-3 vertical-off-4">
    <div class="panel panel-default login-form">
        <div class="panel-body">
            <form method="post" action="<?php echo base_url('users/login')?>" id="loginForm">
            <fieldset>
                <legend>
                    Login
                </legend>
                <div id="message"></div>
                <div class="form-group">
                    <label for="username">Username</label>
                    <input type="text" name="username" id="username" class="form-control" placeholder="Username" autofocus >
                </div>
                <div class="form-group">
                    <label for="username">Password</label>
                    <input type="password" name="password" id="password" class="form-control" placeholder="Password" autofocus >
                </div>
                <button type="submit" class="col-md-12 btn btn-primary login-button ">Submit</button>
            </fieldset>
            </form>
        </div>
    </div>
    
</div>

    <script type="text/javascript" src="<?php echo base_url('custom/js/login.js')?>"></script>
</body>
</html>