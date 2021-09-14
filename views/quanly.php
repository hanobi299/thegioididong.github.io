
<?php if (isset($_SESSION['tennguoidung'])and($_SESSION['quyennguoidung'])!=1 || isset($_SESSION['tennguoidung'])and($_SESSION['quyennguoidung']) == null ) {
  echo '<script type="text/javascript">';
  echo ' alert("Không có quyền truy cập !")';  //not showing an alert box.
  echo '</script>';
 }else{
  ?>
    <?php include('includes/admin/hearder.php') ?>
          <div class="nd">
            <p>Chào mừng bạn đến trang quản lý</p>
            <ul>
              <li><span><?php echo $sumuser[0]["count(id_user)"] ?> Khách hàng </span></li>
              <li><span><?php echo $sumhoadon[0]["count(id_hd)"] ?> Hóa đơn </span></li>
              <li><span><?php echo $sumsoluong[0]["sum(soluong)"] ?> Sản phẩm </span></li>
              <li><span><?php echo number_format( $sumdt[0]["sum(Total)"]) ?><sup>đ</sup> Doanh thu </span></li>
            </ul>

          </div>
          <?php include('includes/admin/footer.php') ?>
          <?php 
        }     
 ?>
        