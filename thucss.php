<?php session_start(); ?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title> vaothi </title>
<link rel="stylesheet" href="testonthi.css">
<script type="text/javascript" src="chucnangdongho.js" > </script>
</head>
<body onLoad="dongHo()">
	<form action="<?php echo $_SERVER["PHP_SELF"]?>" method="POST" id="form">
	<div id=chude > Hệ thống sẽ bắt đầu tính giờ làm bài	</div>
	<div id="dongho" align="center"></div>
	<div id="canhle">
		<div id="canhtrai" style="float: left">
			<div id=tieude> Mời bạn chọn câu hỏi cần thi </br></div>
			<?php include("choncauhoi.php"); ?>
		</div>
		<div id="canhphai" style="float: right">
			<div>
				<?php include("hiencauhoi.php"); ?>
			</div>
			<div>  <?php include("ketqua.php");  ?>  </div>
		</div>
	</div>
	</form>
</body>
</html>
