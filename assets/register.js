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
            $('[name="no_hp"]').val("");
            $('[name="email"]').val("");
        }
        });
        return false;
    }
});
 

});