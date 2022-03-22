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
                  <h1>Profile</h1>
                </div>
              </div>
            </div>
            <!-- /# column -->
            <div class="col-lg-4 p-l-0 title-margin-left">
              <div class="page-header">
                <div class="page-title">
                  <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                    <li class="breadcrumb-item active">Profile</li>
                  </ol>
                </div>
              </div>
            </div>
            <!-- /# column -->
          </div>
          <!-- /# row -->
          <section id="main-content">
            <div class="row">
              <div class="col-lg-6">
              <div class="card">
                    <div class="row justify-content-center">
                    <div class="col-lg-12">
                        <div class="d-flex justify-content-center">
                            <div>
                                <div class="profileImg mb-3">
                                    <img src="https://images.pexels.com/photos/220453/pexels-photo-220453.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500" alt="">
                                </div>
                                <div>
                                    <h4 class="text-center">Arif Bipu</h4>
                                    <p>arifbipu@gmail.com</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    </div>
                    <div class="row justify-content-center">
                        <div class="col-lg-3">
                            <button onclick="location.href='signIn.html'" type="button" class="btn btn-primary btn-block m-b-10">Log Out</button>
                        </div>
                    </div>
              </div>
              </div>
              <div class="col-lg-6">
                <div class="card">
                    <form action="">
                        <div class="text-center">
                            <h4>Edit Email</h4>
                        </div>
                        <div class="form-group">
                            <label>Email</label>
                            <input type="email" class="form-control input-default" placeholder="Email" required>
                        </div>
                        <div class="row justify-content-center mb-4">
                            <div class="col-lg-3">
                                <button type="submit" class="btn btn-primary btn-block m-b-10">Submit</button>
                            </div>
                        </div>
                    </form>
                    <form action="">
                        <div class="text-center">
                            <h4>Edit Password</h4>
                        </div>
                        <div class="form-group">
                            <label>Old Password</label>
                            <input type="password" class="form-control input-default" placeholder="Old Password" required>
                        </div>
                        <div class="form-group">
                            <label>New Password</label>
                            <input type="password" class="form-control input-default" placeholder="New Password" required>
                        </div>
                        <div class="form-group">
                            <label>Confirm Password</label>
                            <input type="password" class="form-control input-default" placeholder="Confirm Pasword" required>
                        </div>
                        <div class="row justify-content-center">
                            <div class="col-lg-3">
                                <button type="submit" class="btn btn-primary btn-block m-b-10">Submit</button>
                            </div>
                        </div>
                    </form>
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
