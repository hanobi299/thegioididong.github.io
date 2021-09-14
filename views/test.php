<?php if (isset($_SESSION['tennguoidung'])and($_SESSION['quyennguoidung'])!=1 || isset($_SESSION['tennguoidung'])and($_SESSION['quyennguoidung']) == null ) {
  echo '<script type="text/javascript">';
  echo ' alert("Không có quyền truy cập !")';  //not showing an alert box.
  echo '</script>';
 }else{
  ?>
<!DOCTYPE html>
<html>
<head>
	<title>Thêm</title>
	<meta charset="utf-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="css/themsua.css">
</head>
<body>
	<form class="boxthem" method="POST">
		<div id="header"><a href="index.php?action=quanly" id="logo"><img src="anh/logo.png" height="180px" width="250px "></a>
		</div>
		<div class="nhantrang">THÊM SẢN PHẨM</div>
		<div class="dong">
			<div class="cot1">Tên Sản Phẩm</div>
			<div class="cot2">
				<input class="td" type="text" name="tsp" placeholder="Nhập tên sản phẩm" required="">

			</div>
			
		</div>
		<div class="dong">
			<div class="cot1">Giá Sản phẩm</div>
			<div class="cot2">
				<input class="td" type="text" name="gsp" placeholder="Nhập giá sản phẩm" required>

			</div>
			
		</div>
		<div class="dong">
			<div class="cot1">Loại Sản Phẩm</div>
			<div class="cot2">
				<select class="form-control" name="lsp" required>
					<?php
					foreach ($data as $value){
					?>
						<option value='<?php echo $value['id_loai_sp']  ?>'><?php echo $value['ten_loai_sp']; ?></option>
					<?php 
					}
					?>
				</select>
				
			</div>
		</div>
		<div class="dong">
			<div class="cot1">Danh Mục</div>
			<div class="cot2">
				<select class="form-control" name="ldm" requireds>
					<?php
					foreach ($datadm as $value){
					?>
						<option value='<?php echo $value['id_dm'] ?>'><?php echo $value['ten_dm']; ?></option>
					<?php 
					}
					?>
				</select>
				
			</div>
		</div>

		<div class="dong" style="width: 700px;">
			<div class="cot1">Hình ảnh sản phẩm</div>
			<input class="ha" type="file" name="linkha" accept="image/*" required>
			
		</div>
			<div class="dong">
			<div class="cot1">Số Lượng</div>
			<div class="cot2">
				<input class="td" type="number" name="sl" placeholder="Nhập số lượng sản phẩm" required>

			</div>
		</div>
		<div class="dong">
			<div class="cot1">Ngày Nhập Kho</div>
			<input class="td" type="date" name="ngaynk" placeholder="Nhập ngày nhập kho" required>
		</div>
		<div class="dong">
			<div class="cot1">Mô tả sản phẩm</div>
			<div class="cot2">
				      <td><textarea cols="35" rows="4"  name="mt" required></textarea></td>
			</div>
			
		</div>
		<div class="dong">
			<div class="cot1">Thông số kỹ thuật</div>
			<div class="cot2">
				      <td><textarea cols="35" rows="4"  name="thongso" required></textarea></td>
			</div>
			
		</div>
		<input id="nut" type="submit" name="nutthem" value="THÊM">
	</form>

</body>
</html>
<?php }  ?>