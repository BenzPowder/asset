<?php
// include "config.php";
include "sidebar.php";
?>

<div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">

<html>
<script type="text/javascript">
function fncSubmit()
{
    if(document.getElementById('assetNumber').value == "")
    {
        alert('กรุณากรอกหมายเลขครุภัณฑ์');
        return false;
    }

    if(document.getElementById('cName').value == "")
    {
        alert('กรุณากรอกชื่อวิชา Ex.Data Science');
        return false;
    }

    if(document.getElementById('cYear').value == "")
    {
        alert('กรุณากรอกปีการศึกษา Ex.2561');
        return false;
    }

    if(document.getElementById('cPassword').value == "")
    {
        alert('กรุณากรอกรหัสเข้าร่วม Ex.Dfrt007');
        return false;
    }
}
</script>
<body >
	<div class="container">
<form  action="add.php" method="post" onSubmit="JavaScript:return fncSubmit();">
<div class="form-group">
      <div align="center">
          <label>นำเข้าครุภัณฑ์</label> <br><br>
      </div>
      <label>หมายเลขชุดครุภัณฑ์</label>
      <input type="text" name="assetHeadNumber" class="form-control" required pattern="[ก-ุฯ-a-zA-Z\s]*" title="กรุณากรอกตัวเลขและตัวอักษร" id="assetNumber" placeholder="">
    </div>
    <div class="form-group">
      <label>หมายเลขครุภัณฑ์</label>
      <input type="text" name="assetName" class="form-control" required pattern="[a-zA-Zก-ุฯ-๙\s]*" title="กรุณากรอกตัวอักษร" id="assetName" placeholder="">
    </div>
    <div class="form-group">
      <label>ชื่อครุภัณฑ์</label>
      <input type="text" name="assetName" class="form-control" required pattern="[a-zA-Zก-ุฯ-๙\s]*" title="กรุณากรอกตัวอักษร" id="assetName" placeholder="">
    </div>
    <div class="form-group">
      <label>สถานที่ตั้ง</label>
      <input type="text" name="assetLocation" class="form-control" id="assetLocation" required pattern="[ก-ุฯ-a-zA-Z\s]*" title="กรุณากรอกตัวเลขและตัวอักษร" placeholder="">
    </div>
    <div class="form-group">
      <label>วันที่จัดซื้อ</label>
      <?php
         include "calendar2.php";
         ?>
    </div>
    <div class="form-group">
      <label>ระยะเวลาประกัน (ปี)</label>
      <input type="text" name="assetInsurance" class="form-control" id="assetPrice" placeholder="">
    </div>
    <div class="form-group">
      <label>ราคา/หน่วย</label>
      <input type="text" name="assetPrice" class="form-control" id="assetPrice" placeholder="">
    </div>
    <div class="form-group">
      <label>จำนวน</label>
      <input type="text" name="assetAmount" class="form-control" id="assetAmount" placeholder="">
    </div>
    <div class="form-group">
      <label>ผู้ถือครอง</label>
      <input type="text" class="form-control" name="assetProsonal" id="assetProsonal" placeholder="">
    </div>
    <div class="form-group">
      <label>จัดซื้อจาก</label>
      <input type="text" class="form-control" name="assetProsonal" id="assetProsonal" placeholder="">
    </div>
    <br>
    <div align="center">
      <input type="submit" name="submit" class="btn btn-primary" id="addSubject" value="บันทึก">
    </div>
    <br>
</form>
</div>
</body>
</html>

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
