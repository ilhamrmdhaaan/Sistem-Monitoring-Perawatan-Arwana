<!-- Styles -->
<style>

    #chartdiv {
    width: 100%;
    height: 600px;
    
    }

</style>
<!-- Akhir Chart -->


<!-- Toggle -->
<style>
.minitoggle{
  position: relative;
  width: 50px;
  height: 50px;
  background-color: #EBEBEB;
  border: 1px solid #E6E6E6;
  border-radius: 50px;
  box-shadow: inset 0 0 4px rgba(0, 0, 0, .1);
}

.minitoggle .toggle-handle {
  position: absolute;
  top: 3px;
  left: 3px;
  z-index: 2;
  width: 48px;
  height: 48px;
  background-color: #fff;
  background-image: -webkit-linear-gradient(top, #fff 0, #f2f2f2 100%);
  background-image: linear-gradient(to bottom, #fff 0, #f2f2f2 100%);
  border-radius: 100px;
  -webkit-transition: -webkit-transform 0.1s ease-in-out, border 0.1s ease-in-out;
  transition: transform 0.1s ease-in-out, border 0.1s ease-in-out;
  box-shadow: 0px 2px 3px 0 rgba(0,0,0,0.20);
  
}

.minitoggle.active {
  background-color: #4CD964;
  border: 1px solid #4CD964;
  box-shadow: inset 0 0 15px rgba(255, 255, 255, .25);
}

.minitoggle.active .toggle-handle {
  transform: translate3d(28px,0,0);
}

/*blue*/
.minitoggle.blue.active {
  background-color: #69BDFE;
  border-color: #69BDFE;
}

.minitoggle.blue.active .toggle-handle {
  border-color: #3C78A5;
}

/*yellow*/
.minitoggle.yellow.active {
  background-color: #FFE186;
  border-color: #FFE186;
}

.minitoggle.yellow.active .toggle-handle {
  border-color: #F1C12F;
}

/*red*/
.minitoggle.red.active {
  background-color: #F79A7A;
  border-color: #F79A7A;
}

.minitoggle.red.active .toggle-handle {
  border-color: #EC6231;
}

/*orange*/
.minitoggle.orange.active {
  background-color: #FFB777;
  border-color: #FFB777;
}

.minitoggle.orange.active .toggle-handle {
  border-color: #F70;
}

/*AWal Card Jadwal-Pakan*/
.jadwal-pakan.card {
  border-radius: 20px;
}
/*Akhir Card Jadwal-Pakan*/

/*AWal Card Monitoring*/
.monitoring.card {
  border-radius: 20px;
}
/*Akhir Card Monitoring*/


/*Awal Card Report Jadwal*/
.report-jadwal.card {
  border-radius: 20px;
}
/*Akhir Card Report Jadwal*/



/*Awal Card Report Jadwal*/
.report-suhu.card {
  border-radius: 20px;
}
/*Akhir Card Report Jadwal*/

/*Awal Card Heater*/
.heater.card {
  border-radius: 30px;
}
/*Akhir Card Heater*/


/*Awal Card Kipas*/
.kipas.card {
  border-radius: 30px;
}
/*Akhir Card Kipas*/


</style>
<!-- Akhir CSS Toggle -->
<div class="container">
<div class="row" style="padding: 10px;">
    <div class="col-md">
    <div class="card jadwal-pakan">
        <div class="card-body">
        <div class="d-flex flex-row">
            <img src="../images/jadwal-pakan.jpg" class="img-lg rounded" alt="profile image">
            <div class="ml-3">
            <h5>Penjadwalan Pakan</h5>
            <a href="index.php?page=jadwal" class="btn btn-primary btn-sm" style="margin: 7px;">Detail</a>
            </div>
        </div>
        </div>
    </div>
    </div>

<!-- Close Card Pemanas -->
    <!-- <div class="col-md-3 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
        <div class="d-flex flex-row">
            <img src="../images/heater2.png" class="img-lg rounded" alt="profile image">
            <div class="ml-3">
            <h5>Pemanas & Pendingin</h5>
            <a href="index.php?page=pemanas" class="btn btn-primary btn-sm">Detail</a>
            </div>
        </div>
        </div>
    </div>
    </div> -->
<!-- Akhir Close Card Pemanas -->
    
    <div class="col-md">
    <div class="card monitoring">
        <div class="card-body">
        <div class="d-flex flex-row">
            <img src="../images/suhu.png" class="img-lg rounded" alt="profile image">
            <div class="ml-3">
            <h5>Monitoring Suhu</h5>
            <a href="index.php?page=monitoring" class="btn btn-primary btn-sm" style="margin: 7px;">Detail</a>
            </div>
        </div>
        </div>
    </div>
    </div>
    
    <div class="col-md">
        <div class="card report-jadwal">
        <div class="card-body">
            <div class="d-flex flex-row">
            <img src="../images/report.png" class="img-lg rounded" alt="profile image">
            <div class="ml-3">
            <h5>Report</h5><h5>Jadwal</h5>
            <a href="index.php?page=report" class="btn btn-primary btn-sm">Detail</a>
            </div>
            </div>
        </div>
        </div>
    </div>
    
        <div class="col-md">
        <div class="card report-suhu">
        <div class="card-body">
            <div class="d-flex flex-row">
            <img src="../images/report2.png" class="img-lg rounded" alt="profile image">
            <div class="ml-3">
            <h5>Report</h5><h5>Suhu</h5>
            <a href="index.php?page=report_suhu" class="btn btn-primary btn-sm">Detail</a>
            </div>
            </div>
        </div>
        </div>
    </div>

</div>
</div>

<!-- Card Pemanas -->
  <div class="row" style="padding: 10px;">
      <div class="col-sm">
          <div class="card heater">
              <div class="card-body">
                  <h4 class="card-title mb-0">MANUAL HEATER</h4>
                  <div class="d-flex justify-content-between align-items-center">
                      <!-- Toggle Manual -->
                      <div class="d-inline-block pt-3">
                          <div class="d-md-flex">
                          <label style="margin: 10px;">OFF</label>
                              <div class="toggle-heater">
                                  <div class="minitoggle" data-on="on">
                                      <div class="toggle-handle"></div>
                                  </div>
                              </div>
                              <label style="margin: 10px;">ON</label>
                          </div>
<!--                           <h4 class="card-title" style="padding: 10px;">MANUAL HEATER</h4> -->
                          <!-- Akhir Toggle Manual -->
                          
                          <br>
                      
                          <!-- Toggle Auto -->
                          <div class="d-md-flex">
                          <label style="margin: 10px;">OFF</label>
                              <div class="toggle-heater-auto">
                                  <div class="minitoggle">
                                      <div class="toggle-handle"></div>
                                  </div>
                              </div>
                              <label style="margin: 10px;">ON</label>
                          </div>
                          <h4 class="card-title" style="padding: 10px; margin: 10px;">AUTO HEATER</h4>
                      </div>
                      <!-- Akhir Toggle Auto -->

                      <div class="d-inline-block">
                          <img src="../images/heater2.png" class="img-lg rounded" style="margin:0 50px; height:100px; width:100px;" alt="profile image">
                      </div>
                  </div>
              </div>
          </div>
      </div>
    <!-- Akhir Card Pemanas -->


<!-- Card Pendingin -->
    <div class="col-sm">
        <div class="card kipas">
            <div class="card-body">
                <h4 class="card-title mb-0">MANUAL Aquascape</h4>
                <div class="d-flex justify-content-between align-items-center">
                    <!-- Awal Toggle Manual -->
                    <div class="d-inline-block pt-3">
                            <div class="d-md-flex">
                            <label style="margin: 10px;">OFF</label>
                                <div class="toggle-aquascape">
                                    <div class="minitoggle">
                                        <div class="toggle-handle"></div>
                                    </div>
                                </div>
                              <label style="margin: 10px;">ON</label>
                            </div>
<!--                             <h4 class="card-title" style="padding: 10px;">MANUAL AQUASCAPE</h4> -->
                            <!-- Akhir Toggle Manual -->
                            <br>
                    
                            
                            <!-- Awal Toggle Auto -->
                            <div class="d-md-flex">
                            <label style="margin: 10px;">OFF</label>
                              <div class="toggle-aquascape-auto">
                                  <div class="minitoggle">
                                      <div class="toggle-handle"></div>
                                  </div>
                              </div>
                              <label style="margin: 10px;">ON</label>
                          </div>
                          <h4 class="card-title" style="padding: 10px; margin: 10px;">AUTO AQUASCAPE</h4>
                        </div>
                    <!-- Akhir Toggle Auto -->

                    <div class="d-inline-block">
                        <img src="../images/fan.png" class="img-lg rounded" style="margin:0 50px; height:100px; width:100px;" alt="profile image">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Akhir Card Pendingin -->


<div class="row">
    <div class="col-md-12">
        <div class="card">
          
            <div id="chartdiv">
            </div>
        </div>
    </div>
</div>


<script src="https://www.amcharts.com/lib/4/core.js"></script>
<script src="https://www.amcharts.com/lib/4/charts.js"></script>
<script src="https://www.amcharts.com/lib/4/themes/animated.js"></script>


<!-- Chart code -->
<script>

// // Themes begin
// am4core.useTheme(am4themes_animated);
// Themes end

var dataChart;

// ajax
$.ajax ({  
  url: "http://localhost/Monitoring/module/api/api.php",
  async: false,
  success: function(data) {
    dataChart = JSON.parse(data);
  }

});

am4core.ready(function() {

// Themes begin
am4core.useTheme(am4themes_animated);
// Themes end

// Create chart instance
var chart = am4core.create("chartdiv", am4charts.XYChart);

// Add data
chart.data = dataChart;

// Set input format for the dates
chart.dateFormatter.inputDateFormat = "yyyy-MM-dd, HH:mm:ss";

// Create axes
var dateAxis = chart.xAxes.push(new am4charts.DateAxis());
var valueAxis = chart.yAxes.push(new am4charts.ValueAxis());

// Create series
var series = chart.series.push(new am4charts.LineSeries());
series.dataFields.valueY = "value";
series.dataFields.dateX = "date";
series.tooltipText = "{value}, {date}"
series.strokeWidth = 2;
series.minBulletDistance = 15;

// Drop-shaped tooltips
series.tooltip.background.cornerRadius = 20;
series.tooltip.background.strokeOpacity = 0;
series.tooltip.pointerOrientation = "vertical";
series.tooltip.label.minWidth = 40;
series.tooltip.label.minHeight = 40;
series.tooltip.label.textAlign = "middle";
series.tooltip.label.textValign = "middle";

// Make bullets grow on hover
var bullet = series.bullets.push(new am4charts.CircleBullet());
bullet.circle.strokeWidth = 2;
bullet.circle.radius = 4;
bullet.circle.fill = am4core.color("#fff");

var bullethover = bullet.states.create("hover");
bullethover.properties.scale = 1.3;

// Make a panning cursor
chart.cursor = new am4charts.XYCursor();
chart.cursor.behavior = "panXY";
chart.cursor.xAxis = dateAxis;
chart.cursor.snapToSeries = series;

dateAxis.tooltipDateFormat = "yyyy-MM-dd 'at' HH:mm:ss zzz";

// Create vertical scrollbar and place it before the value axis
chart.scrollbarY = new am4core.Scrollbar();
chart.scrollbarY.parent = chart.leftAxesContainer;
chart.scrollbarY.toBack();

// Create a horizontal scrollbar with previe and place it underneath the date axis
chart.scrollbarX = new am4charts.XYChartScrollbar();
chart.scrollbarX.series.push(series);
chart.scrollbarX.parent = chart.bottomAxesContainer;


chart.events.on("ready", function () {
  dateAxis.zoom({start:0.79, end:1});
});

}); // end am4core.ready()

</script>




<!-- Js Pemanas Dan Pendingin -->
<link rel="stylesheet" href="../css/minitoggle.css">

<script src="../js/minitoggle.js"></script>

<script>

  var tg_heater = false;
  var tg_heater_auto = false;
  var tg_kipas = false;
  var tg_kipas_auto = false;

  var cls_heater = $('.toggle-heater');
  var cls_heater_auto = $('.toggle-heater-auto');
  var cls_kipas = $('.toggle-aquascape');
  var cls_kipas_auto = $('.toggle-aquascape-auto');

  $(document).ready(function(){

    cls_heater.minitoggle({
      on: false // or true
    });

    cls_heater_auto.minitoggle({
      on: false // or true
    });

    cls_kipas.minitoggle({
      on: false // or true
    });

    cls_kipas_auto.minitoggle({
      on: false // or true
    });

    check_relay_device();
    relay_action();

    
    setInterval(function(){ check_relay_device(); }, 10000);

  });

  function relay_action(){
    cls_heater.find('.toggle-handle').on("click", function(e){


      if (!cls_heater.find('.toggle-handle').parent().hasClass('active')){
        toggle_on(this);
        change_relay_status('heater_st',1);
      }
      else{
        toggle_off(this)
        change_relay_status('heater_st',0);
      }
    });

    cls_heater_auto.find('.toggle-handle').on("click", function(e){
      if (!$(cls_heater_auto).find('.toggle-handle').parent().hasClass('active')){
        toggle_on(this);
        change_relay_status('heater_auto',1);
      }
      else{
        toggle_off(this)
        change_relay_status('heater_auto',0);
      }
    });

    cls_kipas.find('.toggle-handle').on("click", function(e){
      if (!$(cls_kipas).find('.toggle-handle').parent().hasClass('active')){
        toggle_on(this);
        change_relay_status('kipas_st',1);
      }
      else{
        toggle_off(this)
        change_relay_status('kipas_st',0);
      }
    });

    cls_kipas_auto.find('.toggle-handle').on("click", function(e){
      if (!$(cls_kipas_auto).find('.toggle-handle').parent().hasClass('active')){
        toggle_on(this);
      change_relay_status('kipas_auto',1);
      }
      else{
        toggle_off(this)
        change_relay_status('kipas_auto',0);
      }
    });
  }

  function check_relay_device(){
    $.ajax({
        type: "GET",
        url: "http://localhost/monitoring/arduino/get_relay_status.php",
        contentType: "application/json; charset=utf-8",
        dataType: "json",
        success: function(result){
          // console.log(result);
          tg_heater = (result.stHeater == 1 ? toggle_on(cls_heater) : toggle_off(cls_heater));
          tg_heater_auto = (result.autoHeater == 1 ? toggle_on(cls_heater_auto) : toggle_off(cls_heater_auto));
          tg_kipas = (result.stFan == 1 ? toggle_on(cls_kipas) :toggle_off(cls_kipas));
          tg_kipas_auto = (result.autoFan == 1 ? toggle_on(cls_kipas_auto) : toggle_off(cls_kipas_auto));

          

        }
    });
  }


  function change_relay_status(type,val){
    $.ajax({
        type: "GET",
        url: "http://localhost/monitoring/arduino/change_relay_status.php",
        contentType: "application/json; charset=utf-8",
        dataType: "json",
        data:{
          type : type,
          val : val,
        },
        success: function(response){
          // console.log(response.result);
        }
    });
  }

  function toggle_on(el){
    $(el).find('.minitoggle').addClass('active').find('.toggle-handle').css("transform","translate3d(34px, 0px, 0px");
  }

  function toggle_off(el){
    $(el).find('.minitoggle').removeClass('active').find('.toggle-handle').css("transform","translate3d(0px, 0px, 0px");
  }
</script>