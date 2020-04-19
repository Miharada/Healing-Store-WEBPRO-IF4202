
<!DOCTYPE html>
<html>
<head>
  <title>Login</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/solid.css">

  <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/login.css') ?>">
</head>
<body>
<? // Navbar ?>	
		<nav class="navbar navbar-expand-lg navbar-light bg-light" style="color : red;">
				  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				  </button>
				  <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
					<img src="<?php echo base_url('assets/logo.png') ?>" width="4%"> 
					<a class="navbar-brand" href="#" id="brand" style="font-weight: bold; color: red; font-size: 27; font-family: Times New Roman;"> HEALTH STORE</a>
				   </div>

				<div align="right" id="div2">
				<ul class="navbar-nav mr-auto mt-2 mt-lg-0">
					  <li class="nav-item active">
						<a class="nav-link" href="#"><span class="sr-only">(current)</span></a>
					  </li>
					  <li class="nav-item active">
						<a class="nav-link" href="<?=site_url().'/Main/utama'?>" >Menu<span class="sr-only">(current)</span></a>
					  </li>
					  <li class="nav-item">
						<a class="nav-link" href="#">Obat</a>
					  </li>
					   <li class="nav-item">
						<a class="nav-link" href="#">Find</a>
					  </li>
					
					   
				</ul>
				</div>
		</nav>

  <div class="modal-dialog text-center">
    <div class="col-sm-9 main-section">
      <div class="modal-content">

        <div class="col-12 user-img">
          <img src="<?php echo base_url('assets/img/face.png') ?>">
        </div>

        <div class="col-12 form-input">
          <form method="POST">
            <div class="form-group">
              <input type="text" id="username" name="username" class="form-control" placeholder="Enter Username ">
            </div>
            <div class="form-group">
              <input type="password" id="password" name="password" class="form-control" placeholder="Enter Password">
            </div>
            <button type="submit" class="btn btn-success">Login</button>
          </form>
        </div>
        <p>Dont have an account ?</p><a href="<?=site_url()?>/Main/tambahPelanggan">Sign Up</a>
        <a href="<?=site_url()?>/Main/viewLoginAdmin">Admin</a>
      </div>
       
    </div>

  </div>

</body>
</html>

