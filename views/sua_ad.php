<?php if (isset($_SESSION['tennguoidung'])and($_SESSION['quyennguoidung'])!=1 || isset($_SESSION['tennguoidung'])and($_SESSION['quyennguoidung']) == null ) {
  echo '<script type="text/javascript">';
  echo ' alert("Không có quyền truy cập !")';  //not showing an alert box.
  echo '</script>';
 }else{
  ?>
<!DOCTYPE html>
<html>
<head>
	<title>Edit </title>
	<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="css/themsua.css">
</head>
<body>
	<?php 
	?>
	<form class="boxsua" method="POST">
		<div id="header"><a href="index.php?action=khachhang" id="logo"><img src="anh/logo.png" height="180px" width="250px "></a>
		</div>
		<div class="nhantrang">SỬA TÀI KHOẢN</div>
		<div class="dong">
			<div class="cot1">User</div>
			<div class="cot2">
				<input class="td" type="text" name="user" value="<?php echo $data[0]['user'];?>">

			</div>
			
		</div>
		<div class="dong">
			<div class="cot1">Mật Khẩu</div>
			<div class="cot2">
				<input class="td" type="text" name="pass" value="<?php echo $data[0]['pass'];?>">

			</div>
		</div>
		<div class="dong">
			<div class="cot1">Quyền</div>
			<div class="cot2">
				<input class="td" type="text" name="level" value="<?php echo $data[0]['level'];?>">

			</div>
		</div>
			<div class="dong">
			<div class="cot1">Họ Tên</div>
			<div class="cot2">
				<input class="td" type="text" name="Hoten" value="<?php echo $data[0]['Hoten'];?>">

			</div>
			
		</div>
		   <div class="dong">
				<div class="cot1">Ngày Sinh</div>
				<div class="cot2">
				<input class="td" type="date" name="ngaysinh" value="<?php echo $data[0]['ngaysinh'];?>">
			</div>
		</div>
		<div class="dong">
			<div class="cot1">Giới Tính</div>
			<div class="cot2">
				<input class="td" type="text" name="gioitinh" value="<?php echo $data[0]['gioitinh'];?>">

			</div>
		</div>
		<div class="dong">
			<div class="cot1">Email</div>
			<div class="cot2">
				<input class="td" type="text" name="email" value="<?php echo $data[0]['email'];?>">

			</div>
		</div>
		<div class="dong">
			<div class="cot1">SĐT</div>
			<div class="cot2">
				<input class="td" type="text" name="dienthoai" value="<?php echo $data[0]['dienthoai'];?>">

			</div>
		</div>
		<div class="dong">
			<div class="cot1">Địa Chỉ</div>
			<div class="cot2">
				<input class="td" type="text" name="diachi" value="<?php echo $data[0]['diachi'];?>">

			</div>
		</div>

		
			<input id="nut" type="submit" name="suaad" value="SỬA">
	</form>
</body>
</html>
<?php } ?>