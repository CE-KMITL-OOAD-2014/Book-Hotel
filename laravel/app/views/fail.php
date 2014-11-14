<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <title>Bootstrap Login Form</title>
    <meta name="generator" content="Bootply" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link href="/css/bootstrap.min.css" rel="stylesheet">
    <!--[if lt IE 9]>
      <script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    <link href="css/styles.css" rel="stylesheet">
    <style type="text/css">
      body {
        color: purple;
        background : url(img/test.jpg) ;
        }
    </style>
  </head>
	<body>
	<!-- Header -->
<div class="navbar navbar-default navbar-static-top navbar-inverse">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">Book Hotel</a>
    </div>
    <div class="collapse navbar-collapse">
      
      <ul class="nav navbar-nav navbar-right">
	  	<li><a href="#">English</a></li>
		<li><a href="#">ภาษาไทย</a></li>
		<li><a href="#"><?php echo Auth::user()->name ?></a></li>
        <li><a href="/signout" >LogOut</a> </li>
      </ul>
    </div><!--/.nav-collapse -->
  </div>
</div>
<!-- /Header -->
<!-- Single button -->
<center><FONT COLOR = White><H1>Fail</H1></FONT>
<p><a class="btn btn-primary btn-lg" href="/" role="button">Return to Homepage</a></p></center>
	<!-- script references -->
		<script src="js/jquery-2.1.1.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
	</body>
</html>