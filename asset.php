<?php
// include "config.php";
include "sidebar.php";
?>

<!DOCTYPE html>
<html>
<head>
  <title></title>

  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/1.5.6/css/buttons.bootstrap4.min.css">

</head>
<body>
  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">ครุภัณฑ์ทั้งหมด</h6>
    </div>
    <div class="card-body">
      <div class="table-responsive">
        <table id="example" class="table table-order-column" style="width:100%">
          <thead>
            <tr>
              <th>หมายเลขครุภัณฑ์</th>
              <th>ชื่อครุภัณฑ์</th>
              <th>สถานที่ตั้ง</th>
              <th>สถานะ</th>
              <th></th>
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

          <script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.js"></script>
          <script type="text/javascript" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
          <script type="text/javascript" src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
          <script type="text/javascript" src="https://cdn.datatables.net/buttons/1.5.6/js/dataTables.buttons.min.js"></script>
          <script type="text/javascript" src="https://cdn.datatables.net/buttons/1.5.6/js/buttons.bootstrap4.min.js"></script>
          <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
          <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
          <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
          <script type="text/javascript" src="https://cdn.datatables.net/buttons/1.5.6/js/buttons.html5.min.js"></script>
          <script type="text/javascript" src="https://cdn.datatables.net/buttons/1.5.6/js/buttons.print.min.js"></script>
          <script type="text/javascript" src="https://cdn.datatables.net/buttons/1.5.6/js/buttons.colVis.min.js"></script>

          <script type="text/javascript">
            $(document).ready(function() {
              var table = $('#example').DataTable( {
                lengthChange: false,
                buttons: [ 'copy', 'excel', 'pdf', 'colvis' ]
              } );

              table.buttons().container()
              .appendTo( '#example_wrapper .col-md-6:eq(0)' );
            } );
          </script>

    </body>
    </html>