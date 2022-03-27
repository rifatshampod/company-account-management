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
                  <h1>Add Project</h1>
                </div>
              </div>
            </div>
            <!-- /# column -->
            <div class="col-lg-4 p-l-0 title-margin-left">
              <div class="page-header">
                <div class="page-title">
                  <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                    <li class="breadcrumb-item active">Add Project</li>
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
                    <form action="add-project" method="post">
                      @csrf 
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label> Project Name</label>
                                    <input type="text" name="name" class="form-control input-default" placeholder="Project Name" required>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Stakeholder</label>
                                    <a href="create-client">
                                      <img class="ml-2" width="20px" src="assets/images/plus.png" alt="">
                                    </a>
                                    <select class="form-control input-default " name="client">
                                      @foreach($clientlist as $item)
                                        <option value="{{$item['id']}}">{{$item['name']}}</option>
                                      @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Category</label>
                                    <a href="project-category">
                                      <img class="ml-2" width="20px" src="assets/images/plus.png" alt="">
                                    </a>
                                    <select class="form-control input-default " name="category">
                                      @foreach($categorylist as $item)
                                      <option value="{{$item['id']}}">{{$item['name']}}</option>
                                      @endforeach
                                        
                                        
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Budget</label>
                                    <input type="number" name="budget" class="form-control input-default" placeholder="Budget" required>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Advance</label>
                                    <input type="number" name="advance" class="form-control input-default" placeholder="Advance" required>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Start Date</label>
                                    <input type="date" name="start_date" class="form-control input-default" placeholder="Phone Number" required>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Due Date</label>
                                    <input type="date" name="due_date" class="form-control input-default" placeholder="Phone Number" required>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Payment Status</label>
                                    <select class="form-control input-default" name="status">
                                        <option value="No Payment">No Payment</option>
                                        <option value="Advance Paid">Advance Paid</option>
                                        <option value="Payment Completed">Payment Completed</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Renewal</label>
                                    <select class="form-control input-default" name="renewal">
                                        <option value="yearly">Yearly</option>
                                        <option value="no renewal">No renewal</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Renewal Charge</label>
                                    <input type="number" name="renewal_charge" class="form-control input-default" placeholder="Renewal Charge" required>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Renewal Date</label>
                                    <input type="date" name="renewal_date" class="form-control input-default" placeholder="Renewal Date" required>
                                </div>
                            </div>
                        </div>
                        <div class="row justify-content-center">
                            <div class="col-lg-3">
                                <button onclick="location.href='projects'" type="button" class="btn btn-danger  btn-block m-b-10">Cancel</button>
                            </div>
                            <div class="col-lg-3">
                                <button type="submit" class="btn btn-primary btn-block m-b-10">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
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
