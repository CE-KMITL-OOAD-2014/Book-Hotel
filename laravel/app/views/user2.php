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
          <a class="navbar-brand" href="/">Book Hotel</a>
        </div>
        <div class="collapse navbar-collapse">
          
          <ul class="nav navbar-nav navbar-right">
            <li><a href="#"><?php echo Auth::user()->name ?></a></li>
            <li><a href="/signout" >LogOut</a> </li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </div>
    <!-- /Header -->
    <!-- Single button -->
    <div class="text-center">
      <div class="btn-group">
        <button type="button" class="btn btn-default dropdown-toggle btn-center" data-toggle="dropdown">
          ภาคกลาง <span class="caret"></span>
        </button>
        <ul class="dropdown-menu" role="menu">
          <li><a href="province/กรุงเทพมหานคร">กรุงเทพมหานคร</a></li>
          <li><a href="#">กำแพงเพชร</a></li>
          <li><a href="#">ชัยนาท</a></li>
        </ul>
      </div>
      <div class="btn-group">
        <button type="button" class="btn btn-default dropdown-toggle btn-center" data-toggle="dropdown">
          ภาคเหนือ <span class="caret"></span>
        </button>
        <ul class="dropdown-menu" role="menu">
          <li><a href="#">เชียงราย</a></li>
          <li><a href="#">เชียงใหม่</a></li>
          <li><a href="#">น่าน</a></li>
        </ul>
      </div>
      <div class="btn-group">
        <button type="button" class="btn btn-default dropdown-toggle btn-center" data-toggle="dropdown">
          ภาคใต้ <span class="caret"></span>
        </button>
        <ul class="dropdown-menu" role="menu">
          <li><a href="#">กระบี่</a></li>
          <li><a href="#">ชุมพร</a></li>
          <li><a href="#">ตรัง</a></li>
        </ul>
      </div>
      <div class="btn-group">
        <button type="button" class="btn btn-default dropdown-toggle btn-center" data-toggle="dropdown">
          ภาคตะวันออก <span class="caret"></span>
        </button>
        <ul class="dropdown-menu" role="menu">
          <li><a href="#">จันทบุรี</a></li>
          <li><a href="#">ชลบุรี</a></li>
          <li><a href="#">ตราด</a></li>
        </ul>
      </div>
      <div class="btn-group">
        <button type="button" class="btn btn-default dropdown-toggle btn-center" data-toggle="dropdown">
          ภาคตะวันตก <span class="caret"></span>
        </button>
        <ul class="dropdown-menu" role="menu">
          <li><a href="#">กาญจนบุรี</a></li>
          <li><a href="#">ตาก</a></li>
          <li><a href="#">ประจวบคีรีขันธ์</a></li>
        </ul>
      </div>
      <div class="btn-group">
        <button type="button" class="btn btn-default dropdown-toggle btn-center" data-toggle="dropdown">
          ภาคอีสาน <span class="caret"></span>
        </button>
        <ul class="dropdown-menu" role="menu">
          <li><a href="#">กาฬสินธุ์</a></li>
          <li><a href="#">ขอนแก่น</a></li>
          <li><a href="#">ชัยภูมิ</a></li>
        </ul>
      </div>
    </div>
    <div class="col-md-1 col-md-offset-1 well">
      <li class="nav-header"> <a href="#" data-toggle="collapse" data-target="#userMenu">
      </a>
      <ul class="list-unstyled collapse in" id="userMenu">
        <li class="active"> <a href="/"><i class="glyphicon glyphicon-home"></i> Home</a></li>
        <li><a href="history"><i class="glyphicon glyphicon-envelope"></i> History </a></li>
        <li><a href="editprofile"><i class="glyphicon glyphicon-cog"></i> Edit Profile</a></li>
        <li><a href="signout"><i class="glyphicon glyphicon-off"></i> Logout</a></li>
      </ul>
    </li>
  </div>

  
</div><!-- /.container -->
<div class="col-md-8 col-md-offset-3">
  <div class ="text-center">
    <div class="row-center">
      <div class="col-sm-3 col-md-3">
        <div class="thumbnail">
          <img src="img/20130226114733.jpg" alt="..."/>
          <div class="caption">
            <h3>อุทยานแห่งชาติดอยอินทนนท์</h3>
            <p>จ.เชียงใหม่</p>
            <p><a href="#" class="btn btn-primary" role="button">Button</a> <a href="#" class="btn btn-default" role="button">Button</a></p>
          </div>
        </div>
      </div>
    </div>

    <div class="row-center">
      <div class="col-sm-3 col-md-3">
        <div class="thumbnail">
          <img src="img/phukradung1.jpg" alt="...">
          <div class="caption">
            <h3>อุทยานแห่งชาติภูกระดึง</h3>
            <p>อ.ภูกระดึง จ.เลย</p>
            <p><a href="#" class="btn btn-primary" role="button">Button</a> <a href="#" class="btn btn-default" role="button">Button</a></p>
          </div>
        </div>
      </div>
    </div>
    <div class="row-center">
      <div class="col-sm-3 col-md-3">
        <div class="thumbnail">
          <img src="img/PhuRua-1024x575.jpg" alt="...">
          <div class="caption">
            <h3>ทุ่งบัวตองดอยแม่อูคอ</h3>
            <p>ดอยแม่เหาะ จ.แม่ฮ่องสอน</p>
            <p><a href="#" class="btn btn-primary" role="button">Button</a> <a href="#" class="btn btn-default" role="button">Button</a></p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- script references -->
<script src="js/jquery-2.1.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>