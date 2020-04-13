<html>
    <head>
		<link rel="shortcut icon" href="<?php echo base_url('assets/logo.png') ?>">
    <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/solid.css">
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.10.20/datatables.min.css"/>
        <script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.10.20/datatables.min.js"></script>

		
		<title>Pegawai</title>
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
					<a class="navbar-brand" href="#" id="brand" style="font-weight: bold; color: red; font-size: 27; font-family: Times New Roman;"> HEALTH STORE</a>
				   </div>

				<div align="right" id="div2">
				<ul class="navbar-nav mr-auto mt-2 mt-lg-0">
					  <li class="nav-item active">
						<a class="nav-link" href="#"><span class="sr-only">(current)</span></a>
					  </li>
					  <li class="nav-item active">
						<a class="nav-link" href="#">Menu<span class="sr-only">(current)</span></a>
					  </li>
					  <li class="nav-item">
						<a class="nav-link" href="#">Obat</a>
					  </li>
					   <li class="nav-item">
						<a class="nav-link" href="#">Find</a>
					  </li>
					  <li class="nav-item">
						<a class="nav-link" href="#">Admin</a>
					  </li>
					  <li class="nav-item">
						<a class="nav-link" href="#" 
						style="background-color : #f7fbff; text-underline-position: under; padding: 3px 4px;">
						Log In</a>
					  </li>
					   <li class="nav-item">
							<a class="nav-link" href="#" 
							style="background-color:#fff0f0; text-underline-position: under;padding: 3px 4px; color: red">
						<u>Sign Up</u></a>
					  </li>
				</ul>
				</div>
		</nav>

  <div class="container" id ="cont1" style = "margin-top: 30px;">
  <center>
  <h2 >Daftar Pegawai</h2>
	
<? // Search Pegawai ?>	
    <div class="row mt-3">
        <div class="col md-6">
            <form action="" method="post">
                <div class="input-group">
                   <input class="form-control" id="table_filter" type="text" placeholder="Search..">
                    <div class="input-group-append">
                        <button class="btn btn-primary" type="submit">Cari</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
           
<? // tabel data pegawai ?>	
			<table class="table table-bordered table-sm" >
        <thead style = "background-color: #ff554d;">
            <tr>
					    <th scope="col" class="text-center">ID</th>
              <th scope="col" class="text-center">Nama</th>
              <th scope="col" class="text-center">Alamat</th>
              <th scope="col" class="text-center">No_HP</th>
					    <th scope="col" class="text-center">Action</th>
            </tr>
        </thead>
        <tbody id = "table1" style = "background-color: white; opacity: 0.9;">
             
                    
                 
        </tbody>
      </table>


	<? // tambah Pegawai ?>		
	<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#tambahpgw">TAMBAH PEGAWAI</button>
			<div class="modal fade" id="tambahpgw" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel1" aria-hidden="true">
			  <div class="modal-dialog" role="document">
				<div class="modal-content">
				  <div class="modal-header">
				  <center><h2>TAMBAH DATA PEGAWAI</h2></center>
				  </div>
				  <div class="modal-body">
			
				  <form>
					<div class="form-group">
					  <label for="formGroupExampleInput">ID Pegawai</label>
					  <input type="text" class="form-control" id="id_pegawai" placeholder="ID Pegawai" name="id_pegawai" required >
					</div>
					<div class="form-group">
					  <label for="formGroupExampleInput">Nama Pegawai</label>
					  <input type="text" class="form-control" id="nama_pegawai" placeholder="Nama Pegawai" name="nama_pegawai"required>
					</div>
					<div class="form-group">
					  <label for="formGroupExampleInput2">Alamat</label>
					  <input type="text" class="form-control" id="alamat" placeholder="Alamat" name="alamat" required>
					</div>
					<div class="form-group">
					  <label for="formGroupExampleInput2">No HP</label>
					  <input type="text" class="form-control" id="no_hp" placeholder="Nomor HP" name="no_hp" required>
					</div>
				  </div>
				  <div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
					<input  type="submit" class="btn btn-primary" id="data_submit" value="Submit" placeholder="Simpan">
				  </form>
				  </div>
				</div>
			  </div>
			</div>

  <div class="modal fade" id="modal-delete" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel1" aria-hidden="true">
          <div class="modal-dialog" role="document"> 
            <div class="modal-content">
              <div class="model-header">
              <center><h2>Hapus Pegawai</h2></center>
              </div>
              <div class="modal-body">
                <p id="peringatan-delete" name="peringatan-delete"></p>
              <div class="modal-footer">
                  <div class="form-group">
                  <input type="hidden" class="form-control" id="id_pegawai_delete" placeholder="ID Pegawai" name="id_pegawai_delete" required >
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
                  <button type="button" type="submit" id="btn_konfirmasi_delete" name="btn_konfirmasi_delete" class="btn btn-primary">Yes</button>
              </div>
                </div>
              </div>
            </div>
          </div>
  </div>
	<? // Edit Pegawai ?>	
		  <div class="modal fade" id="modal-edit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
			<div class="modal-dialog" role="document">
			  <div class="modal-content">
				<div class="modal-header">
				<center><h2>EDIT DATA</h2></center>
				</div>
				<div class="modal-body">

				<form>
				<div class="form-group">
				<label for="formGroupExampleInput">ID Pegawai</label>
				<input type="text" class="form-control" id="id_pegawai_edit" placeholder="ID Pegawai" name="id_pegawai_edit" required>
			</div>
			<div class="form-group">
				<label for="formGroupExampleInput">Nama Pegawai</label>
				<input type="text" class="form-control" id="nama_pegawai_edit" placeholder="Nama Pegawai" name="nama_pegawai_edit" required>
			</div>
			<div class="form-group">
				<label for="formGroupExampleInput2">Alamat</label>
				<input type="text" class="form-control" id="alamat_edit" placeholder="Alamat" name="alamat_edit" required>
			</div>
			<div class="form-group">
				<label for="formGroupExampleInput2">No HP</label>
				<input type="text" class="form-control" id="no_hp_edit" placeholder="no_hp" name="no_hp_edit" required>
			</div>
			</div>
				<div class="modal-footer">
				  <button type="button" class="btn btn-secondary" data-dismiss="modal">Tidak</button>
				<input  type="submit" class="btn btn-primary" id="btn_konfirmasi_edit" value="Edit" placeholder="Simpan">
				</div>
				</form>

			  </div>
			</div>
		  </div>


        </center>
        </div>

    </body>
  <script>
  $(document).ready(function(){
     
    show_data();
 
    $("#table_filter").on("keyup", function() {
      var value = $(this).val().toLowerCase();
      $("#table1 tr").filter(function() {
        $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
      });
    });
 
    
    //show all data pegawai from DB
    function show_data(){
      $.ajax({
        type : 'ajax',
        url  : '<?= site_url("ctrl_pegawai/OutputPegawai") ?>',
        async: true,
        dataType : 'json',
        success : function(data){
          var html='';
          var i;
          for(i=0; i<data.length; i++){
            html+='<tr>' +
                    ''+
                    '<td class="text-center">'+data[i].id_pegawai+ '</td>'+
                    '<td class="text-center">'+data[i].nama_pegawai+'</td>'+
                    '<td class="text-center">'+data[i].alamat+'</td>'+
                    '<td class="text-center">'+data[i].no_hp+'</td>'+
                                '<td class="text-center">'+
                                '' + 
                    '<a href="javascript:void(0);" class="btn btn-danger btn-sm item_delete" data-id_pegawai ="'+data[i].id_pegawai+'"'+
                    'style="color: white; font-size: 15.5;">Hapus</a>' +
                    '<a href="javascript:void(0);" class="btn btn-warning btn-sm item_edit" data-id_pegawai= "'+data[i].id_pegawai+'"'+'data-nama_pegawai="'+data[i].nama_pegawai+'"'+
                    'data-alamat="'+data[i].alamat+'"'+'data-no_hp="'+data[i].no_hp+'"'+'style="color: white; font-size: 15.5;">Edit</a>'+
                   '</tr>';
           }
           $('#table1').html(html);
        }
      });  
    }

    //addData Pegawai to DB
    $('#data_submit').on('click',function(){
      var id_pegawai = $('#id_pegawai').val();
      var nama_pegawai = $('#nama_pegawai').val();
      var alamat = $('#alamat').val();
      var no_hp = $('#no_hp').val();
      $.ajax({
        type : 'POST',
        url : '<?= site_url("ctrl_pegawai/tambah") ?>',
        dataType : 'JSON',
        data : {id_pegawai:id_pegawai, nama_pegawai:nama_pegawai, alamat:alamat, no_hp:no_hp},
        success : function(data){
          $('[name="id_pegawai"]').val("");
          $('[name="nama_pegawai"]').val("");
          $('[name="alamat"]').val("");
          $('[name="no_hp"]').val("");
          show_data();
        }
      });
      return false;
    });
 
    //get data for delete pegawai
    $('#table1').on('click','.item_delete',function(){
      var id_pegawai = $(this).data("id_pegawai");
      $('#modal-delete').modal('show');
      $('[name="id_pegawai_delete"]').val(id_pegawai);
    });

    //delete data pegawai
    $('#btn_konfirmasi_delete').on('click', function(){
      var id_pegawai = $('#id_pegawai_delete').val();
      $.ajax({
        type : 'POST',
        url : '<?= site_url("ctrl_pegawai/hapus")?>',
        dataType : 'JSON',
        data : {id_pegawai:id_pegawai},
        success : function(data){
          $('[name="id_pegawai_delete"]').val("");
          $('#modal-delete').modal('hide');
          show_data();
        }
      });
      return false;
    });

    //get data for edit pegawai
    $('#table1').on('click','.item_edit',function(){
      var id_pegawai = $(this).data("id_pegawai");
      var nama_pegawai = $(this).data("nama_pegawai");
      var alamat = $(this).data("alamat");
      var no_hp = $(this).data("no_hp");

      $('#modal-edit').modal('show');
      $('[name="id_pegawai_edit"]').val(id_pegawai);
      $('[name="nama_pegawai_edit"]').val(nama_pegawai);
      $('[name="alamat_edit"]').val(alamat);
      $('[name="no_hp_edit"]').val(no_hp);
    });

    //Edit data pegwai
    $('#btn_konfirmasi_edit').on('click',function(){
      var id_pegawai = $('#id_pegawai_edit').val();
      var nama_pegawai = $('#nama_pegawai_edit').val();
      var alamat = $('#alamat_edit').val();
      var no_hp = $('#no_hp_edit').val();
      $.ajax({
        type : 'POST',
        url : '<?= site_url("ctrl_pegawai/update")?>',
        dataType : 'JSON',
        data : {id_pegawai:id_pegawai, nama_pegawai:nama_pegawai, alamat:alamat, no_hp:no_hp},
        success: function(data){
          $('[name="id_pegawai_edit"]').val("");
          $('[name="nama_pegawai_edit"]').val("");
          $('[name="alamat_edit"]').val("");
          $('[name="no_hp_edit"]').val("");
          $('#modal-edit').modal('hide');
          show_data();
        }
      });
      return false;
    });

  });
  </script>
</html>
