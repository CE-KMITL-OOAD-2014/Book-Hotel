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
      <!--login modal-->
      <div id="loginModal" class="modal show" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><a href="index.html">×<a/></button>
              <h1 class="text-center">Sign up</h1>
            </div>
            <div class="modal-body">
              <form class="form col-md-12 center-block" action = 'addHotel' method = "post" enctype="multipart/form-data">
               <div class="form-group">
                <input type="text" class="form-control input-lg" placeholder="Name" name = "name">
              </div>
              <div class="form-group">
                <input type="text" class="form-control input-lg" placeholder="Email" name = "email">
              </div>
              <div class="form-group">
                <input type="text" class="form-control input-lg" placeholder="Phone" name = "phone">
              </div>
              <div class="form-group">
                <input type="text" class="form-control input-lg" placeholder="Province" name = "province">
              </div>
              <input type="file" name="uploadField" />
              <div class="form-group">
                <button class="btn btn-success btn-lg btn-block" type="submit" >Register</button>
              </div>
            </form>
          </div>
          <div class="modal-footer">
            <div class="col-md-12">
              <button class="btn" data-dismiss="modal" aria-hidden="true"><a href="index.html">Cancel</a></button>
            </div>	
          </div>
        </div>
      </div>
    </div>
    <!-- script references -->
    <script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
  </html>