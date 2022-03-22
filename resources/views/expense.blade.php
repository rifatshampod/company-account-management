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
                  <h1>All Expense</h1>
                </div>
              </div>
            </div>
            <!-- /# column -->
            <div class="col-lg-4 p-l-0 title-margin-left">
              <div class="page-header">
                <div class="page-title">
                  <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                    <li class="breadcrumb-item active">All Expense</li>
                  </ol>
                </div>
              </div>
            </div>
            <!-- /# column -->
          </div>
          <!-- /# row -->
          <section id="main-content">
            <div class="row">
              <div class="col-lg-12">
                <div class="card">
                  <div class="d-flex justify-content-end">
                    <div>
                      <button onclick="location.href='add-expense'" type="button" class="btn btn-primary btn-flat btn-addon m-b-10 m-l-5"><i class="ti-plus"></i>Add Expense</button>
                    </div>
                  </div>
                  <div class="bootstrap-data-table-panel">
                    <div class="table-responsive">
                      <table
                        id="bootstrap-data-table-export"
                        class="table table-striped table-bordered"
                      >
                        <thead>
                          <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>Category</th>
                            <th>Project/Client</th>
                            <th>Amount</th>
                            <th>Date</th>
                            <th>Action</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td>01</td>
                            <td>Domain</td>
                            <td>Hosting</td>
                            <td>Evocation</td>
                            <td>$100</td>
                            <td>20-04-2022</td>
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

                          <tr>
                            <td>01</td>
                            <td>Domain</td>
                            <td>Hosting</td>
                            <td>Evocation</td>
                            <td>$100</td>
                            <td>20-04-2022</td>
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
                          <tr>
                            <td>01</td>
                            <td>Domain</td>
                            <td>Hosting</td>
                            <td>Evocation</td>
                            <td>$100</td>
                            <td>20-04-2022</td>
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
                          <tr>
                            <td>01</td>
                            <td>Domain</td>
                            <td>Hosting</td>
                            <td>Evocation</td>
                            <td>$100</td>
                            <td>20-04-2022</td>
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