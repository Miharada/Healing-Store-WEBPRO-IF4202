<html>
    <head>
		<link rel="shortcut icon" href="<?php echo base_url('assets/logo.png') ?>">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/solid.css">
		
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
                     <tr> <?php foreach($data_pegawai as $dt) : ?>
							<? $url = 'Pegawai/index.php/ctrl_pegawai/hapus/' . $dt['id_produk']; ?>
							<td class="text-center"><?= $dt['id_pegawai']; ?> </td>
                            <td class="text-center"><?= $dt['nama']; ?> </td>
                            <td class="text-center"><?= $dt['alamat']; ?> </td>
                            <td class="text-center"><?= $dt['no_hp']; ?> </td>
							<td class="text-center">
							<button type="button" class="btn btn-danger" data-toggle="modal"> <a href="<?php echo base_url() . 'index.php/ctrl_pegawai/hapus/' . $dt['id_pegawai']; ?>"
							onclick=" return confirm('Apakah anda yakin menghapus data ini?');" style="color: white; font-size: 15.5;">Hapus</a></button>
							<button type="button" class="btn btn-warning" data-toggle="modal" data-target="#edit<?php echo $dt['id_pegawai']; ?>">Edit<i class="fas fa-user-edit"></i></button>
                       
					   </td>
                    </tr>
                    <?php endforeach ?>
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
			
				  <form method="POST" action="<?php echo base_url() . 'index.php/ctrl_pegawai/tambah'; ?>">
					<div class="form-group">
					  <label for="formGroupExampleInput">ID Pegawai</label>
					  <input type="text" class="form-control" id="formGroupExampleInput" placeholder="ID Pegawai" name="id_pgw" required >
					</div>
					<div class="form-group">
					  <label for="formGroupExampleInput">Nama Pegawai</label>
					  <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Nama Pegawai" name="nm_pgw"required>
					</div>
					<div class="form-group">
					  <label for="formGroupExampleInput2">Alamat</label>
					  <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Alamat" name="alamat" required>
					</div>
					<div class="form-group">
					  <label for="formGroupExampleInput2">No HP</label>
					  <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="no_hp" name="no_hp" required>
					</div>
				  </div>
				  <div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
					<input  type="submit" class="btn btn-primary" id="hapus" value="Submit" placeholder="Simpan">
				  </form>
				  </div>
				</div>
			  </div>
			</div>

	<? // Edit Pegawai ?>	
		<?php $no=1; foreach ($data_pegawai as $dt) {?>
		  <div class="modal fade" id="edit<?php echo $dt['id_pegawai']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
			<div class="modal-dialog" role="document">
			  <div class="modal-content">
				<div class="modal-header">
				<center><h2>EDIT DATA <?php echo $dt['id_pegawai']; ?> </h2></center>
				</div>
				<div class="modal-body">

				<form method="post" action="<?php echo base_url() . 'index.php/ctrl_pegawai/edit';?>">
				<input type="hidden" class="form-control" id="formGroupExampleInput" placeholder="id_pegawai" name="id_pegawai" value="<?php echo $dt['id_pegawai']; ?>"  required>
				<div class="form-group">
				<label for="formGroupExampleInput">ID Pegawai</label>
				<input type="text" class="form-control" id="formGroupExampleInput" placeholder="ID Pegawai" name="id_pgw" value="<?php echo $dt['id_pegawai']; ?>" required>
			</div>
			<div class="form-group">
				<label for="formGroupExampleInput">Nama Pegawai</label>
				<input type="text" class="form-control" id="formGroupExampleInput" placeholder="Nama Pegawai" name="nm_pgw" value="<?php echo $dt['nama']; ?>" required>
			</div>
			<div class="form-group">
				<label for="formGroupExampleInput2">Alamat</label>
				<input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Alamat" name="alamat" value="<?php echo $dt['alamat']; ?>" required>
			</div>
			<div class="form-group">
				<label for="formGroupExampleInput2">No HP</label>
				<input type="text" class="form-control" id="formGroupExampleInput2" placeholder="no_hp" name="no_hp" value="<?php echo $dt['no_hp']; ?>" required>
			</div>
			</div>
				<div class="modal-footer">
				  <button type="button" class="btn btn-secondary" data-dismiss="modal">Tidak</button>
				<input  type="submit" class="btn btn-primary" id="hapus" value="Submit" placeholder="Simpan">
				</div>
				</form>

			  </div>
			</div>
		  </div>
		<?php } ?>

        </center>
        </div>

    </body>
	<script type="text/javascript">
		$(document).ready(function(){
		  $("#table_filter").on("keyup", function() {
			var value = $(this).val().toLowerCase();
			$("#table1 tr").filter(function() {
			  $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
			});
		  });
		});
	</script>
</html>
