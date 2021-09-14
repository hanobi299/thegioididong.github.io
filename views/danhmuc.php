<?php if (isset($_SESSION['tennguoidung'])and($_SESSION['quyennguoidung'])!=1 || isset($_SESSION['tennguoidung'])and($_SESSION['quyennguoidung']) == null ) {
  echo '<script type="text/javascript">';
  echo ' alert("Không có quyền truy cập !")';  //not showing an alert box.
  echo '</script>';
 }else{
  ?>

<?php include('includes/admin/hearder.php') ?> 
	          <div class="nd">
            <p>Danh sách danh mục</p>
            <table class="table table-striped">
              <thead>
                <tr class="th">
                  <th>STT</th>
                  <th>id danh mục</th>
                  <th>Tên danh mục</th>
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
                      <td><?php echo $value['id_dm']; ?></td>
                      <td><?php echo $value['ten_dm']; ?></td>
                      <td>
                     <?php
                       if (isset($_SESSION['tennguoidung'])and($_SESSION['quyennguoidung'])==1){
                       ?>
                       <form class="quanly"> 
                        <li><a href="index.php?action=suadanhmuc&id_dm=<?php echo $value['id_dm'];?> "><i class="glyphicon glyphicon-edit"></i></a></li>
                        
                        <li><a href="index.php?action=xoadm&id_dm=<?php echo $value['id_dm'];?> "onclick="return confirm('Bạn có chắc chắn muốn xóa danh mục này?');"><i class="glyphicon glyphicon-trash"></i></a></li>
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
<?php }  ?>