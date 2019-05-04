<?php
// include "config.php";
include "sidebar.php";
?>



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
      <label>หมายเลขครุภัณฑ์</label>
      <input type="text" name="assetNumber" class="form-control" required pattern="[ก-ุฯ-a-zA-Z\s]*" title="กรุณากรอกตัวเลขและตัวอักษร" id="assetNumber" placeholder="">
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
      <label>วันที่ได้มา</label>
      <?php
         include "calendar.php";
         ?>
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
    <br>
    <div align="center">
      <input type="submit" name="submit" class="btn btn-primary" id="addSubject" value="บันทึก">
    </div>
    <br>
</form>
</div>
</body>
</html>