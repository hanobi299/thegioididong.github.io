<?php
if (isset($_POST['nutdx'])) {
    session_unset();
    header("location:index.php?action=dangnhap");

}
?>
<?php if (isset($_SESSION['tennguoidung'])and($_SESSION['quyennguoidung'])!=1) {
  echo "<h1>Không có quyền truy cập!</h1>";
 }else{
  ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Quản lý</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="css/quanly1.css">

</head>
<body>
    <div class="container_12">
        <div class="khung">   
            <div class="khung1">
            <a href="quanly.php"><img id="logotrai" src="anh/12.png" alt="Logo"></a>
                
            <div class="phai">
                <div class="usertrai">
                    <img src="anh/icon.png" alt="Profile Pic" />
                </div>
                <div class="userphai">
                    <ul>
                        <li><?php echo $_SESSION['tennguoidung'];?></li>
                        <li><form class="dangxuat" method="POST"><button name="nutdx" type="submit" class="btn btn-warning">Logout</button></form></li>
                    </ul>
                </div>
            </div>
            
        </div>
        <div class="clear">
        </div>
       <div class="khung2">
            <nav class="navbar navbar-default">
                  <div class="container-fluid">
                    <div class="navbar-header">
                      <a class="navbar-brand" href="#">Thegioididong.com</a>
                    </div>
                    <ul class="nav navbar-nav">
                      <li ><a href="index.php?action=quanly">Sản Phẩm</a></li>
                        <li><a href="index.php?action=khachhang">Người Dùng</a>
                      <li><a href="#">Inbox</a></li>
                      <li><a href="index.php"> Visit Website</a></li>
                    </ul>
                  </div>
                </nav>
        </div>
          <div class="menutrai">
             <ul>
             <li><a href="index.php?action=hoadon">Hóa Đơn</a></li>
             <li><a href="index.php?action=danhmuc">Danh Mục</a></li>
             <li><a href="index.php?action=nhanhieu">Nhãn hiệu</a></li>
             <li><a href="index.php?action=quanlybinhluan">Quản lý bình luận</a></li>
           </ul>
          </div>

        
            <div class="nd">
                <h2 style="text-align: center;">Chi Tiết Hóa Đơn</h2>
                 <a href="index.php?action=hoadon">quay về</a>
                <h4 style="margin-left: 10px;">Trạng thái đơn hàng:</h4>
              <table class="table table-striped">
              <thead>
              <tr>
                <th>STT</th>
                <td>ID HD</td>
                <th>ID Sản Phẩm </th>
                <th>Tên Sản Phẩm</th>
                <th>Hình Ảnh</th>
                <th>Số Lượng</th>
                <th>Giá sản phẩm</th>
                <td>Phương thức thanh toán</td>
              </tr>
              </thead>
              <tbody>
                <?php 
                  $i=1;
                  foreach ( $data as $value) {
                  ?>
                  <tr>
                    <td><?php echo $i++; ?></td>
                    <td><?php echo $value['id_hd'];  ?></td>
                    <td><?php echo $value['id_sp']; ?></td>
                    <td><?php echo $value['ten_sp']; ?></td> 
                    <td><?php echo '<img style=" width="70px" height="90px" src="anh/'.$value['hinhanh_sp'].'">' ?></td>
                    <td><?php echo $value['soluong']; ?></td>
                    <td><?php echo number_format($value['gia_sp']) ?>đ</td>
                    <td><?php switch($value['Phuongthucthanhtoan']){

                         case 1:{ echo '<span class="label-warning">Thanh toán online</span>'; break;} 
                         case 0:{ echo '<span class="label-info">Thanh toán sau khi nhận hàng</span>'; break;} 
                        }
                        ?>       
                   </td>
                    <td> </td>
                
                  </tr> 
                
                  <?php 
                    }

                   ?>
              </tbody> 
                      <form style="width: 500px;" method="post" action="index.php?action=xemchitiethoadon&id=<?php echo $id_hoadon; ?>">
                        <div style="margin-left: 10px;">
                          <input hidden=""  type="" value="<?php echo $id_hoadon; ?>" name="id"> 
                            <select name="trangthai" class="form-control" style="width:120px;">
                             <?php 
                                  $duyet = array('Chờ duyệt','Đã duyệt','Đang giao','Hoàn thành','Hủy Đơn');
                                  for ($i=0; $i < 5 ; $i++) { 
                                    if ($hoadon[0]['trangthai']==$i) {
                                      ?>
                                    <option value="<?php echo $i; ?>"selected><?php echo $duyet[$i]; ?></option>
                                    <?php  
                                    }
                                    else {
                                      ?>
                                        <option value="<?php echo $i; ?>"><?php echo $duyet[$i]; ?></option>
                                     <?php

                                    }
                                  }
                               ?> 
                            </select>
                        </div>
                        <div class="btn-them" style="float:left;">
                            <button type="submit" name="ok"  style="margin-top: 10px;margin-left: 10px;margin-bottom: 10px;" class="btn-primary">Cập nhật</button>
                        </div>
                        <div class="clear"></div>
                    </form>
   
            </table>  
            </div>
            <div class="clear">
            </div>
        
    </div>
</body>
</html>
<?php }  ?>