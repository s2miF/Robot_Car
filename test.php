<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap 4 Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=0.3">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <script src="js/jquery.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
<nav class="navbar navbar-expand-sm bg-primary navbar-dark">
<ul class="navbar-nav">
  <li class="nav-item active">
    <a class="nav-link" href="#">Active</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#">Link</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#">Link</a>
  </li>
  <li class="nav-item">
    <a class="nav-link disabled" href="#">Disabled</a>
  </li>
</ul>
</nav>

        <div class="row">
            <div class="col-md-3 mx-auto"><img id="btn_open" src="data/img/open.jpg" class="rounded"/></div>
            <div class="col-md-2 mx-auto"><img id="btn_close" src="data/img/close.jpg" class="rounded"/></div>
            <div class="col-md-2 mx-auto"></div>
            <div class="col-md-5"></div>
        </div>
</div>

	 <?php
	    //this php script generate the first page in function of the gpio's status
	    $status = array (0, 0, 0, 0);

      //set the pin's mode to output and read them
      
      //GPIO 29 (40): Forward (M1 direction R)
		  system("gpio mode 29 out");
      //exec ("gpio write 29 1", $status[0], $return );

      //GPIO 28 (38): Backward (M1 direction L)
      system("gpio mode 28 out");
      //exec ("gpio write 28 1", $status[1], $return );

	 ?>
	 
	 <!-- javascript -->
	 <script src="script_test.js"></script>
</body>
</html>