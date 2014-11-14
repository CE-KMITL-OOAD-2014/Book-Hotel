<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="content-type" content="text/html; charset=UTF-8">
  <meta charset="utf-8">
  <title>Navbar Static top Template</title>
  <meta name="generator" content="Bootply" />
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  <link href="/css/bootstrap.min.css" rel="stylesheet">
		<!--[if lt IE 9]>
			<script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
      <![endif]-->

      <link href="/css/styles.css" rel="stylesheet">
      <style type="text/css">
      body {
        color: white;
        background : url(/img/test.jpg) ;
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
            <li><a href="#">User</a></li>
            <li><a href="#">ออกจากระบบ</a> </li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </div>
    <!-- Single button -->
    <div class="text-center">
      <div class="btn-group">
        <button type="button" class="btn btn-default dropdown-toggle btn-center" data-toggle="dropdown">
          ภาคกลาง <span class="caret"></span>
        </button>
        <ul class="dropdown-menu" role="menu">
          <li><a href="#">กรุงเทพมหานคร</a></li>
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
    <!-- /Header -->
    <div class="col-md-4 col-md-offset-1">
      <li class="nav-header"> <a href="#" data-toggle="collapse" data-target="#userMenu">
      </a>
      <ul class="list-unstyled collapse in" id="userMenu">
        <li class="active"> <a href="#"><i class="glyphicon glyphicon-home"></i> หน้าหลัก</a></li>
        <li><a href="#"><i class="glyphicon glyphicon-envelope"></i> ประวัติการจอง <span class="badge badge-info">4</span></a></li>
        <li><a href="#"><i class="glyphicon glyphicon-cog"></i> ข้อมูลผู้ใช้</a></li>
        <li><a href="#"><i class="glyphicon glyphicon-comment"></i>ความคิดเห็น</a></li>
        <li><a href="#"><i class="glyphicon glyphicon-off"></i> ออกจากระบบ</a></li>
      </ul>
      </li
    </div>


  </div><!-- /.container -->
  <FONT COLOR = White><H1>โรงแรม มารวย
  </H1></FONT>
  <div class="col-md-10 col-md-offset-4">
   <img src = " img/รูปมารวย.jpg" width="400" height="350" border="1">
 </div>

 <div class="col-md-10 col-md-offset-5">
   <H3><li><a href="standard_room_มารวย_ไทย"><FONT COLOR = White>Standard Room<FONT COLOR = White></a></li></H3>
   <H3><li><a href="#"><FONT COLOR = White>Superior Suite<FONT COLOR = White></a></li></H3>
   <H3><li><a href="#"><FONT COLOR = White>Deluxe Suite<FONT COLOR = White></a></li></H3>
  <?php
  $hotelid = $_GET["ID"];
  $room = Room::where('hotelid','like',$hotelid)->get();
  for($i =0;$i<count($room);$i++){
    $roomname = $room[$i]->name;
    //$idhotel = $room[$i]->id;
    echo "<br><a href='$roomname'><FONT COLOR = White>";
    echo "<p align=\"center\">$roomname</p>";
    echo "<FONT COLOR = White></a>";
    // echo "\n";
  }
  ?>

 </div>

 <!-- script references -->
 <script src="js/jquery-2.1.1.min.js"></script>
 <script src="js/bootstrap.min.js"></script>
</body>
</html>
