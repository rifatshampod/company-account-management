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
                      <i class="ti-user color-success border-success"></i>
                    </div>
                    <div class="stat-content dib">
                      <div class="stat-text">Clients</div>
                      <div class="stat-digit">{{$client}}</div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-xl-3 col-lg-6">
                <div class="card">
                  <div class="stat-widget-one">
                    <div class="stat-icon dib">
                      <i class="ti-layout-grid2 color-primary border-primary"></i>
                    </div>
                    <div class="stat-content dib">
                      <div class="stat-text">Projects</div>
                      <div class="stat-digit">{{$project}}</div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-xl-3 col-lg-6">
                <div class="card">
                  <div class="stat-widget-one">
                    <div class="stat-icon dib">
                      <i class="ti-money color-pink border-pink"></i>
                    </div>
                    <div class="stat-content dib">
                      <div class="stat-text">Income</div>
                      <div class="stat-digit">{{$income}}</div>
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
                      <div class="stat-text">Expense</div>
                      <div class="stat-digit">{{$expense}}</div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-lg-8">
                <div class="card">
                  <div class="card-title">
                    <h4>Total Projects</h4>
                  </div>
                  <div class="card-body">
                    <div class="table-responsive">
                    <table
                        id="bootstrap-data-table-export"
                        class="table table-striped table-bordered">
                        <thead>
                          <tr>
                            <th>#</th>
                            <th>Project Name</th>
                            <th>Client Name</th>
                            <th>Renewal</th>
                            <th>Renewal Date</th>
                            <th>Payment Status</th>
                            <th>Action</th>
                          </tr>
                        </thead>
                        <tbody>
                          @foreach ($data as $item)
                          <tr>
                            <td>{{$item['id']}}</td>
                            <td>{{$item['name']}}</td>
                            <td>{{$item['client_name']}}</td>
                            <td>{{$item['renewal']}}</td>
                            <td>{{$item['renewal_date']}}</td>
                            <td>{{$item['status']}}</td>
                            <td>
                                <div class="employeeTableIcon d-flex">
                                    <div class="employeeTableIconDiv Icon1 d-flex justify-content-center align-items-center mr-1" onclick="location.href='profile.html'" onclick="location.href='profile.html'">
                                        <i class="ti-eye"></i>
                                    </div>
                                    <div class="employeeTableIconDiv Icon2 d-flex justify-content-center align-items-center mr-1">
                                        <i class="ti-trash"></i>
                                    </div>
                                    <div class="employeeTableIconDiv Icon3 d-flex justify-content-center align-items-center mr-1">
                                        <i class="ti-pencil-alt"></i>
                                    </div>
                                </div>
                            </td>
                          </tr>
                          @endforeach
                          

                          
                        </tbody>
                      </table>
                      <br>
                    <!-- --------------------------------- pagination ------------------------>
                      <div class="pagination d-flex justify-content-center align-items-center">
                        {{$data->links('vendor.pagination.bootstrap-4')}}
                      </div>
                    <!-- --------------------------------- pagination ------------------------>
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
                          <h4>Categories</h4>
                        </div>
                      </div>
                      <div class="panel-body">
                         <!-- Chart's container -->
                        <div id="chart" style="height: 300px;"></div>
                       
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
                          <h4>Expense Sector</h4>
                        </div>
                      </div>
                      <div class="panel-body">
                        <div id="chart2" style="height: 300px;"></div>
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
                          <h4>Deposit Vs Profit</h4>
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
    
     <!-- Charting library -->
     <script src="https://unpkg.com/echarts/dist/echarts.min.js"></script>
     <!-- Chartisan -->
     <script src="https://unpkg.com/@chartisan/echarts/dist/chartisan_echarts.js"></script>
     <!-- Your application script -->
     <script>
       const chart = new Chartisan({
         el: '#chart2',
         url: "@chart('expense_chart')",
         hooks: new ChartisanHooks()
         .datasets('pie')
         .legend()
         .colors()
         .tooltip()
         .axis(false)                         
       });

       const chart2 = new Chartisan({
         el: '#chart',
         url: "@chart('sample_chart')",
         hooks: new ChartisanHooks()
         .datasets('pie')
         .legend()
         .colors()
         .tooltip()
         .axis(false)                         
       });
     </script>

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
