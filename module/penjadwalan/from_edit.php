
            <?php 
            include '../config/koneksi.php';
            $id = $_GET['id'];

            $query = "SELECT * FROM penjadwalan WHERE id='".$id."'";
            
            $tampil = mysqli_query($koneksi,$query);
            $data = mysqli_fetch_assoc($tampil);

            // print_r($data);
             
             ?>


<div class="form-add">
    <div class="col-md-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                
                <h4 class="card-title" align="center">Form Edit</h4>
                
                <form class="form-horizontal" method="post" action="./penjadwalan/update.php">
            
                <!-- input id -->
                <input type="hidden" class="form-control" name="id" value="<?php echo $data['id']; ?>" >
                        


                <div class="form-group">
                    <label for="tanggal">Tanggal</label>
                    <div  class="input-group date datepicker" id="datepicker-popup" id="datepicker">
                    
                    <input type="text" class="form-control" name="tanggal" value="<?php echo date('m/d/Y'
                        ,strtotime($data['tanggal'])) ; ?>">
                        
                        <span class="input-group-addon input-group-append border-left">
                          <span class="icon-calendar input-group-text"></span>
                        </span>
                    
                    </div>
                </div>
                
                <div class="form-group">
                    <label for="waktu">Time</label>
                    <div class="input-group date" id="timepicker-example" data-target-input="nearest">
                        <div class="input-group" data-target="#timepicker-example" data-toggle="datetimepicker">
                          
                           <input type="text" class="form-control" name="waktu" value="<?php echo $data['waktu']; ?>">
                          
                          <div class="input-group-addon input-group-append"><i class="icon-clock input-group-text"></i></div>
                        </div>
                    </div>
                </div>
                
                <button type="submit" name="insert" class="btn btn-primary mr-2"> Submit </button>
                
                <a href="" class="btn btn-warning mr-2"> Cancel </a>
                
                <!-- <a href="index.php?page=jadwal" class="btn btn-light">Cancel</a> -->

                </form>
            </div>
        </div>
    </div>
</div>


<script src="../vendors/js/vendor.bundle.base.js"></script>
<script src="../vendors/js/vendor.bundle.addons.js"></script>
<script src="../js/formpickers.js"></script>
<script src="../js/form-repeater.js"></script>
<script src="../js/moment.min.js"></script>