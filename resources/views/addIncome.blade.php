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
                  <h1>Add Income</h1>
                </div>
              </div>
            </div>
            <!-- /# column -->
            <div class="col-lg-4 p-l-0 title-margin-left">
              <div class="page-header">
                <div class="page-title">
                  <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                    <li class="breadcrumb-item active">Add Income</li>
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
                  <form action="addIncome" method="POST">
                    @csrf
                        <div class="row justify-content-center">
                          <div class="col-lg-6">
                            <div class="form-group">
                                <label>Project Name</label>
                                <select class="form-control input-default " name="project"> 
                                  @foreach ($projectlist as $item)
                                  <option value="{{$item['id']}}">{{$item['name']}}</option>
                                  @endforeach
                                </select>
                            </div>
                          </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Amount</label>
                                    <input type="number" name="amount" class="form-control input-default" placeholder="Amount" required>
                                </div>
                            </div>
                            
                            <div class="col-lg-6">
                              <div class="form-group">
                                  <label>Income Category</label>
                                  <select class="form-control input-default" name="cat">
                                    @foreach ($categorylist as $item)
                                    <option value="{{$item['id']}}">{{$item['name']}}</option>
                                    @endforeach
                                  </select>
                              </div>
                            </div>
                            <div class="col-lg-6">
                              <div class="form-group">
                                  <label>Paid To </label>
                                  <select class="form-control input-default" name="account">
                                    @foreach ($accountlist as $item)
                                    <option value="{{$item['id']}}">{{$item['name']}}</option>
                                    @endforeach
                                  </select>
                              </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Date</label>
                                    <input type="date" name="date" class="form-control input-default" placeholder="Phone Number" required>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Expense</label>
                                    <input type="number" name="expense" class="form-control input-default" placeholder="Expense" required>
                                </div>
                            </div>
                        </div>
                        <div class="row justify-content-center">
                            <div class="col-lg-3">
                                <button onclick="location.href='income'" type="button" class="btn btn-danger  btn-block m-b-10">Cancel</button>
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
