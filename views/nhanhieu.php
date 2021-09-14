<?php
if (isset($_POST['nutdx'])) {
	session_unset();
	header("location:index.php?action=dangnhap");

}
?>
<?php if (isset($_SESSION['tennguoidung'])and($_SESSION['quyennguoidung'])!=1 || isset($_SESSION['tennguoidung'])and($_SESSION['quyennguoidung']) == null ) {
  echo '<script type="text/javascript">';
  echo ' alert("Không có quyền truy cập !")';  //not showing an alert box.
  echo '</script>';
 }else{
  ?>
    <?php include('includes/admin/hearder.php') ?>
	          <div class="nd">
            <p>Danh sách nhãn hiệu</p>
            <table class="table table-striped">
              <thead>
                <tr class="th">
                  <th>STT</th>
                  <th>id Nhãn Hiệu</th>
                  <th>Tên Nhãn Hiệu</th>
                  <th>SDT</th>
                  <th>Địa Chỉ</th>
                  <th>Ghi Chú</th>
                  <th>Thao tác</th>
                </tr>
              </thead>
              <tbody>
                <?php

                $i=1;
                foreach ($ketqua2 as  $value) {    
                  ?>
                  <tr>
                    <td><?php echo $i++; ?></td>
                    <td><?php echo $value['id_loai_sp']; ?></td>
                    <td><?php echo $value['ten_loai_sp']; ?></td>
                      <td><?php echo $value['SDT'];  ?></td>
                       <td><?php echo $value['Diachi'];  ?></td>
                      <td><?php echo $value['mota'];  ?></td>
                  <td>
                   <?php
                     if (isset($_SESSION['tennguoidung'])and($_SESSION['quyennguoidung'])==1){
                     ?>
                     <form class="quanly"> 
                      <li><a href="index.php?action=suanhan&id_loai_sp=<?php echo $value['id_loai_sp'];?> "><i class="glyphicon glyphicon-edit"></i></a></li>
                      
                      <li><a href="index.php?action=xoanhan&id_loai_sp=<?php echo $value['id_loai_sp'];?> "onclick="return confirm('Bạn chắc chắn muốn xóa nhãn hiệu trên?');"><i class="glyphicon glyphicon-trash"></i></a></li>
                      </form>
                        <?php  
                  }
                  ?> 
                    </td>
                  </tr>
                  <?php  
                  }
                  ?> 
              </tbody>
            </table>
          </div>
	        <div class="clear">
        	</div>
        
    </div>
</body>
</html>
<?php } ?>