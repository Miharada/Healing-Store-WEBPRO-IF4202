$(document).ready(function(){
     
    show_data();

        $("#table_filter").on("keyup", function() {
          var value = $(this).val().toLowerCase();
          $("#table1 tr").filter(function() {
            $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
          });
        });

   

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
                    '<td class="text-center">'+data[i].nama+'</td>'+
                    '<td class="text-center">'+data[i].alamat+'</td>'+
                    '<td class="text-center">'+data[i].no_hp+'</td>'+
                                '<td class="text-center">'+
                                '' + 
                    '<button type="button" class="btn btn-danger" data-toggle="modal"> <a href=\"<?php echo base_url() . "index.php/ctrl_pegawai/hapus/" .'+data[i].id_pegawai +' ?>\"'+
                    'onclick=" return confirm("Apakah anda yakin menghapus data ini?");" style="color: white; font-size: 15.5;">Hapus</a></button>' +
                    '<button type="button" class="btn btn-warning" data-toggle="modal" data-target=\"#edit'+data[i].id_pegawai +'\">Edit<i class="fas fa-user-edit"></i></button>'+
                  '</tr>';
          }
          $('#table1').html(html);
        }
      });  
    }


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