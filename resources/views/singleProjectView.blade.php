<!DOCTYPE html>
<html lang="en">
  <x-header/>

  <body>
    <x-sidenav/>

    <div class="content-wrap">
      <div class="main">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="row">
                        <div class="col-lg-8 p-r-0 title-margin-right">
                          <div class="page-header">
                            <div class="page-title">
                              <h1>Single Project</h1>
                            </div>
                          </div>
                        </div>
                        <!-- /# column -->
                        <div class="col-lg-4 p-l-0 title-margin-left">
                          <div class="page-header">
                            <div class="page-title">
                              <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                                <li class="breadcrumb-item active">Single Project</li>
                              </ol>
                            </div>
                          </div>
                        </div>
                        <!-- /# column -->
                      </div>
                </div>
            </div>
          <!-- /# row -->
          <section id="main-content">
            <div class="row justify-content-center">
              <div class="col-lg-10">
                <div class="card pl-5 py-5">
                    <div class="d-flex mb-5">
                        <div class="w-20">
                            <h5>Project Title</h5>
                            <p>{{$projects->name}}</p>
                        </div>
                        <div class="w-20">
                            <h5>Category</h5>
                            <p>{{$projects->category}}</p>
                        </div>
                        <div class="w-20">
                            <h5>Payment status</h5>
                            <p>{{$projects->status}}</p>
                        </div>
                        <div class="w-20">
                            <h5>Start Date</h5>
                            <p>{{$projects->start_date}}</p>
                        </div>
                        <div class="w-20">
                            <h5>End Date</h5>
                            <p>{{$projects->due_date}}</p>
                        </div>
                    </div>
                    <hr>
                    <div class="mb-2">
                        <h4>Client</h4>
                    </div>
                    <div class="d-flex mb-5">
                        <div class="w-20">
                            <h5>Client Name</h5>
                            <p>{{$projects->client_name}}</p>
                        </div>
                        <div class="w-20">
                            <h5>Client ID</h5>
                            <p>{{$projects->client_unique_id}}</p>
                        </div>
                        <div class="w-20">
                            <h5>Company</h5>
                            <p>{{$projects->client_company}}</p>
                        </div>
                        <div class="w-20">
                            <h5>Country</h5>
                            <p>{{$projects->client_country}}</p>
                        </div>
                        <div class="w-20">
                            <h5>Status</h5>
                            <p>{{$projects->client_status}}</p>
                        </div>
                    </div>
                    <hr>
                    <div class="mb-2">
                        <h4>Finance</h4>
                    </div>
                    <div class="d-flex">
                        <div class="w-20">
                            <h5>Budget</h5>
                            <p>{{$projects->budget}}</p>
                        </div>
                        <div class="w-20">
                            <h5>Paid</h5>
                            <p>{{$projects->advance}}</p>
                        </div>
                        <div class="w-20">
                            <h5>Due</h5>
                            <p>{{$projects->budget - $projects->advance}}</p>
                        </div>
                        <div class="w-20">
                            <h5>Yearly Renewal</h5>
                            <p>{{$projects->renewal}}</p>
                        </div>
                        <div class="w-20">
                            <h5>Renewal Date</h5>
                            <p>{{$projects->next_renewal_date}}</p>
                        </div>
                    </div>
                </div>
                <!-- /# card -->
              </div>
              <!-- /# column -->
            </div>
            <!-- /# row -->
          </section>
        </div>
      </div>
    </div>

    <!-- jquery vendor -->
    <script src="assets/js/lib/jquery.min.js"></script>
    <script src="assets/js/lib/jquery.nanoscroller.min.js"></script>
    <!-- nano scroller -->
    <script src="assets/js/lib/menubar/sidebar.js"></script>
    <script src="assets/js/lib/preloader/pace.min.js"></script>
    <!-- sidebar -->

    <!-- bootstrap -->

    <script src="assets/js/lib/bootstrap.min.js"></script>
    <!-- <script src="assets/js/scripts.js"></script> -->
    <!-- scripit init-->
    <script src="assets/js/lib/data-table/datatables.min.js"></script>
    <!-- <script src="assets/js/lib/data-table/dataTables.buttons.min.js"></script> -->
    <!-- <script src="assets/js/lib/data-table/buttons.flash.min.js"></script> -->
    <!-- <script src="assets/js/lib/data-table/jszip.min.js"></script> -->
    <!-- <script src="assets/js/lib/data-table/pdfmake.min.js"></script> -->
    <!-- <script src="assets/js/lib/data-table/vfs_fonts.js"></script> -->
    <!-- <script src="assets/js/lib/data-table/buttons.html5.min.js"></script> -->
    <!-- <script src="assets/js/lib/data-table/buttons.print.min.js"></script> -->
    <script src="assets/js/lib/data-table/datatables-init.js"></script>
  </body>
</html>
