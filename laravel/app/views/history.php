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
  <table class="table table-bordered" width="100%" style="background-color:rgba(255,255,255,0.9)">
    <thead>
      <tr>
        <th>Hotel Name</th>
        <th>Room Name</th>
        <th>Start Date</th>
        <th>End Date</th>
        <th>Cancel</th>
      </tr>
    </thead>
    <tbody>
       <?php
       $userid = Auth::user()->id;
       $books = Book::where('userid','like',$userid)->get();
       $size = count($books);
       for($i=0;$i<$size;$i++){
        $bookid = $books[$i]->id;
        $roomid = $books[$i]->roomid;
        $startdate = $books[$i]->start;
        $enddate = $books[$i]->end;
        $room = Room::find($roomid);
        $hotelid = $room->hotelid;
        $hotel = Hotel::find($hotelid);
        $hotelname = $hotel->name;
        $roomname = $room->name;
        echo "<tr><th>";
        echo "$hotelname";
        echo "</th>";

        echo "<th>";
        echo "$roomname";
        echo "</th>";

        echo "<th>";
        echo "$startdate";
        echo "</th>";

        echo "<th>";
        echo "$enddate";
        echo "</th>";

        echo "<th><form action=cancelRoom method=post>
        <Input type=hidden name=bookid value=$bookid>
        <input type=submit value=Cancel
        </th></tr>";
      }
      ?>
  </tbody>
</table>

<!-- script references -->
<script src="js/jquery-2.1.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>