    <style type="text/css">
        
     .cetak {
        margin: 0 65px;
     }

     
    </style>








<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
    
    <!--         <button type="button" class="btn-primary btn-md cetak" id="cetak">Report</button> -->
            
            <h4 class="card-tittle" style="text-align: center;">Report Suhu</h4>
                <div class="container-fluid">
                    <div class="table table-striped">
                       
                        <!-- <div id="order-listing_wrapper" class="dataTables_wrapper container-fluid dt-bootstrap4 no-footer"><div class="row"><div class="col-sm-12 col-md-6"><div class="dataTables_length" id="order-listing_length"><label>Show <select name="order-listing_length" aria-controls="order-listing" class="form-control"><option value="5">5</option><option value="10">10</option><option value="15">15</option><option value="-1">All</option></select> entries</label></div></div><div class="col-sm-12 col-md-6"><div id="order-listing_filter" class="dataTables_filter"><label><input type="search" class="form-control" placeholder="Search" aria-controls="order-listing"></label></div></div></div> -->
                       
                        <div class="row">
                        <div class="col-sm-12">
                        <table id="order-listing" class="table dataTable no-footer" role="grid"
                         aria-describedby="order-listing_info">
                        <thead style="text-align: center;">
                            <tr role="row">

                                
                                <th class="sorting_asc" tabindex="0" aria-controls="order-listing" rowspan="1" 
                                colspan="1" aria-sort="ascending" aria-label="Order #: activate to sort column descending" 
                                style="width: 73px;"> Id </th>
                                
                                <th class="sorting_asc" tabindex="0" aria-controls="order-listing" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Order #: activate to sort column descending" 
                                style="width: 73px;"> No </th>
                                
                                <th class="sorting" tabindex="0" aria-controls="order-listing" rowspan="1" colspan="1" aria-label="Purchased On: activate to sort column ascending" 
                                style="width: 125px;"> Temperature </th>
                                
                                <th class="sorting" tabindex="0" aria-controls="order-listing" rowspan="1" colspan="1" aria-label="Customer: activate to sort column ascending" 
                                style="width: 91px;"> Waktu </th>
                                
                                <!-- <th class="sorting" tabindex="0" aria-controls="order-listing" rowspan="1" colspan="1" aria-label="Base Price: activate to sort column ascending" 
                                style="width: 94px;"> Status </th> -->
                                
                                <!-- <th class="sorting" tabindex="0" aria-controls="order-listing" rowspan="1" colspan="1" aria-label="Actions: activate to sort column ascending" 
                                style="width: 71px;"> Actions </th> -->
                            
                            </tr>
                        </thead>
                        <tbody>
                        
                        <?php
                        
                        include '../../Monitoring/config/koneksi.php';

                        $query = "SELECT * FROM monitoring_suhu ORDER BY id ASC";
                        $tampil= mysqli_query($koneksi,$query);

                        $no = 1;

                        while($data=mysqli_fetch_array($tampil,MYSQLI_BOTH)){
                            $temperature=$data['temperature'];
                        
                        ?>

                            <tr style="text-align: center;">
                                <td><?php echo $data['id'];?></td>
                                <td><?php echo $no++; ?></td>
                                <td><?php echo $data['temperature'];?></td>
                                <td><?php echo $data['waktu']; ?></td>
                                
                                
                                
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

<link rel="stylesheet" href="../css/bootstrap.min.css">


<script type="text/javascript">
//  $(document).ready(function() {
//     $('#order-listing').DataTable( {
//         dom: 'Bfrtip',
//         buttons: [
//             {
//                 extend: 'excelHtml5',
//                 title: 'Report Suhu'
//             },

//             {
//                 extend: 'pdfHtml5',
//                 title: 'Report Suhu'
//             }
//         ]
//     });
// });


    $(document).ready(function() {
    $('#order-listing').DataTable( {
        dom: 'Bfrtip',
        buttons: [
        // 'copy', 'csv','print',
            {
                extend: 'copyHtml5',
                title: 'Report Suhu'
            },

            {
                extend: 'csvHtml5',
                title: 'Report Suhu'
            },


            {
                extend: 'excelHtml5',
                title: 'Report Suhu'
            },

            {
                extend: 'pdfHtml5',
                title: 'Report Suhu'
            },

            {
                extend: 'print',
                title: 'Report Suhu'
            }


        ]
    });
});
</script>