<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Knox and Carter</title>


    <link rel="stylesheet" href= 'https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css'>
    <link href='https://fonts.googleapis.com/css?family=Josefin+Sans:300,400,700' rel='stylesheet' type='text/css'>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <?php wp_head(); ?> 
  </head>
 <body>
      <!-- NavBar -->
    <nav class="navbar navbar-default navbar-fixed-top" data-spy="affix" data-offset-top="120">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="<?php echo home_url(); ?>"><img class= "logo" src="<?php bloginfo('template_directory');?>/imgs/k_and_c_fixed.png"></a>
    </div>
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav navbar-right">
             <?php
                $defaults = array(
                    'container' => 'ul',
                    'theme_location' => 'primary-menu',
                    'menu_class' => 'nav navbar-nav navbar-right'

                     );
                       
                wp_nav_menu ($defaults);
              ?>
      </ul>
    </div>
  </div>
</nav>