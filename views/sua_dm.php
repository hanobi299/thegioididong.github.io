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
    <div class="nhantrang">SỬA DANH MỤC</div>
    <div class="dong">
      <div class="cot1">ID Danh Mục</div>
      <div class="cot2">
        <input class="td" type="text" name="iddm" value="<?php echo $data[0]['id_dm'];?>">

      </div>
      
    </div>
    <div class="dong">
      <div class="cot1">Tên Danh mục</div>
      <div class="cot2">
        <input class="td" type="text" name="tendm" value="<?php echo $data[0]['ten_dm'];?>">

      </div>
    </div>
   
      <input id="nut" type="submit" name="suadm" value="SỬA">
  </form>
</body>
</html>
<?php }  ?>