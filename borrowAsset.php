<?php
// include "config.php";
include "sidebar.php";
?>

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
									include "calendar.php";
									?>
								</div>
						</form>
					</td>

					<td>
						<form role="form" method="post" action="">

							<div class="form-group row">
								<label for="inputEmail" class="col-sm-3 col-form-label">วันที่คืน</label>
								<div class="col-sm-5">
									<?php
									include "calendar2.php";
									?>
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
											<td><center><input type="text" class="form-control" id="assetName" name="assetName" placeholder=""></center></td>

											<td><center><input type="text" class="form-control" id="assetNumber" name="assetNumber" placeholder=""></center></td>

											<td><center><input type="text" class="form-control" id="total" name="total" placeholder=""></center></td>

											<td><center><input type="text" class="form-control" id="
												borrowedAmount" name="borrowedAmount" placeholder=""></center></td>

												<td><center><input type="text" class="form-control" id="
													borrowedTotal" name="borrowedTotal" placeholder=""></center></td>

												</tr>
											</tbody>
										</table>

										<br>
										<center>
											<a href='assetDetail.php' class='btn btn-success' id='borrow' ><center>บันทึก</center></a>

											<a href='assetDetail.php' class='btn btn-info' id='borrow' ><center>ออกใบยืม</center></a>

											<a href='assetDetail.php' class='btn btn-danger' id='borrow' ><center>จบการทำงาน</center></a>
										</center>

									</div>
								</body>

