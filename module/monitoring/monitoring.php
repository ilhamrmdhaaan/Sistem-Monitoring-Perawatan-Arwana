<!-- style -->
<style>

    #chartdiv {
    
    width: 100%;
    height: 600px;
    
    }

</style>




<div class="container">
    <div class="col-md-4 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title mb-0">CELCIUS</h4>
                <div class="d-flex justify-content-between">
                    <div class="d-inline-block pt-3">
                        <div class="d-md-flex">
                            
                        </div>

                        <br>
                        
                    </div>

                    <div class="d-inline-block">
                        <img src="../images/celcius.png" class="img-lg rounded" style="height:150px; width:190px;" alt="profile image">
                    </div>
                </div>
            </div>
        </div>
    </div>

<!-- Card Temperature -->
<!-- <div class="card">
  <div class="card-header">
    Pilih Temperature & Waktu
  </div>
<div class="card-body">

<div class="form-group">
    <label for="temperature">Temperature</label>
    <input type="number" class="form-control" id="temperature" name="temperature" placeholder="...">
  </div>

<div class="form-group">
    <label for="waktu">Waktu</label>
    <input type="date" class="form-control" id="waktu" name="waktu" 
    value="" placeholder="...">
  </div>

  <button type="submit" class="btn btn-primary">Search</button>

  </div>
</div> -->
<!-- Akhir Card Temperature -->

<br>    

<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div id="chartdiv"></div>
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

dateAxis.tooltipDateFormat = "yyyy-MM-dd";

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