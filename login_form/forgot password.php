<!DOCTYPE HTML>
<!-- Website template by freewebsitetemplates.com -->
<html>

<head>
	<meta charset="UTF-8">
	<title>Contact - Zerotype Website Template</title>
	<link rel="stylesheet" href="css/style.css" type="text/css">
</head>

<body>
	<!-- <div id="header">
		<div>
			<div class="logo">
				<a href="index.php">Zero Type</a>
			</div>
			<ul id="navigation">
				<li>
					<a href="index.php">Home</a>
				</li>
				<li>
					<a href="features.php">Features</a>
				</li>
				<li>
					<a href="news.php">News</a>
				</li>
				<li>
					<a href="about.php">About</a>
				</li>
				<li class="active">
					<a href="contact.php">Contact</a>
				</li>
			</ul>
		</div>
	</div> -->
	<div id="contents">
		<div class="section">
			<h1>Contact</h1>
			<p>
				Liên hệ với chúng tôi một cách nhanh chóng và thuận tiện để lấy lại mật khẩu của bạn!
			</p>
			<form action="" method="post" class="message">
				<input type="text" value="Name" name="txtname" onFocus="this.select();" onMouseOut="javascript:return false;" />
				<input type="email" value="Email" name="txtemail" onFocus="this.select();" onMouseOut="javascript:return false;" />
				<input type="submit" value="Send" name="sub_dk">
			</form>
		</div>
	</div>

	<?php
	include('control.php');
	error_reporting(0);
	$get_data = new data();
	if (isset($_POST['sub_dk']))
		if (empty($_POST['txtname'])  ||  empty($_POST['txtemail'])) {
			echo "<script> alert(' Bạn chưa nhập thông tin ')</script>"; // Kiểm tra nhập dữ liệu
		} else {
			$insert = $get_data->in_pw(
				$_POST['txtname'],
				$_POST['txtemail']
			);
			//Thông báo quá trình lưu
			if ($insert) {
				header('location:/f8-shop/index.php');
			} else {
				echo "Có lỗi xảy ra trong quá trình lấy lại mật khẩu. <a href='contact.php'>Thử lại</a>";
			}
		}
	?>
</body>

</html>