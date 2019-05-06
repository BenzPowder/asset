<?php
// include "config.php";
include "sidebar.php";
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<div class="container">
		<div align="center">
			<label>รายละเอียดครุภัณฑ์</label> <br><br>
			<img src="http://heavyarm-asia.com/wp-content/uploads/2017/11/Nitro5_gallery_04.png" width="200px" height="200px">
		</div> <br><br>

		<table class="table table-striped" id="myTable">
			<thead>
				<tr>
					<th>ชื่อครุภัณฑ์</th>
					<th>หมายเลขชุดครุภัณฑ์</th>
					<th>หมายเลขครุภัณฑ์</th>
					<th>สถานที่ตั้ง</th>
					<th>สถานะ</th>
					<th></th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>
						<div class="form-group row">
							<label for="inputEmail" class="col-sm-10 col-form-label"><center>คอมพิวเตอร์โน๊ตบุ๊ค</center></label>
						</div>
					</form>
				</td>


				<td>
					<div class="form-group row">
						<label for="inputEmail" class="col-sm-4 col-form-label"><center>5925615972645</center></label>
					</div>
				</form>
			</td>
			<td>
				<div class="form-group row">
					<label for="inputEmail" class="col-sm-4 col-form-label">คร.25615972645</label>
				</div>
			</form>
		</td>
		<td>
			<div class="form-group row">
				<label for="inputEmail" class="col-sm-4 col-form-label">SC.6601C</label>
			</div>
		</form>
	</td>
	<td>
		<div class="form-group row">
			<label for="inputEmail" class="col-sm-10 col-form-label"><font color="red">ถูกยืม</font></label>
		</div>
	</form>
</td>
<td>
	<div class="form-group row">
		<input type="checkbox" checked data-toggle="toggle" data-on="ตรวจสอบ" data-off="ยังไม่ตรวจ" data-onstyle="success" data-offstyle="danger">
	</div>
</form>
</td>
</tr>

</div>

</tbody>
</table>

<br><br>

<div align="left">
	<label>หมายเหตุ :</label> <br>
	<textarea name="comment" rows="5" cols="135"></textarea>
</div> <br><br>

<center>
	<a href='asset.php' class='btn btn-success' id='borrow' ><center>แก้ไข</center></a>

	<a href='asset.php' class='btn btn-danger' id='borrow' ><center>ออก QR Code</center></a>
</center>
<br><br><br>

</body>
</html>


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
				<a class="btn btn-primary" href="login.php">Logout</a>
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
<script src="vendor/chart.js/Chart.min.js"></script>

<!-- Page level custom scripts -->
<script src="js/demo/chart-area-demo.js"></script>
<script src="js/demo/chart-pie-demo.js"></script>

<link href="https://cdn.jsdelivr.net/gh/gitbrent/bootstrap4-toggle@3.4.0/css/bootstrap4-toggle.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/gh/gitbrent/bootstrap4-toggle@3.4.0/js/bootstrap4-toggle.min.js"></script>