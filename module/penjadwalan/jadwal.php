 <?php 

 include '../../Monitoring/config/koneksi.php';
 include '../../Monitoring/function/function_insert.php';


 ?>



  <div class="row" id="form-add" style="display:none;"> <!--style="display:none;"-->
    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                
                <h4 class="card-title" style="text-align: center;">Tambah Jadwal</h4>
                <form class="form" method="post" action="#">
                


                <div class="form-group">

                  <label for="hari">Hari</label>
                  <select  name="hari" class="form-control">
                    <option value="~Pilih Hari~">~Pilih Hari~</option>
                    <option value="Senin">Senin</option>
                    <option value="Selasa">Selasa</option>
                    <option value="Rabu">Rabu</option>
                    <option value="Kamis">Kamis</option>
                    <option value="Jumat">Jumat</option>
                    <option value="Sabtu">Sabtu</option>
                    <option value="Minggu">Minggu</option>
                  </select>
                  
                </div>
                
                <!-- <div class="form-group">
                <label for="tanggal">Tanggal</label>

                <div class="input-group date datepicker datepicker-popup">   
                <input type="text" class="form-control" name="tanggal" autocomplete="off" required>
                  
                    <span class="input-group-addon input-group-append border-left">
                      <span class="icon-calendar input-group-text"></span>
                    </span>
                </div>
            </div> -->


                <div class="form-group">
                    <label for="waktu">Waktu</label>
                    <div class="input-group date timepicker-example" data-target-input="nearest">
                        <div class="input-group" data-target=".timepicker-example" data-toggle="datetimepicker">
                           
                           <input type="text" class="form-control" name="waktu" autocomplete="off">
                          <div class="input-group-addon input-group-append"><i class="icon-clock input-group-text"></i></div>
                        
                        </div>
                    </div>
                </div>
                
                <button type="submit" name="insert" class="btn btn-outline-primary mr-2">Submit</button>
                
                <a class="btn btn-outline-warning" id="btnCancel">Cancel</a>
                
                </form>
                
            </div>
        </div>
    </div>
</div>



<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
            <button type="button" class="btn btn-primary" onclick ="btnClick()">Tambah</button>
                <h4 class="card-title" align="center">Penjadwalan Pakan</h4>
                
                <div class="container-fluid">
                    <div class="table table-striped">
                       
                        <!-- <div id="order-listing_wrapper" class="dataTables_wrapper container-fluid dt-bootstrap4 no-footer"><div class="row"><div class="col-sm-12 col-md-6"><div class="dataTables_length" id="order-listing_length"><label>Show <select name="order-listing_length" aria-controls="order-listing" class="form-control"><option value="5">5</option><option value="10">10</option><option value="15">15</option><option value="-1">All</option></select> entries</label></div></div><div class="col-sm-12 col-md-6"><div id="order-listing_filter" class="dataTables_filter"><label><input type="search" class="form-control" placeholder="Search" aria-controls="order-listing"></label></div></div></div> -->
                       
                        <div class="row">
                        <div class="col-lg-12">
                        
                        <table id="order-listing" class="table dataTable no-footer" role="grid" 
                        aria-describedby="order-listing_info">
                        
                        <thead style="text-align: center;">    
                            <tr role="row">

                                <th class="sorting_asc" tabindex="0" aria-controls="order-listing" rowspan="1" 
                                colspan="1" aria-sort="ascending" aria-label="Order #: activate to sort column descending" 
                                style="width: 73px;"> Id </th>

                                <th class="sorting_asc" tabindex="0" aria-controls="order-listing" rowspan="1" 
                                colspan="1" aria-sort="ascending" aria-label="Order #: activate to sort column descending" 
                                style="width: 73px;"> No </th>
                                

                                <th class="sorting" tabindex="0" aria-controls="order-listing" rowspan="1" 
                                colspan="1" aria-label="Purchased On: activate to sort column ascending" 
                                style="width: 125px;"> Hari </th> 
                                
                                <th class="sorting" tabindex="0" aria-controls="order-listing" rowspan="1" 
                                colspan="1" aria-label="Customer: activate to sort column ascending" 
                                style="width: 91px;"> Waktu </th> 
                                
                                <!-- <th class="sorting" tabindex="0" aria-controls="order-listing" rowspan="1" 
                                colspan="1" aria-label="Base Price: activate to sort column ascending" 
                                style="width: 94px;"> Status </th> --> 
                                
                                <th class="sorting" tabindex="0" aria-controls="order-listing" rowspan="1" 
                                colspan="1" aria-label="Actions: activate to sort column ascending" 
                                style="width: 71px;"> Actions </th>

                            
                            </tr>
                        </thead>
                        
                        <tbody>
                        
                        <?php
                        
                        include '../../Monitoring/config/koneksi.php';

                        $query = "SELECT * FROM penjadwalan ORDER BY id ASC";
                        
                        $tampil= mysqli_query($koneksi,$query);

                        $no = 1;

                        while($data=mysqli_fetch_array($tampil,MYSQLI_BOTH) ) {
                                $hari=$data['hari'];
                        
                        ?>

                        <? endwhile; ?>

                             <tr style="text-align: center;">
                                 
                                 <td><?php echo $data['id']; ?></td>
                                 <td><?php echo $no++; ?></td>
                                 <td><?php echo $data['hari'];?></td>
                                 <td><?php echo $data['waktu']; ?></td>
                                
                                 <!-- <td>
                                     <?php 
                                        switch ($data['status']) {
                                            case 0:
                                               echo "<label class='badge badge-danger'> off </label>";
                                            break;
                                            case 1:
                                               echo "<label class='badge badge-success'> on </label>";
                                            break;
                                        }
                                    ?>
                                
                                </td> -->
                                
                                <td>

                                                                    
                                     <a  class="btn btn-lg btn-primary btnUbah" 
                                        data-toggle="modal" data-target="#ubah">
                                         <i class="fas fa-edit"></i>  
                                        </a>
                                        
                                     <a href="./penjadwalan/hapus.php?id=<?php echo $data['id'];?>" class="btn btn-lg btn-danger"
                                       onclick="return confirm ('Apakah Anda Yakin?');">
                                      <i class="fas fa-trash"></i>
                                      </a>



                                
                                </td>
                            </tr>
                            
                            <?php } ?>

                        
                        </tbody>
                    </table>
                </div>
            </div>

                    <!-- <div class="row">
                    <div class="col-sm-12 col-md-5">
                    <div class="dataTables_info" id="order-listing_info" role="status" aria-live="polite">Showing 1 to 10 of 10 entries
                    </div>
                    </div>
                    <div class="col-sm-12 col-md-7">
                    <div class="dataTables_paginate paging_simple_numbers" id="order-listing_paginate">
                    <ul class="pagination"><li class="paginate_button page-item previous disabled" id="order-listing_previous">
                    <a href="#" aria-controls="order-listing" data-dt-idx="0" tabindex="0" class="page-link">Previous</a></li><li class="paginate_button page-item active">
                    <a href="#" aria-controls="order-listing" data-dt-idx="1" tabindex="0" class="page-link">1</a></li><li class="paginate_button page-item next disabled" id="order-listing_next">
                    <a href="#" aria-controls="order-listing" data-dt-idx="2" tabindex="0" class="page-link">Next</a></li></ul>
                    </div>
                    </div>
                    </div> -->
                    
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>    
</div>


           <?php 
            
            include '../../Monitoring/function/function_update.php';
           
           ?>

            


          <!-- Modal -->
          <div class="modal fade" id="ubah" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="formModalLabel" style="padding: 0 157px;">Edit Jadwal</h5>
                  <button type="button" class="close" data-dismiss="modal">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  

                <form class="form" id="mp_form_edit" action="#" method="post">


               <input type="text" style="display: none;" class="form-control" id="id" name="id_jadwal" value="" >



                <div class="form-group">

                <label >Hari</label>
                <select  class="form-control" name="hari" id="hari">
                  <option value="Senin">Senin</option>
                  <option value="Selasa">Selasa</option>
                  <option value="Rabu">Rabu</option>
                  <option value="Kamis">Kamis</option>
                  <option value="Jumat">Jumat</option>
                  <option value="Sabtu">Sabtu</option>
                  <option value="Minggu">Minggu</option>
                </select>
                
              </div>

              <div class="form-group">

               <label>Waktu</label> 
               <div class="input-group date timepicker-example" data-target-input="nearest">
               <div class="input-group" data-target=".timepicker-example" data-toggle="datetimepicker">
               
               <input type="text" class="form-control" name="waktu" id="waktu" value="">

               <div class="input-group-addon input-group-append"><i class="icon-clock input-group-text"></i>
           
              </div>
             </div>
            </div>
           </div>
          </div>
            
            <div class="modal-footer">
              <button type="submit" name="edit" class="btn btn-primary">Submit</button>
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
<!--               <button type="reset"  class="btn btn-danger">Reset</button> -->

              </form>

            </div>
          </div>
        </div>
      </div>




<link rel="stylesheet" href="../css/bootstrap.min.css">

<style type="text/css">
  
  .modal-open {
    padding-right: 0!important;
    overflow-y: auto;

  }

  body {
    padding-right: 0!important;
  }



</style>

<script type="text/javascript">

    var grid;

    $(document).ready(function() {
       grid = $('#order-listing').DataTable();

    });


    // DataTables
    $('#order-listing tbody').on('click','.btnUbah',function(){

      $('#ubah').modal({
        show : true,
        backdrop : 'static',
        keyboard : false,

      });

      $("#id").val($(this).closest('tr').children()[0].textContent);
      $("#hari").val($(this).closest('tr').children()[2].textContent);
      $("#waktu").val($(this).closest('tr').children()[3].textContent);

    });

    var btnClick = function() {
        $("#form-add").show("slow");
    }   

    $('#btnCancel').on('click', function(){
      $('#form-add').slideUp("slow");
    });

    // var testDatetime = function() {
    //     var date = moment().format();
    //     alert(date);
    // }

    
</script>
<!-- Akhir DataTables -->