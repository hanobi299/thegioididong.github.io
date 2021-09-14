<?php if (isset($_SESSION['tennguoidung'])and($_SESSION['quyennguoidung'])!=1 || isset($_SESSION['tennguoidung'])and($_SESSION['quyennguoidung']) == null ) {
  echo '<script type="text/javascript">';
  echo ' alert("Không có quyền truy cập !")';  //not showing an alert box.
  echo '</script>';
 }else{
  ?>
<!DOCTYPE html>
<html>
<head>
	<title>Sửa</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
		<link rel="stylesheet" type="text/css" href="css/themsua.css">
</head>
<body>
	<?php 
	?>
	<form class="boxsua" method="POST">
		<div id="header"><a href="index.php?action=quanly" id="logo"><img src="anh/logo.png" height="180px" width="250px "></a>
		</div>
		<div class="nhantrang">SỬA SẢN PHẦM</div>
		<div class="dong">
			<div class="cot1">Tên Sản Phẩm</div>
			<div class="cot2">
				<input class="td" type="text" name="tsp" value="<?php echo $data1[0]['ten_sp'];?>" required>

			</div>
			
		</div>
		<div class="dong">
			<div class="cot1">Giá Sản phẩm</div>
			<div class="cot2">
				<input class="td" type="text" name="gsp" value="<?php echo $data1[0]['gia_sp'];?>" required>

			</div>
			
		</div>
		<div class="dong">
			<div class="cot1">Loại Sản Phẩm</div>
			<div class="cot2">
				<select class="form-control" name="lsp">
					<?php
					foreach ($data as $value){
						if ($value['id_loai_sp']==$data1[0]['id_loai_sp']){
					?>
						<option selected="selected" value="<?php echo $value['id_loai_sp'];?>"><?php echo $value['ten_loai_sp'];?></option>	
					<?php 
						}
						else{
						?>
							<option value="<?php echo $value['id_loai_sp']; ?>"><?php echo $value['ten_loai_sp']; ?> </option>
						<?php
							}
						?>
				<?php
					}
				?>	
				</select>
			
			</div>
		</div>
		<div class="dong">
			<div class="cot1">Loại Danh Mục</div>
			<div class="cot2">
				<select class="form-control" name="ldm">
					<?php
					foreach ($datadm as $value){
						if ($value['id_dm']==$data1[0]['id_dm']){
					?>
						<option selected="selected" value="<?php echo $value['id_dm'];?>"><?php echo $value['ten_dm'];?></option>	
					<?php 
						}
						else{
						?>
							<option value="<?php echo $value['id_dm']; ?>"><?php echo $value['ten_dm']; ?> </option>
						<?php
							}
						?>
				<?php
					}
				?>	
				</select>
			
			</div>
		</div>
		<div class="dong"style="width: 700px;">
			<div class="cot1">Hình ảnh sản phẩm</div>
			<input class="ha" type="file" name="linkha"/>

			<input style="display: none;" type="text" name="linkha1" value="<?php echo $data1[0]['hinhanh_sp'];?>">
			
		</div>
			<div class="dong">
			<div class="cot1">Số lượng sản phẩm</div>
			<input class="td" type="text" name="sl" value="<?php echo $data1[0]['soluong'];?>"required>
			
		</div>
		<div class="dong">
			<div class="cot1">Ngày Nhập Kho</div>
			<div class="cot2">
				<input class="td" type="date" name="ngaynk" value="<?php echo $data1[0]["ngaynhapkho_sp"];?>"required>

			</div>
			
		</div>

		<div class="dong">
			<div class="cot1">Mô tả sản phẩm</div>
			<div class="cot2">
				      <td><textarea cols="35" rows="4" name="mt" required><?php echo $data1[0]['mota_sp'];?></textarea></td>
			</div>
			
		</div>
		<div class="dong">
			<div class="cot1">Thông số kỹ thuật</div>
			<div class="cot2">
				      <td><textarea cols="35" rows="4" name="thongso" required><?php echo $data1[0]['thongso'];?></textarea></td>
			</div>
			
		</div>
		
	      <td><input id="nut" type="submit" name="nutsua" value="SỬA"></td>
		
			
	</form>
</body>
</html>
<?php }  ?>