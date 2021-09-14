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
    <div id="header"><a href="index.php?action=danhmuc" id="logo"><img src="anh/logo.png" height="180px" width="250px "></a>
    </div>
    <div class="nhantrang">SỬA NHÃN HIỆU</div>
    <div hidden="" class="dong">
      <div class="cot1">ID Nhãn Hiệu</div>
      <div class="cot2">
        <input class="td" type="text" name="idnh" value="<?php echo $data[0]['id_loai_sp'];?>">

      </div>
      
    </div>
    <div class="dong">
      <div class="cot1">Tên Nhãn Hiệu</div>
      <div class="cot2">
        <input class="td" type="text" name="tennh" value="<?php echo $data[0]['ten_loai_sp'];?>">

      </div>
    </div>
     <div class="dong">
      <div class="cot1">SDT</div>
      <div class="cot2">
        <input class="td" type="text" name="sdt" value="<?php echo $data[0]['SDT'];?>">

      </div>
    </div>
     <div class="dong">
      <div class="cot1">Địa Chỉ</div>
      <div class="cot2">
        <input class="td" type="text" name="diachi" value="<?php echo $data[0]['Diachi'];?>">

      </div>
    </div>
         <div class="dong">
      <div class="cot1">Ghi Chú</div>
      <div class="cot2">
        <input class="td" type="text" name="mota" value="<?php echo $data[0]['mota'];?>">

      </div>
    </div>

   
      <input id="nut" type="submit" name="suanh" value="SỬA">
  </form>
</body>
</html>
<?php }  ?>