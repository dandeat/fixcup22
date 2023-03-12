        <!-- <div class="row">

                </div> -->
                <?php
                  // session_start();
                  if(isset($_SESSION['screen_width']) AND isset($_SESSION['screen_height'])){
                      // echo 'User resolution: ' .  . 'x' . $_SESSION['screen_height'];
                      $width = $_SESSION['screen_width'];
                  } else if(isset($_REQUEST['width']) AND isset($_REQUEST['height'])) {
                      $_SESSION['screen_width'] = $_REQUEST['width'];
                      $_SESSION['screen_height'] = $_REQUEST['height'];
                      header('Location: ' . $_SERVER['PHP_SELF']);
                  } else {
                      echo '<script type="text/javascript">window.location = "' . $_SERVER['PHP_SELF'] . '?width="+screen.width+"&height="+screen.height;</script>';
                  }
                  ?>
                <div class="row">
                  <div class="col-sm-12 col-xs-12">
                    <div class="row">
                      <div class="col-lg-4 col-xs-12">
                    <!-- small box -->
                    <div class="small-box bg-info">
                      <div class="inner">
                        <!-- <h3>50<sup style="font-size: 20px">%</sup></h3> -->
                            <h3><?= $webinar ?></h3>
                            <p>Total Pendaftar Webinar</p>
                          </div>
                          <div class="icon">
                            <i class="fas fa-file-alt"></i>
                          </div>
                          <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                        </div>
                      </div>
                      <!-- ./col -->

                      <div class="col-lg-4 col-xs-12">
                        <!-- small box -->
                        <div class="small-box bg-success">
                          <div class="inner">
                            <h3><?= $fixcup ?></h3>
                            <p>Total Pendaftar Fix Cup</p>
                          </div>
                          <div class="icon">
                            <i class="fas fa-clock"></i>
                          </div>
                          <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                        </div>
                      </div>
                      <div class="col-lg-4 col-xs-12">
                    <!-- small box -->
                        <div class="small-box bg-danger">
                          <div class="inner">
                            <h3><?= $konfirmasi ?></h3>
                            <p>Konfirmasi Pembayaran (Under Review)</p>
                          </div>
                          <div class="icon">
                            <i class="fas fa-sync-alt"></i>
                          </div>
                          <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                        </div>
                      </div>

                    </div>
                  </div>
                </div>

                  <!-- ./col -->

                <script>
          $(function () {
            var areaChartOptions = {
              maintainAspectRatio : false,
              responsive : true,
              legend: {
                display: false
              },
              scales: {
                xAxes: [{
                  gridLines : {
                    display : false,
                  }
                }],
                yAxes: [{
                  gridLines : {
                    display : false,
                  }
                }]
              }
            }
            // This will get the first returned node in the jQuery collection.
            var areaChart       = new Chart(areaChartCanvas, {
              type: 'line',
              data: areaChartData,
              options: areaChartOptions
            })
            var areaChart       = new Chart(areaChartCanvas2, {
              type: 'line',
              data: areaChartData2,
              options: areaChartOptions
            })
          });
        </script>
