<html>

<head>
    <link rel="shortcut icon" href="<?php echo base_url('assets/logo.png') ?>">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">

    <title>Admin</title>
    <style>
        .navbar {
            overflow: hidden;
            background-color: #333;
            position: fixed;
            /* Set the navbar to fixed position */
            top: 0;
            /* Position the navbar at the top of the page */
            width: 100%;
            /* Full width */
        }
        
        #div2 {
            top: 18;
            position: fixed;
            right: 49;
        }
        
        a {
            font-size: 20;
        }
        
        li {
            padding-left: 15px;
            padding-right: 15px;
        }
        
        .card,
        .card-body {
            max-width: 300px;
            height: 200px;
            background-color: #00ffdd;
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
					<a class="navbar-brand" href="#" id="brand" style="font-weight: bold; color: red; font-size: 27; font-family: Times New Roman;"> HEALING STORE</a>
				   </div>

				<div align="right" id="div2">
				<ul class="navbar-nav mr-auto mt-2 mt-lg-0">
					  <li class="nav-item active">
						<a class="nav-link" href="<?=site_url().'/Main/viewHomeAdmin'?>">Admin<span class="sr-only">(current)</span></a>
					  </li>
					  <li class="nav-item active">
						<a class="nav-link" href="<?=site_url().'/Main/Utama'?>">Menu<span class="sr-only">(current)</span></a>
					  </li>
					  <li class="nav-item">
						<a class="nav-link" href="">Obat</a>

					  
					  <li class="nav-item">
						<a class="nav-link" href="<?=site_url().'/Main/logout'?>" 
						style="background-color : #f7fbff; text-underline-position: under;">
						Logout</a>
					  </li>
					   
				</ul>
				</div>
		</nav>

        <? // Navigasi Menu ADMIN ?>
            <center>
                <div>
                    <h1 style="color: #ff7936">Home Page Admin</h1>
                    <br>
                </div>

                <div class="container">
                    <div class="row">
                        <div class="col-sm">
                            <div class="card">
                                <img class="card-img-top" style="width: 40%;" src="https://cdn4.iconfinder.com/data/icons/user-icons-5/100/user-28-128.png" alt="Card image cap">
                                <div class="card-body">
                                    <p><a href="<?=site_url().'/Main/viewManageAdmin'?>">Manage ADMIN</a></p>
                                </div>
                            </div>

                        </div>
                        <div class="col-sm">
                            <div class="card">
                                <img class="card-img-top" style="width: 40%;" src="https://cdn3.iconfinder.com/data/icons/healthcare-and-medical-line/100/healthcare_medical_giving_medicine-512.png" alt="Card image cap">
                                <div class="card-body">
                                    <p><a href="<?=site_url().'/Main/viewManageObat'?>">Manage OBAT</a></p>
                                </div>
                            </div>

                        </div>
                        <div class="col-sm">
                            <div class="col-sm">
                                <div class="card">
                                    <img class="card-img-top" style="width: 40%;" src="https://cdn1.iconfinder.com/data/icons/finance-solid-icons-vol-1/48/039-512.png" alt="Card image cap">
                                    <div class="card-body">
                                        <p><a href="<?=site_url().'/Main/viewManageTransaksi'?>">Manage TRANSAKSI</a></p>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="card">
                        <img class="card-img-top" style="width: 40%;" src="https://i.pinimg.com/originals/c7/aa/66/c7aa66bec2110a5e1652cabe4de9340d.png" alt="Card image cap">
                        <div class="card-body">
                            <p><a href="<?=site_url().'/Main/viewManagePelanggan'?>">Manage USER</a></p>
                        </div>
                    </div>


            </center>

</body>

</html>