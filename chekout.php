<!DOCTYPE html>
<html lang="en">
  <head>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="register.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.13.0/css/all.css">
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style type="text/css">
       a{
    padding: 15px 60px;
    text-align: center;
    display:inline-block;
    text-decoration: none;
    margin:0 auto;
     color: #2196f3;
        text-decoration: none;
        font-size: 24px;
        overflow: hidden;
        transition: 0.2s;
}

    a:hover{
        color: white;
        background: #2196f3;
        transition-delay: 0.2s;
    }
   .container{ 
  width: 100%;
  text-align: center;
}
    img{
      align-self: center;
    }
    </style>
    <title>Chekout</title>

<div class="container">
<div class="card">
<article class="card-body mx-auto" style="max-width: 400px;">
    <h4 class="card-title mt-3 text-center">Checkout</h4>
    <form action="" method="post">
    <?php  foreach ($data as $dt) {?>

        <img src="<?=base_url().$dt['gambar']?>" style="width: 70%;">
        <input type="hidden" id="nama_obat" name="nama_obat" value="<?=$dt['nama_obat']?>">
         <h3 ><?=$dt['nama_obat']?></h3>
         <p><?=$dt['deskripsi']?></p>
         <br>
     
       
         <p>Harga total</p>
      <div class="input-group-prepend">
      
        <input type="text" class="form-control" id="quantity" name="quantity" placeholder=" " value="<?=$qt*$dt['harga_obat']?>" disabled>
      </div>
      <?php $this->session->set_userdata('quantity',$qt*$dt['harga_obat']) ?>
      <div class="form-group">
        <label for="alamat">Alamat Pengiriman</label>
        <?php $no=1; foreach ($customer as $ct) {?>
      <textarea class="form-control" id="alamat" name="alamat" rows="3" disabled><?=$ct['alamat']?></textarea>
        <?php } ?>  
  </div>
    <?php } ?>   
    <a href="<?=site_url('Main/AddTransaksi')?>" type="submit" ><i class="fas fa-cash-register"></i></a>                                                                                           
</form>
</div>
</head>
</html>