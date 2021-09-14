<?php if (isset($_SESSION['tennguoidung'])and($_SESSION['quyennguoidung'])!=1 || isset($_SESSION['tennguoidung'])and($_SESSION['quyennguoidung']) == null ) {
  echo '<script type="text/javascript">';
  echo ' alert("Không có quyền truy cập !")';  //not showing an alert box.
  echo '</script>';
 }else{
  ?>
	<?php include('includes/admin/hearder.php') ?>
	        <div class="nd">
	        	<p>Danh sách sản phẩm (<?php echo count($data);  ?> sản phẩm)<a href="index.php?action=them"> ADD </a></p>
	
					   <form class="timkiem" method="GET">
								<div class="boxtk">
		                		<input id="tk" type="Search" name="key" placeholder=" Tìm Kiếm..."/>
		                		</div>
		            	</form>

	        	<table class="table table-striped">
	        		<thead>
	        		<tr>
	        			<th>STT</th>
	        			<th>ID sản phẩm</th>
	        			<th>Danh Mục</th>
	        			<th>Tên sản phẩm</th>
	        			<th>Giá</th>
	        			<th>Loại sản phẩm</th>
	        			<th>Hình ảnh</th>
	        			<th>Số Lượng</th>
	        			<th style="text-align: center;">Mô Tả</th>
	        			<th>Thông số</th>
	        			<th>Ngày Nhập</th>
	        			<th>Thao Tác</th>
	        		</tr>
	        		</thead>
	        		<tbody>
	        			<?php 
	        				$i=1;
	        				foreach ($ketqua as $value) {
	        			  ?>
	        			 	<tr>
	        			 		<td><?php echo $i++; ?></td>
	        			 		<td><?php echo $value['id_sp']; ?></td>
	        			 			<?php foreach ($ket as $key) {
	        			 				if ($key['id_dm']==$value['id_dm']) {
	        			 					?>
	        			 					<td><?php echo $key['ten_dm']; ?></td>
	        			 					<?php
	        			 				}
	        			 			} ?>
	        			 		<td><?php echo $value['ten_sp']; ?></td>
	        			 		<td><?php echo number_format($value['gia_sp']); ?>đ</td>
	        			 		<?php foreach ($kq as $key) {
	        			 			if ($key['id_loai_sp']==$value['id_loai_sp']) {
	        			 				?><td><?php echo $key['ten_loai_sp']; ?></td>
	        			 				<?php
	        			 			}
	        			 		}  ?>
	        			 		<td><?php echo '<img style=" width="70px" height="90px" src="anh/'.$value['hinhanh_sp'].'">' ?></td>
	        			 		<td><?php echo $value['soluong']; ?></td>
	        			 		<td style="width: 500px;"><?php echo $value['mota_sp']; ?></td>
	        			 		<td style="width: 500px;"><?php echo $value['thongso']; ?></td>
	        			 		<td><?php echo $value['ngaynhapkho_sp']; ?></td>
	        			 		<td>
	        			 		<?php
	        			 		 if (isset($_SESSION['tennguoidung'])and($_SESSION['quyennguoidung'])!=0){
	        			 		 ?>
	        			 		 <form class="quanly">	
									<li><a href="index.php?action=sua&id_sua=<?php echo $value['id_sp'];?> "><i class="glyphicon glyphicon-edit"></i></a></li>
									
									<li><a href="index.php?action=xoa&id_xoa=<?php echo $value['id_sp'];?>" onclick="return confirm('Bạn có chắc chắn muốn xóa sản phẩm?');"><i class="glyphicon glyphicon-trash"></i></a></li>
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
				<?php
                  if($ketqua != NULL)
                  {
                    ?>
                <div class="container1">
                  <div class="pagination" id="comment">
                    <?php 
                    for ($i=1; $i <$sotrang ; $i++) { 
                      echo '<a href="./index.php?action=quanly&page='.$i.'#comment">'.$i.'</a>';
                    }
                     ?>
                </div>
              </div>

                    <?php
                  }
                 ?>
                </div>
              </div>	
	        </div>
	        <div class="clear">
        	</div>
        </div>
    </div>
</body>
</html>

<?php }  ?>