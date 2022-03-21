<!DOCTYPE html>
<html lang="en">
  <x-header/>

  <body>
    <x-sidenav/>

    <div class="content-wrap">
      <div class="main">
        <div class="container-fluid">
          <div class="row">
            <div class="col-lg-8 p-r-0 title-margin-right">
              <div class="page-header">
                <div class="page-title">
                  <h1>Welcome Admin</h1>
                </div>
              </div>
            </div>
            <!-- /# column -->
            <div class="col-lg-4 p-l-0 title-margin-left">
              <div class="page-header">
                <div class="page-title">
                  <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                    <li class="breadcrumb-item active">All</li>
                  </ol>
                </div>
              </div>
            </div>
            <!-- /# column -->
          </div>
          <!-- /# row -->
          <section id="main-content">
            <div class="row">
              <div class="col-xl-3 col-lg-6">
                <div class="card">
                  <div class="stat-widget-one">
                    <div class="stat-icon dib">
                      <i class="ti-money color-success border-success"></i>
                    </div>
                    <div class="stat-content dib">
                      <div class="stat-text">Total Profit</div>
                      <div class="stat-digit">1,012</div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-xl-3 col-lg-6">
                <div class="card">
                  <div class="stat-widget-one">
                    <div class="stat-icon dib">
                      <i class="ti-user color-primary border-primary"></i>
                    </div>
                    <div class="stat-content dib">
                      <div class="stat-text">New Customer</div>
                      <div class="stat-digit">961</div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-xl-3 col-lg-6">
                <div class="card">
                  <div class="stat-widget-one">
                    <div class="stat-icon dib">
                      <i class="ti-layout-grid2 color-pink border-pink"></i>
                    </div>
                    <div class="stat-content dib">
                      <div class="stat-text">Active Projects</div>
                      <div class="stat-digit">770</div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-xl-3 col-lg-6">
                <div class="card">
                  <div class="stat-widget-one">
                    <div class="stat-icon dib">
                      <i class="ti-link color-danger border-danger"></i>
                    </div>
                    <div class="stat-content dib">
                      <div class="stat-text">Referral</div>
                      <div class="stat-digit">2,781</div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-lg-8">
                <div class="card">
                  <div class="card-title">
                    <h4>Today's Employee</h4>
                  </div>
                  <div class="card-body">
                    <div class="table-responsive">
                      <table class="table table-striped table-bordered">
                        <thead class="table-bordered">
                          <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>Department</th>
                            <th>Date of joining</th>
                            <th>Email</th>
                            <th>Contact</th>
                            <th>Designation</th>
                            <th>Remark</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <th scope="row">1</th>
                            <td>Arif Bipu</td>
                            <td>Development</td>
                            <td>13 Jan 2022</td>
                            <td>info@gmail.com</td>
                            <td>01676044462</td>
                            <td>Senior Developer</td>
                            <td>Parmanent</td>
                          </tr>
                          <tr>
                            <th scope="row">1</th>
                            <td>Arif Bipu</td>
                            <td>Development</td>
                            <td>13 Jan 2022</td>
                            <td>info@gmail.com</td>
                            <td>01676044462</td>
                            <td>Senior Developer</td>
                            <td>Parmanent</td>
                          </tr>
                          <tr>
                            <th scope="row">1</th>
                            <td>Arif Bipu</td>
                            <td>Development</td>
                            <td>13 Jan 2022</td>
                            <td>info@gmail.com</td>
                            <td>01676044462</td>
                            <td>Senior Developer</td>
                            <td>Parmanent</td>
                          </tr>
                          <tr>
                            <th scope="row">1</th>
                            <td>Arif Bipu</td>
                            <td>Development</td>
                            <td>13 Jan 2022</td>
                            <td>info@gmail.com</td>
                            <td>01676044462</td>
                            <td>Senior Developer</td>
                            <td>Parmanent</td>
                          </tr>
                          <tr>
                            <th scope="row">1</th>
                            <td>Arif Bipu</td>
                            <td>Development</td>
                            <td>13 Jan 2022</td>
                            <td>info@gmail.com</td>
                            <td>01676044462</td>
                            <td>Senior Developer</td>
                            <td>Parmanent</td>
                          </tr>
                          <tr>
                            <th scope="row">1</th>
                            <td>Arif Bipu</td>
                            <td>Development</td>
                            <td>13 Jan 2022</td>
                            <td>info@gmail.com</td>
                            <td>01676044462</td>
                            <td>Senior Developer</td>
                            <td>Parmanent</td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-lg-4">
                <div class="card">
                  <div class="card-body">
                    <div class="panel">
                      <div class="panel-heading">
                        <div class="panel-title">
                          <h4>Department</h4>
                        </div>
                      </div>
                      <div class="panel-body">
                        <canvas id="doughutChart"></canvas>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-xl-4 col-lg-6">
                <div class="card">
                  <div class="card-body">
                    <div class="panel">
                      <div class="panel-heading">
                        <div class="panel-title">
                          <h4>Employee Designation</h4>
                        </div>
                      </div>
                      <div class="panel-body">
                        <canvas id="doughutChart2"></canvas>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-xl-4 col-lg-6">
                <div class="card">
                  <div class="card-body">
                    <div class="panel">
                      <div class="panel-heading">
                        <div class="panel-title">
                          <h4>Expense Vs Deposit</h4>
                        </div>
                      </div>
                      <div class="panel-body">
                        <canvas id="doughutChart3"></canvas>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-xl-4 col-lg-6">
                <div class="card">
                  <div class="card-body">
                    <div class="panel">
                      <div class="panel-heading">
                        <div class="panel-title">
                          <h4>Project Status</h4>
                        </div>
                      </div>
                      <div class="panel-body">
                        <canvas id="doughutChart4"></canvas>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>
        </div>
      </div>
    </div>

    <!-- jquery vendor -->
    <script src="assets/js/lib/jquery.min.js"></script>
    <script src="assets/js/lib/jquery.nanoscroller.min.js"></script>
    <!-- nano scroller -->
    <script src="assets/js/lib/menubar/sidebar.js"></script>
    <!-- <script src="assets/js/lib/preloader/pace.min.js"></script> -->
    <!-- sidebar -->

            <!--  Chart js -->
    <!--  Chart js -->
    <script src="assets/js/lib/chart-js/Chart.bundle.js"></script>
    <script src="assets/js/lib/chart-js/chartjs-init.js"></script>
    <!-- // Chart js -->
    <!-- // Chart js -->

    <script src="assets/js/lib/bootstrap.min.js"></script>
    <script src="assets/js/scripts.js"></script>
    <!-- bootstrap -->

    <!-- <script src="assets/js/lib/calendar-2/moment.latest.min.js"></script> -->
    <!-- <script src="assets/js/lib/calendar-2/pignose.calendar.min.js"></script> -->
    <!-- <script src="assets/js/lib/calendar-2/pignose.init.js"></script> -->

    <!-- <script src="assets/js/lib/weather/jquery.simpleWeather.min.js"></script> -->
    <!-- <script src="assets/js/lib/weather/weather-init.js"></script> -->
    <script src="assets/js/lib/circle-progress/circle-progress.min.js"></script>
    <script src="assets/js/lib/circle-progress/circle-progress-init.js"></script>
    <!-- <script src="assets/js/lib/chartist/chartist.min.js"></script> -->
    <!-- <script src="assets/js/lib/sparklinechart/jquery.sparkline.min.js"></script> -->
    <!-- <script src="assets/js/lib/sparklinechart/sparkline.init.js"></script> -->
    <!-- <script src="assets/js/lib/owl-carousel/owl.carousel.min.js"></script>
    <script src="assets/js/lib/owl-carousel/owl.carousel-init.js"></script> -->
    <!-- scripit init-->
    <!-- <script src="assets/js/dashboard2.js"></script> -->
  </body>
</html>
