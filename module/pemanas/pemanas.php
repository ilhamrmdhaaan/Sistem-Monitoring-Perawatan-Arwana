<style>
.minitoggle{
  position: relative;
  width: 90px;
  height: 54px;
  background-color: #EBEBEB;
  border: 1px solid #E6E6E6;
  border-radius: 56px;
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
</style>

<div class="row">
    <div class="col-md-6 grid-margin">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title mb-0">HEATER</h4>
                <div class="d-flex justify-content-between align-items-center">
                    <div class="d-inline-block pt-3">
                        <div class="d-md-flex">
                            <div class="toggle-heater">
                                <div class="minitoggle">
                                    <div class="toggle-handle"></div>
                                </div>
                            </div>
                        </div>
                        <br>
                        
                        <div class="d-flex align-items-center ml-md-2 mt-2 mt-md-0">
                            <i class="icon-clock text-muted"></i>
                            <small class=" ml-1 mb-0">Updated: 9:10am</small>
                        </div>
                    </div>
                    
                    <div class="d-inline-block">
                        <img src="../images/heater2.png" class="img-lg rounded" style="height:150px; width:150px;" alt="profile image">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-md-6 grid-margin">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title mb-0">Aquascape</h4>
                <div class="d-flex justify-content-between align-items-center">
                    <div class="d-inline-block pt-3">
                            <div class="d-md-flex">
                                <div class="toggle-aquascape">
                                    <div class="minitoggle">
                                        <div class="toggle-handle"></div>
                                    </div>
                                </div>
                            </div>
                            <br>
                    
                            <div class="d-flex align-items-center ml-md-2 mt-2 mt-md-0">
                                <i class="icon-clock text-muted"></i>
                                <small class=" ml-1 mb-0">Updated: 9:10am</small>
                            </div>
                          </div>
                    
                    <div class="d-inline-block">
                        <img src="../images/fan.png" class="img-lg rounded" style="height:150px; width:120px;" alt="profile image">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<script>
    $('.toggle-heater').minitoggle({
        on: false // or true
    });
    $('.toggle-aquascape').minitoggle({
        on: false // or true
    });
</script>