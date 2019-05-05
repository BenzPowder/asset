<?php
// include "config.php";
include "sidebar.php";
?>

<div class="container-fluid">

	<body >
		<div class="container">
			<div align="right">
				<label>เลขที่ใบยืม.....</label> <br><br>
			</div>
			<div align="center">
				<label>ยืมครุภัณฑ์</label> <br><br>
			</div>

			<table class="table table-striped" id="myTable">
				<thead>
					<tr>
						<th>ข้อมูลผู้ยืม</th>
						<th>ข้อมูลการยืม</th>
						<th></th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>
							<form role="form" method="post" action="">

								<div class="form-group row">
									<label for="inputEmail" class="col-sm-4 col-form-label">หมายเลขครุภัณฑ์</label>
									<div class="col-sm-5">
										<input type="text" class="form-control" id="assetNumber" name="assetNumber" placeholder="">
									</div>
								</div>
								<div class="form-group row">
									<label for="inputUser" class="col-sm-4 col-form-label">รหัสนักศึกษา</label>
									<div class="col-sm-5">
										<input type="text" class="form-control" id="stdName" name="stdName" placeholder="">
									</div>
								</div>
							</form>
						</td>


						<td>
							<form role="form" method="post" action="">

								<div class="form-group row">
									<label for="inputEmail" class="col-sm-3 col-form-label">วันที่ยืม</label>
									<div class="col-sm-5">
										<?php
											include "calendar2.php";
										?>
									</div>
								</div>
								<div class="form-group row">
									<label for="inputUser" class="col-sm-3 col-form-label">วันที่คืน</label>
									<div class="col-sm-5">
										<?php
											include "calendar.php";
										?>
									</div>
								</div>
							</form>
								</td>
							</tr>

						</div>

					</tbody>


					<table class="table table-striped" id="myTable">
						<thead>
							<tr>
								รายละเอียดการยืม
								<thead>
									<tr>
										<th><center>ชื่อครุภัณ์</center></th>
										<th><center>รหัสครุภัณฑ์</center></th>
										<th><center>จำนวนคงเหลือ</center></th>
										<th><center>จำนวนที่ยืม</center></th>
										<th><center></center></th>
										<th><center></center></th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td><center><input type="text" class="form-control" id="assetName" name="assetName" placeholder=""></center></td>

										<td><center><input type="text" class="form-control" id="assetNumber" name="assetNumber" placeholder=""></center></td>

										<td><center><input type="text" class="form-control" id="total" name="total" placeholder=""></center></td>

										<td><center><input type="text" class="form-control" id="
											borrowedAmount" name="borrowedAmount" placeholder=""></center></td>

											<td><a href='assetDetail.php' class='btn btn-success' id='borrow' ><center>เพิ่ม</center></a></td>

											<td><a href='assetDetail.php' class='btn btn-danger' id='borrow' ><center>ลบ</center></a></td>
										</tr>
									</tbody>
								</table>

								<br><br>
								<table class="table table-striped" id="myTable">
									<thead>
										<tr>
											รายการที่ยืม
											<thead>
												<tr>
													<th><center>ลำดับ</center></th>
													<th><center>รหัสครุภัณฑ์</center></th>
													<th><center>ชื่อครุภัณฑ์</center></th>
													<th><center>จำนวนที่ยืม</center></th>
													<th><center>รวมที่ยืมที่หมด</center></th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td><center>1</center></td>
													<td><center>คร.25615972645</center></td>
													<td><center>คอมพิวเตอร์</center></td>
													<td><center>1</center></td>
													<td><center>1</center></td>
				
												</tr>
													</tbody>
												</table>

												<br>
												<center>
													<a href='asset.php' class='btn btn-success' id='borrow' ><center>บันทึก</center></a>

													<a href='asset.php' class='btn btn-info' id='borrow' ><center>ออกใบยืม</center></a>

													<a href='asset.php' class='btn btn-danger' id='borrow' ><center>จบการทำงาน</center></a>
												</center>

											</div>
										</body>
									</div>
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

<link href="https://cdn.jsdelivr.net/gh/gitbrent/bootstrap4-toggle@3.4.0/css/bootstrap4-toggle.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/gh/gitbrent/bootstrap4-toggle@3.4.0/js/bootstrap4-toggle.min.js"></script>
