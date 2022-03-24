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
                              <h1>Single Client</h1>
                            </div>
                          </div>
                        </div>
                        <!-- /# column -->
                        <div class="col-lg-4 p-l-0 title-margin-left">
                          <div class="page-header">
                            <div class="page-title">
                              <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                                <li class="breadcrumb-item active">Single Client</li>
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

                          
                          <h5>Client Name</h5>
                          <p>{{$clients->name}}</p>
                          
                            
                        </div>
                        <div class="w-20">
                            <h5>Client ID</h5>
                            <p>{{$clients->client_id}}</p>
                        </div>
                        <div class="w-20">
                            <h5>Company</h5>
                            <p>{{$clients->company}}</p>
                        </div>
                        <div class="w-20">
                            <h5>Country</h5>
                            <p>{{$clients->country}}</p>
                        </div>
                        <div class="w-20">
                            <h5>Status</h5>
                            <p>{{$clients->status}}</p>
                        </div>
                    </div>
                    <div class="d-flex mb-5">
                        <div class="w-20">
                            <h5>Email</h5>
                            <p>{{$clients->email}}</p>
                        </div>
                        <div class="w-20">
                            <h5>Phone</h5>
                            <p>{{$clients->phone}}</p>
                        </div>
                        <div class="w-20">
                            <h5>WhatsApp</h5>
                            <p>{{$clients->whatsapp}}</p>
                        </div>
                        <div class="w-15">
                            <h5>Address</h5>
                            <p>{{$clients->address}}</p>
                        </div>
                        <div class="w-5"></div>  <!--  extra space to differentiate address and type-->
                        <div class="w-20">
                            <h5>Type</h5>
                            <p>{{$clients->category}}</p>
                        </div>
                    </div>
                    <div class="mb-2">
                        <h4>Work History</h4>
                    </div>
                    <div class="bootstrap-data-table-panel">
                        <div class="table-responsive table-bordered">
                          <table
                            id=""
                            class="table table-striped table-bordered">
                            <thead>
                              <tr>
                                <th>Project</th>
                                <th>Budget</th>
                                <th>Due</th>
                                <th>Yearly Renewal</th>
                                <th>Renewal Date</th>
                                <th>Action</th>
                              </tr>
                            </thead>
                            <tbody>
                              @foreach ($projects as $item)
                              <tr>
                                <td>{{$item['project_name']}}</td>
                                <td>{{$item['budget']}}</td>
                                <td>{{$item['budget']-$item['advance']}}</td>
                                <td>{{$item['renewal_charge']}}</td>
                                <td>{{$item['next_renewal_date']}}</td>
                                <td>
                                  
                                    <div class="employeeTableIcon">
                                      <a href="{{url('single-project='.$item['id'])}}">
                                        <div class="employeeTableIconDiv Icon1 d-flex justify-content-center align-items-center mr-1">
                                            <i class="ti-eye"></i>
                                        </div>
                                      </a>
                                    </div>
                                  
                                </td>
                              </tr>
                              @endforeach
                              
                             
                            </tbody>
                          </table>
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
