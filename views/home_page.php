<html>
    <head>
		<link rel="shortcut icon" href="<?php echo base_url('assets/logo.png') ?>">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>


		
		<title>HOME PAGE</title>
		 <style>
          #div2 {
                top: 18;
                position: fixed;
                right: 49;
              }
          a{
            font-size: 20;

          }
        li{
            padding-left: 15px;
            padding-right: 15px;
          }
		.card, .card-body{
			  max-width: 300px;
			  height: 200px;
			  background-color : #00ffdd;
			  opacity: 0.5;
		}
		div.always{
				position: absolute;
				top: 339;
				left : 200;    
		}
		h1{
			font-family : poppins;
		}
		h4{
			padding-top : 0;
			font-family : poppins;
		}
		
        </style>

    </head>
    <body background="<?php echo base_url('assets/bg.png') ?>">

<? // Navbar ?>	

		<nav class="navbar navbar-expand-lg navbar-light bg-light" style="color : red;">
				  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				  </button>
				  <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
					<img src="<?php echo base_url('assets/logo.png') ?>" width="4%"> 
					<a class="navbar-brand" href="#" id="brand" style="font-weight: bold; color: red; font-size: 27; font-family: Poppins;"> HEALING STORE</a>
				   </div>

				<div align="right" id="div2">
				<ul class="navbar-nav mr-auto mt-2 mt-lg-0">
					 <li class="nav-item active">
						<a class="nav-link" href="<?=site_url().'/Main/UpdateProfile'?>"><?=$profile?><span class="sr-only">(current)</span></a>
					  </li>
					  <li class="nav-item active">
						<a class="nav-link" href="<?=site_url().'/Main/viewHomeAdmin'?>"><?=$admin?><span class="sr-only">(current)</span></a>
					  </li>
					  <li class="nav-item active">
						<a class="nav-link" href="<?=site_url().$track2?>">Menu<span class="sr-only">(current)</span></a>
					  </li>
					  <li class="nav-item">
						<a class="nav-link" href="<?=site_url('Main/ViewObat')?>">Obat</a>
					  </li>
					  <form class="form-inline my-2 my-lg-0 ">
                    	<input class="form-control mr-sm-2 " type="search " placeholder="Search " aria-label="Search ">
                    	<button class="btn btn-outline-danger my-2 my-sm-0 " type=" submit ">Search</button>
                	  </form>
					  
					  <li class="nav-item">
						<a class="nav-link" href="<?=site_url().$track?>" 
						style="background-color : #f7fbff; text-underline-position: under;"><span class="glyphicon glyphicon-log-in"></span> <?=$log?></a>
					  </li>
					  
					   
				</ul>
				</div>
		</nav>


	<? // Home Page ?>	
	<?php if ($this->session->flashdata('category_success')) { ?>
        <div class="alert alert-success"> <?= $this->session->flashdata('category_success') ?> </div>
    <?php } ?>
    
			<img src="<?php echo base_url('assets/lampu.png') ?>" width="39%"
				style="position: absolute; top: 130; right : 110;">
			<div class = "always" allign= "left">
				<h1> Always Care About Your</h1>
				<h1> Health</h1>
				<h1> Always Connected.</h1>
				<br>
				<br>
				<h4>We are here to help you find </h4>
				<h4>your medic kit </h4>
				<br>
				<a href="<?=site_url()?>/Main/tambahPelanggan"  class="btn btn-danger" style="width: 40%; font-size: 25px;">Sign Up</a>
			</div>

	</body>
</html>