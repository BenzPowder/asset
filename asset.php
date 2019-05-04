<?php
// include "config.php";
include "sidebar.php";
?>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">ครุภัณฑ์</h1>
            <a href="reportAsset.php" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> ออกรายงานครุภัณ์ประจำปี</a>
          </div>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->

          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">ครุภัณฑ์ทั้งหมด</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>หมายเลขครุภัณฑ์</th>
                      <th>ชื่อครุภัณฑ์</th>
                      <th>สถานที่ตั้ง</th>
                      <th>สถานะ</th>
                      <th>รายละเอียด</th>
                      <th></th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>คร.25615972645</td>
                      <td>คอมพิวเตอร์</td>
                      <td>SC.6601C</td>
                      <td><font color="red">ถูกยืม</font></td>
                      <td><a href='assetDetail.php' class='btn btn-primary' id='borrow' ><center>รายละเอียด</center></a></td>
                      <th><button type="button" class="btn btn-dark">ยืม</button></th>
                    </tr>
                    <tr>
                      <td>คร.25615972646</td>
                      <td>โปรเจคเตอร์</td>
                      <td>SC.6601C</td>
                      <td><font color="red">ถูกยืม</font></td>
                      <td><a href='assetDetail.php' class='btn btn-primary' id='borrow' ><center>รายละเอียด</center></a></td>
                      <th><button type="button" class="btn btn-dark">ยืม</button></th>
                    </tr>
                    <tr>
                      <td>คร.25615972647</td>
                      <td>เม้าส์</td>
                      <td>SC.6601C</td>
                      <td><font color="red">ถูกยืม</font></td>
                      <td><a href='assetDetail.php' class='btn btn-primary' id='borrow' ><center>รายละเอียด</center></a></td>
                      <th><button type="button" class="btn btn-dark">ยืม</button></th>
                    </tr>
                    <tr>
                      <td>คร.25615972648</td>
                      <td>คีย์บอร์ด</td>
                      <td>SC.6601C</td>
                      <td><font color="red">ถูกยืม</font></td>
                      <td><a href='assetDetail.php' class='btn btn-primary' id='borrow' ><center>รายละเอียด</center></a></td>
                      <th><button type="button" class="btn btn-dark">ยืม</button></th>
                    </tr>
                    <tr>
                      <td>คร.25615972649</td>
                      <td>โต๊ะคอมพิวเตอร์</td>
                      <td>SC.6601C</td>
                      <td><font color="green">สามารถยืมได้</font></td>
                      <td><a href='assetDetail.php' class='btn btn-primary' id='borrow' ><center>รายละเอียด</center></a></td>
                      <td> <a href='borrowAsset.php' class='btn btn-success' id='borrow' ><center>ยืม</center></a>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>

        </div>
        <!-- /.container-fluid -->


      </div>
          <center><a href='insertAsset.php?'><button type='button' class='btn btn-primary'
          id='insertAsset'>นำเข้าครุภัณฑ์</button></a></center>";
      <!-- End of Main Content -->

      <!-- Footer -->
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright &copy; Your Website 2019</span>
          </div>
        </div>
      </footer>
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="login.html">Logout</a>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>

  <!-- Page level plugins -->
  <script src="vendor/datatables/jquery.dataTables.min.js"></script>
  <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="js/demo/datatables-demo.js"></script>

</body>

</html>
