<?php
// include "config.php";
include "sidebar.php";
?>



<html>
<script type="text/javascript">
function fncSubmit()
{
    if(document.getElementById('cNumber').value == "")
    {
        alert('กรุณากรอกรหัสวิชา Ex.322444');
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
      <input type="text" name="assetNumber" class="form-control" required pattern="[a-zA-Z-0-9\s]*" title="กรุณากรอกตัวเลขและตัวอักษร" id="assetNumber" placeholder="">
    </div>
    <div class="form-group">
      <label>ชื่อครุภัณฑ์</label>
      <input type="text" name="assetName" class="form-control" required pattern="[a-zA-Zก-ุฯ-๙\s]*" title="กรุณากรอกตัวอักษร" id="assetName" placeholder="">
    </div>
    <div class="form-group">
      <label>สถานที่ตั้ง</label>
      <input type="text" name="assetLocation" class="form-control" id="assetLocation" required pattern="[0-9\s]{4}" title="กรุณากรอกปีการศึกษา" placeholder="">
    </div>
    <div class="form-group">
      <label>วันที่ได้มา</label>
      <select class="form-control" name="cTerm" id="cTerm">
      <option value="1">1</option>
      <option value="2">2</option>
    </select>
    </div>
    <div class="form-group">
      <label>จำนวนเซคชัน</label>
      <select class="form-control" name="cSection" id="cSection">
      <option value="1">1</option>
      <option value="2">2</option>
      <option value="3">3</option>
      <option value="4">4</option>
      <option value="5">5</option>
      </select>
    </div>
    <div class="form-group">
      <label>รหัสเข้าร่วม</label>
      <input type="text" class="form-control" name="cPassword" id="cPassword" placeholder="">
    </div>
    <div class="form-group">
      <label>สถานะรายวิชา</label>
      <select class="form-control" name="cStatus" id="cStatus">
      <option value="0">ปิด</option>
      <option value="1">เปิด</option>
      </select>
    </div>
    <div align="center">
      <input type="submit" name="submit" class="btn btn-primary" id="addSubject" value="บันทึก">
    </div>
    <br>
</form>
</div>
</body>
</html>