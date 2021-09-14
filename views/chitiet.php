<?php
if (isset($_POST['nutdx'])) {
    session_unset();

}
?>
<?php include('includes/customer/hearder.php') ?>
     <div class="container"> 
        <div class="card"> 
            <div class="container-fliud"> 
              <a  href="index.php"><img src="anh/back.png"></a>
                <?php
                    foreach ($data_id as $value) {   
                  ?>
                <div class="wrapper row"> 
                    <div class="preview col-md-6"> 
                      <div class="preview-pic tab-content"> 
                        <div class="tab-pane active" id="pic-1">
                            <?php
                                echo '<img src="anh/'.$value['hinhanh_sp'].'">'
                            ?>
                        </div> 
                       </div>
                    </div> 
                        <div class="details col-md-6"> 
                         <h3 class="product-title"><?php echo $value['ten_sp'];?></h3> 
                         <div class="rating"> 
                          <div class="stars">
                           <span class="fa fa-star checked"></span> 
                                <span class="fa fa-star checked"></span> 
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star"></span> 
                          </div> 
                            <span class="review-no">99 đánh giá</span> 
                        </div> 
                            <h4 class="price">Giá bán: <?php echo number_format($value['gia_sp']);?>đ</h4> 
                             <p class="vote">(87 bình chọn)</p>
                             <h3 class="soluong">Số lượng sản phẩm:<?php if ($value['soluong']==0) {echo "hết";
                             }else{ echo $value['soluong']; }?> sản phẩm</h3>
                              <h3 class="mota">Mô tả:</h3><p> <?php echo $value['mota_sp']; ?> </p>
                                  <h3 class="thongso">Thông số:</h3><p><?php echo $value['thongso']; ?></p>
                                  <?php if ($value['soluong']==0) {
                                    echo "<h1> Sản phẩm này  hiện đang hết mời quý khách tham khảo các sản phẩm khách !! </h1>";
                                  }else{ ?>
                              <form method="POST"> 
                               <div class="mua"> <a href="index.php?action=add&id= <?php echo $value['id_sp'] ?>">      
                                     <form ><button class="add-to-cart btn btn-default" type="button" >Thêm vào giỏ</button></form></a> 
                                     <a href="#">      
                                           <button class="like btn btn-default" type="button"><span class="fa fa-heart"></span></button> </a> 
                               </div> 
                             </form>
                           <?php } ?>
                       </div> 
                    </div>   
                </div>
                <?php 
                     } 
                ?>
            </div>
          <?php if (isset($_SESSION['tennguoidung'])and($_SESSION['quyennguoidung'])) {?>
            <div class="chitiet-binhluan">
            <div class="binhluan-tieude">Bình luận</div>
            <div class="binhluan-nd">
                <form action="index.php?action=chitiet&id=<?php echo $value["id_sp"]; ?>" method="POST">
                    <input hidden="" type="text" name="id_user" value="<?php echo $_SESSION['id'] ?>"  >
                    <input type="text" name="hoten" value="<?php echo $_SESSION['hoten'] ?>" required >
                    <textarea name="noidung" rows="3" required placeholder="Nội dung"required></textarea>
                    <div><button type="submit" name="submit">Gửi bình luận</button></div>
                </form>
                  <?php } ?>
                <div class="binhluan-danhsach">
                  <?php if ($databl !=NULL) {?>
                     <h2 style="margin-bottom: 20px;font-size: 24px;"><?php echo count($databl); ?> bình luận</h2>
                 <?php }  ?>
                 
                  <?php

                        if($data_bl!="") {
                          foreach ($data_bl as $value) { ?>
                             <div class="binhluan-item">
                              <?php if ($value['trangthai']==1) {?>
                                 <div class="binhluan-content">
                                    <p class="bl-ten"><b><?php echo $value['hoten']; ?></b><span class="bl-ngay"><?php echo $value['ngaybl']; ?></span></p>
                                    <p class="bl-content"><?php echo $value['noidung']; ?></p>
                                </div>
                             <?php  } ?>
                               
                            </div>
                    <?php }
                  } ?>
                </div>
                <?php
                  if($data_bl != NULL)
                  {
                    ?>
                <div class="container1">
                  <div class="pagination" id="comment">
                    <?php 
                    for ($i=1; $i <=$sotrang ; $i++) { 
                      echo '<a href="./index.php?action=chitiet&id='.$value["id_sp"].'&page='.$i.'#comment">'.$i.'</a>';
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
   </div> 
   <?php include('includes/customer/footer.php') ?>
</body>
</html>