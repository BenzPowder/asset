<?php
// include "config.php";
include "sidebar.php";
?>


<div align="center">
	<label>โอนสิทธิ์ผู้ถือครอง</label> <br><br>
</div>

<body >
	<div class="container">
		<form  action="add.php" method="post" onSubmit="JavaScript:return fncSubmit();">
			<div class="form-group">
				<label>แจ้งวันที่</label>
				<?php
				include "calendar2.php";
				?>
      </div>

			<div class="form-group">
				<label>หมายเลขครุภัณฑ์</label>
				<input type="text" name="assetName" class="form-control" required pattern="[a-zA-Zก-ุฯ-๙\s]*" title="กรุณากรอกตัวอักษร" id="assetName" placeholder="">
			</div>
			<div class="form-group">
				<label>ผู้แจ้ง</label>
				<input type="text" name="assetLocation" class="form-control" id="assetLocation" required pattern="[ก-ุฯ-a-zA-Z\s]*" title="กรุณากรอกตัวเลขและตัวอักษร" placeholder="">
			</div>
			<div class="form-group">
      <label>ประเภทของปัญหา</label>
      <select class="form-control" name="cSection" id="cSection">
      <option value="1">ครุภัณฑ์</option>
      <option value="2">โปรแกรมมีปัญหา</option>
      <option value="3">อุปกรณ์มีปัญหา</option>
      </select>
    </div>
			<div class="form-group">
				<label>เลขครุภัณฑ์</label>
				<input type="text" name="assetAmount" class="form-control" id="assetAmount" placeholder="">
			</div>
			<div class="form-group">
				<label>รายละเอียดการส่งซ่อม</label>
				<input type="text" class="form-control" name="assetProsonal" id="assetProsonal" placeholder="">
			</div>
			<br>
			<div align="center">
				<input type="submit" name="submit" class="btn btn-success" id="addSubject" value="แจ้งซ่อม">
			</div>
			<br>
		</form>
	</div>
</body>










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

<link href="https://cdn.jsdelivr.net/gh/gitbrent/bootstrap4-toggle@3.4.0/css/bootstrap4-toggle.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/gh/gitbrent/bootstrap4-toggle@3.4.0/js/bootstrap4-toggle.min.js"></script>
