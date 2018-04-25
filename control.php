<!DOCTYPE html>
<html lang="ar" dir="ltr">
<head>
  <title>مشروع تخرج - كلية الحاسب الآلي عفيف</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=0.3">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <script src="js/jquery.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
<nav class="navbar navbar-expand-sm bg-danger navbar-dark">
<a class="navbar-brand" href="#">سيارة روبوت للإسعاف</a>
<ul class="navbar-nav">
  <li class="nav-item active">
    <a class="nav-link" href="#">شاشة التحكم</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#">تصميم</a>
  </li>
  <li class="nav-item">
    <a class="nav-link disabled" href="#">كود</a>
  </li>
</ul>
</nav>
<div class="row">
  <div class="col-md-7">
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-2 mx-auto"><img id="btn_forward" src="data/img/forward_blue.jpg" class="rounded" alt="off"/></div>
            <div class="col-md-3"></div>
 
        </div>
        <div class="row">
            <div class="col-md-3 mx-auto"><img id="btn_left" src="data/img/left_blue.jpg" class="rounded" alt="off"/></div>
            <div class="col-md-2 mx-auto"><img id="btn_stop" src="data/img/stop.jpg" class="rounded" alt="off"/></div>
            <div class="col-md-3 mx-auto"><img id="btn_right" src="data/img/right_blue.jpg" class="rounded" alt="off"/></div>

        </div>
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-2 mx-auto"><img id="btn_backward" src="data/img/backward_blue.jpg" class="rounded" alt="off"/></div>
            <div class="col-md-3"></div>

        </div>
  </div>

  <div class="col-md-5">


    <iframe height="300px" width="100%" src="http://192.168.43.240:8080/stream" ></iframe>


  </div>
</div>
</div>



	 <?php
	    //this php script generate the first page in function of the gpio's status
	    $status = array (0, 0, 0, 0);

      //set the pin's mode to output and read them
      
      //GPIO 29 (40): Forward (M1 direction R)
		  system("gpio mode 29 out");
      exec ("gpio read 29", $status[0], $return );

      //GPIO 28 (38): Backward (M1 direction L)
      system("gpio mode 28 out");
      exec ("gpio read 28", $status[1], $return );

      //GPIO 25 (37): Right (M2 direction R)
      system("gpio mode 25 out");
      exec ("gpio read 25", $status[2], $return );

      //GPIO 24 (35): lEFT (M2 direction l)
      system("gpio mode 24 out");
      exec ("gpio read 24", $status[3], $return );

	 ?>
	 
	 <!-- javascript -->
	 <script src="script.js"></script>
</body>
</html>