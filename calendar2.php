<script src="js/jqueryui_datepicker_thai.js"></script>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
 "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>jquery ui datepickerภาษาไทย ปี พ.ศ.</title>
<?php  
$jquery_ui_v="1.8.5";  
$theme=array(  
    "0"=>"base",  
    "1"=>"black-tie",  
    "2"=>"blitzer",  
    "3"=>"cupertino",  
    "4"=>"dark-hive",  
    "5"=>"dot-luv",  
    "6"=>"eggplant",  
    "7"=>"excite-bike",  
    "8"=>"flick",  
    "9"=>"hot-sneaks",  
    "10"=>"humanity",  
    "11"=>"le-frog",  
    "12"=>"mint-choc",  
    "13"=>"overcast",  
    "14"=>"pepper-grinder",  
    "15"=>"redmond",  
    "16"=>"smoothness",  
    "17"=>"south-street",  
    "18"=>"start",  
    "19"=>"sunny",  
    "20"=>"swanky-purse",  
    "21"=>"trontastic",  
    "22"=>"ui-darkness",  
    "23"=>"ui-lightness",  
    "24"=>"vader" 
);  
$jquery_ui_theme=$theme[22];  
?>  
<link type="text/css" rel="stylesheet" href="http://ajax.googleapis.com/ajax/libs/jqueryui/<?=$jquery_ui_v?>/themes/<?=$jquery_ui_theme?>/jquery-ui.css" />  
<style type="text/css">  
/* ปรับขนาดตัวอักษรของข้อความใน tabs  
สามารถปรับเปลี่ยน รายละเอียดอื่นๆ เพิ่มเติมเกี่ยวกับ tabs 
*/ 
.ui-tabs{  
    font-family:tahoma;  
    font-size:11px;  
}  
</style>  
<style type="text/css">
/* Overide css code กำหนดความกว้างของปฏิทินและอื่นๆ */
.ui-datepicker{
    width:110px;
    font-family:tahoma;
    font-size:11px;
    text-align:center;
}
</style>
</head>
 
<body>
 
 
<div class="form-group">
 
<input name="dateInput" type="text" id="dateInput" class="form-control" value="" />
<br />

<br />
 
 
</div>
 
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
<script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.8.5/jquery-ui.min.js"></script>
<script src="js/jqueryui_datepicker_thai.js"></script>
<script type="text/javascript">
$(function(){
    $("#dateInput").datepicker({
        dateFormat: 'dd-mm-yy',
        showOn: 'button',
        numberOfMonths: 2,
//      buttonImage: 'http://jqueryui.com/demos/datepicker/images/calendar.gif',
        buttonImageOnly: false,
        changeMonth: true,
        changeYear: true
    });
     
});
</script>
 
</body>
</html>