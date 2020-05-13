<html>

<head>
    <link rel="shortcut icon" href="<?php echo base_url('assets/logo.png') ?>">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>


    <title>OBAT</title>
    <style>
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
        
        #slider {
            top: 60;
            align-items: center;
        }
        
        .card {
            top: 100;
            align-items: center;
        }
        
        .carousel-inner img {
            width: 100%;
            height: 100%;
        }
        input{
            border-width:0px;
            border:none;
        }
    </style>

</head>

<body background="<?php echo base_url('assets/bg.png') ?>">

    <? // Navbar ?>
        <nav class="navbar navbar-expand-sm bg-light navbar-light fixed-top">
            <img src="<?php echo base_url( 'assets/logo.png') ?>" width="3%" style="position: fixed;">
            <a class="navbar-brand" href="#" id="brand" 
            style="font-weight: bold; color: red; font-size: 26; font-family: Poppins; margin-left: 36px;">HEALING STORE</a>
            <button class="navbar-toggler " type="button " data-toggle="collapse " data-target="#navbarSupportedContent " aria-controls="navbarSupportedContent " aria-expanded="false " aria-label="Toggle navigation ">
    <span class="navbar-toggler-icon "></span>
  </button>

            <div class="collapse navbar-collapse " id="navbarSupportedContent ">
                <ul class="navbar-nav mr-auto ">
                    <li class="nav-item active ">
                        <a class="nav-link " href="<?=site_url().'/Main/Utama'?>">MENU<span class="sr-only ">(current)</span></a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link " href="# ">OBAT</a>
                    </li>

                </ul>
                <form class="form-inline my-2 my-lg-0 ">
                    <input class="form-control mr-sm-2 " type="search " placeholder="Search " aria-label="Search" id="card_filter">
                    <button class="btn btn-outline-danger my-2 my-sm-0 " type=" submit ">Search</button>
                </form>
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a class="nav-link" href="<?=site_url().$track?>" style="background-color : #f7fbff; text-underline-position: under;"><span class="glyphicon glyphicon-log-in"></span> <?=$log?></a>
                    </li>
                </ul>
            </div>
        </nav>
<?php if ($this->session->flashdata('category_success')) { ?>
        <div class="alert alert-success"> <?= $this->session->flashdata('category_success') ?> </div>
    <?php } ?>
    
        <div class="container" id="slider">
            <h2>Most Searched</h2>
            <div id="myCarousel" class="carousel slide" data-ride="carousel">
                <!-- Indicators -->
                <ol class="carousel-indicators">
                    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                    <li data-target="#myCarousel" data-slide-to="1"></li>
                    
                </ol>

                <!-- Wrapper for slides -->
                <div class="carousel-inner">

                    <div class="item active">
                        <img src="<?php echo base_url( 'assets/paracetamol.jfif') ?>" alt="Obat" width="1100" height="500">
                        <div class="carousel-caption">
                            <h3 style="color :#ff614f;">Paracetamol</h3>
                            <p>Obat Penurun Panas</p>
                        </div>
                    </div>



                    <div class="item">
                        <img src="<?php echo base_url( 'assets/vitacimin.jpg') ?>" alt="Obat" width="1100" height="500">
                        <div class="carousel-caption">
                            <h3>Nama Obat</h3>
                            <p>Deskripsi</p>
                        </div>
                    </div>
                </div>

                <!-- Left and right controls -->
                <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control" href="#myCarousel" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
        <? // Card Obat ?>

            <?php foreach ($datas as $dt) {?>
            <div class="d-flex justify-content-center" >
                <div class="card" style="width: 18rem;" >
                    <h4 style="background-color :#ff614f; ">Healing Store</h5>
           
                    <img src="<?=base_url().$dt['gambar']?>"  class="card-img-top" alt="..." style="height: : 90%;">
                    <div class="card-body">
                        <h5 disabled class="card-title"><?=$dt['nama_obat']?></h5>
                        <p class="card-text">
                            <input align="left" value="<?=$dt['harga_obat']?>" id="harga" style="color :black; background-color: white;"disabled>
                            <input align="left" value="<?=$dt['kategori_obat']?>"  style="color :blue; background-color: white;" disabled>
                            <input align="left" value="<?=$dt['deskripsi']?>"  style="color :red; background-color: white;" disabled>
                        </p>
                    <form method = "POST">
                        <input type="hidden" value="<?=$dt['nama_obat']?>" id="nama_obat" name="nama_obat">
                        <button type="submit" href="<?=site_url('Main/BuyObat')?>" class="btn btn-primary" style="width: 120px;" nama_obat ="<?=$dt['nama_obat']?>">Beli</a>
                    </form>
                    </div>
            </div>
                <?php }?>

</body>
<script>
        $(document).ready(function(){
     
        show_data();
     
        $("#card_filter").on("keyup", function() {
          var value = $(this).val().toLowerCase();
          $("#card1 tr").filter(function() {
            $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
          });
        });
</script>
</html>