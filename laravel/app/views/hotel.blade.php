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

			<!-- /Header -->
			<div class"row">
				<div class="col-md-1 col-md-offset-1 well">
					<li class="nav-header"> <a href="#" data-toggle="collapse" data-target="#userMenu">
					</a>
					<ul class="list-unstyled collapse in" id="userMenu">
						<li class="active"> <a href="/"><i class="glyphicon glyphicon-home"></i> Home</a></li>
						<li><a href="history"><i class="glyphicon glyphicon-envelope"></i> History</a></li>
						<li><a href="editprofile"><i class="glyphicon glyphicon-cog"></i> Edit Profile</a></li>
						<li><a href="signout"><i class="glyphicon glyphicon-off"></i> Logout</a></li>
					</ul>
				</li>
			</div>

			<!-- /.container -->
			<div class="col-md-offset-4"><FONT COLOR = White><H1><?php echo $Hotelname->name
								 // echo "<a href='/room?ID=$idhotel'><FONT COLOR = White>"
			?></H1></FONT></div>
			
			<div class="col-md-8 col-md-offset-4">
				<img style = class="img-responsive" src = {{"/hotelPicture/".$Hotelname->path}} class="img-rounded" width="400" height="350" border="1">
				<br>
				<br>
				<div class="col-md-offset-2">
					<?php

					echo "<b><u><h2>รายชื่อห้อง</h2></b></u>";
					for($i =0;$i<count($Roomarray);$i++){
						$roomname = $Roomarray[$i]->name;
						$roomid = $Roomarray[$i] ->id;
						echo "<br><a href='/room?ID=$roomid'><FONT COLOR = White>";
						echo "$roomname";
						echo "<FONT COLOR = White></a>";
     // echo "\n";
					}
					?>
				</div>
			</div>
<!-- 	<div class="col-md-10 col-md-offset-5">
	<H3><li><a href="#"><FONT COLOR = White>Standard Room<FONT COLOR = White></a></li></H3>
	<H3><li><a href="#"><FONT COLOR = White>Superior Suite<FONT COLOR = White></a></li></H3>
	<H3><li><a href="#"><FONT COLOR = White>Deluxe Suite<FONT COLOR = White></a></li></H3>

</div> -->
<div class="col-md-offset-1">

</div>
</div>
<div class="row">
	<div  class="col-md-8 col-md-offset-2">
		<ul class="nav nav-tabs">
			<li class="active"><a data-toggle="tab" href="#reviews">Comment</a></li>
			<?php
			$Opin = Opin::where('hotelid','like',$Hotelname->id)->get();
			$size = count($Opin);
			$totalstar=0;
			if($size ==0){
				$size = 1;
			}else{

				
				for($i=0;$i<$size;$i++){
					$totalstar+=$Opin[$i]->star;
				}
			}
			$totalstar = $totalstar/$size;
			echo "\n";
			echo "Rating :".number_format($totalstar,2);
			?>
		</ul>
		<div class="tab-content">
			<div class="tab-pane active" id="Comment">

				<ul class="list-unstyled">
					<?php
					if(count($Opin)!= 0){
						for($i=0;$i<$size;$i++){
							$User = User::where('id','like',$Opin[$i]->userid)->get();
							$Star = $Opin[$i]->star;
							$Comment = $Opin[$i]->comment;
							$Username = $User[0]->name;
							$Time = $Opin[$i]->time;
							echo "<br><FONT COLOR = White>";
							echo "(Rating : $Star) $Comment (post by) $Username (at) $Time";
							echo "<FONT COLOR = White>";
						}		
					}
					?>
				</ul>

				<form action = "addcomment" method = "post">
					<div class="form-group">
						<label for="comment">Comment:</label>
						<textarea class="form-control" textarea name = "comment" rows="5" id="comment"></textarea>

						Rating :  <label class="radio-inline"><input type="radio" name="star" value = "1"> 1</label>
						<label class="radio-inline"><input type="radio" name="star" value = "2"> 2</label>
						<label class="radio-inline"><input type="radio" name="star" value = "3"> 3</label>
						<label class="radio-inline"><input type="radio" name="star" value = "4"> 4</label>
						<label class="radio-inline"><input type="radio" name="star" value = "5"> 5</label> <br>
						<input type="hidden" name="hotelid" value= "<?php echo $Hotelname->id ?>" >
						<input type="submit" value="แสดงความคิดเห็น">
					</div>
				</form>
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

