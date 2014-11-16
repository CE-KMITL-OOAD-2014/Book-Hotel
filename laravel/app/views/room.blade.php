<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="content-type" content="text/html; charset=UTF-8">
  <meta charset="utf-8">
  <title>Navbar Static top Template</title>
  <meta name="generator" content="Bootply" />
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  <link href="css/bootstrap.min.css" rel="stylesheet">
		<!--[if lt IE 9]>
			<script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
      <![endif]-->

      <link href="css/styles.css" rel="stylesheet">
      <style type="text/css">
      body {
        color: white;
        background : url(img/test.jpg) ;
      }
      </style>
    </head>
    <body>
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
              <li><a href="/userdetail"><?php echo Auth::user()->name ?></a></li>
              <li><a href="/signout" >LogOut</a> </li>
            </ul>
          </div><!--/.nav-collapse -->
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
   <div class="col-md-15 col-md-offset-4">		
    <div class="container">
      <div class="col-md-12">
        <div class="container">
          <div class="menu row">
            <div class="product col-sm-6">
              <img style = class="img-responsive" src = {{"/roomPicture/".$Room->path}} class="img-rounded" width="400" height="350" border="1">
              <hr>
              <h2><?php echo $Room->name;?></h2>
              <hr>
              <h3>ROOM FEATURES</h3>
              <p><?php echo $Room->roomDetail; ?></p>
              <hr>
              <h2 class="text-right"><?php echo $Room->price ; ?>$ /Day</h2> 
              <form action="bookroom" method = "post">
                <input type="hidden" name="roomID" value= "<?php echo $Room->id ?>" >
                Date:
                <input type="date" name="bday">
                จำนวนวัน(ระหว่าง 1 ถึง 7):
                <input type="number" name="quantity" min="1" max="7">
                <?php
                $hotel = Hotel::find($Room->hotelid);
                $hotelemail = $hotel->email;
                ?>
                <input type="hidden" name="hotelemail" value = <?php echo $hotelemail?>>
                <input type="submit" value="จองโรงแรม">
              </form>

              <hr>

            </div>
          </div>
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