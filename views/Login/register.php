<!DOCTYPE html>
<html lang="en">
  <head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
    <link rel="stylesheet" type="text/css" href="assets/register.css">
   
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Halaman Registrasi</title>

<div class="container">
<div class="card">
<article class="card-body mx-auto" style="max-width: 400px;">
    <h4 class="card-title mt-3 text-center">Create Account</h4>
    <form>
    <div class="form-group input-group">
        <div class="input-group-prepend">
            <span class="input-group-text"> <i class="fa fa-user"></i> </span>
         </div>
        <input name="username" id="username" class="form-control" placeholder="Username" type="text">
    </div> 
    <div class="form-group input-group">
        <div class="input-group-prepend">
            <span class="input-group-text"> <i class="fa fa-envelope"></i> </span>
         </div>
        <input name="email" id="email" class="form-control" placeholder="Email address" type="email">
    </div> 
     <div class="form-group input-group">
        <div class="input-group-prepend">
            <span class="input-group-text"> <i class="fas fa-map-marker-alt"></i> </span>
         </div>
        <input name="alamat" id="alamat" class="form-control" placeholder="Address" type="text">
    </div> 
    <div class="form-group input-group">
        <div class="input-group-prepend">
            <span class="input-group-text"> <i class="fa fa-phone"></i> </span>
        </div>
        <select class="custom-select" style="max-width: 120px;">
            <option selected="">+62</option>
        </select>
        <input name="no_hp" id="no_hp" class="form-control" placeholder="Phone number" type="text">
    </div> 
    <div class="form-group input-group">
        <div class="input-group-prepend">
            <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
        </div>
        <input name="password" id="password" class="form-control" placeholder="Create password" type="password">
    </div> 
    <div class="form-group input-group">
        <div class="input-group-prepend">
            <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
        </div>
        <input name="repeat-password" id="repeat-password" class="form-control" placeholder="Repeat password" type="password">
    </div>                                       
    <div class="form-group">
        <button type="submit" id="data_submit" class="btn btn-primary btn-block"> Create Account  </button>
    </div>     
    <p class="text-center">Have an account? <a href="Login.html">Log In</a> </p>  <? //INI KE CONTROLLER DULU ?>                                                           
</form>
</head>
<script>
$(document).ready(function(){
//addData Admin to DB
$('#data_submit').on('click',function(){
    var username = $('#username').val();
    var alamat = $('#alamat').val();
    var password = $('#password').val();
    var no_hp = $('#no_hp').val();
    var email = $('#email').val();
    var repass = $('#repeat-password').val();
    if(password !== repass){

    }
    else{
        $.ajax({
        type : 'POST',
        url : '<?= site_url("Main/tambahPelanggan") ?>',
        dataType : 'JSON',
        data : {username:username, password:password, no_hp:no_hp, email:email, alamat:alamat},
        success : function(data){
            $('[name="username"]').val("");
            $('[name="alamat"]').val("");
            $('[name="password"]').val("");
            $('[name="repeat-password"]').val("");
            $('[name="no_hp"]').val("");
            $('[name="email"]').val("");
        }
        });
        return false;
    }
});
 

});
</script>
</html>