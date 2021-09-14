<?php
if (isset($_POST['nutdx'])) {
	session_unset();
}
?>
<?php include('includes/customer/hearder.php') ?>

<div class="content">
		<div class="slider">
                <div class="container">
                    <div class="slider_content">
                        <div class="slider_content_left">
                            <div class="slider_content_left_top_container">
                                <div class="slider_content_left_top">
                                    <a href=""><img src="img/slide/s1.png" alt=""></a>
                                    <a href=""> <img src="img/slide/s2.png" alt=""></a>
                                    <a href=""> <img src="img/slide/s3.png" alt=""></a>
                                    <a href=""> <img src="img/slide/s4.png" alt=""></a>
                                    <a href=""> <img src="img/slide/S21-830-300-830x300.png" alt=""> </a>
                                </div>
                                    <div class="slider_content_left_top_btn">
                                        <i class="fa fa-caret-left" ></i>
                                        <i class="fas fa-caret-right"></i> 
                                    </div>
                                </div>
                                <div class="slider_content_left_bottom">
                                    <li class="active">tiêu đề 1</li>
                                    <li class="">tiêu đề 2</li>
                                    <li class="">tiêu đề 3</li>
                                    <li class="">tiêu đề 4</li>
                                    <li class="">tiêu đề 5</li>
                                </div>
                            </div>
                            <div class="slider_content_right">
                                <li> <a href=""><img src="img/banner/1.jpg" alt=""></a> </li>
                                <li> <a href=""><img src="img/banner/2.jpg" alt=""></a> </li>
                                <li> <a href=""><img src="img/banner/3.jpg" alt=""></a> </li>
                                <li> <a href=""><img src="img/banner/4.jpg" alt=""></a> </li>

                            </div>
                    </div>

                </div>   
            </div>
            <div class="banner_one"><img src="/img/banner/1200-60-1200x60.png" alt=""></div>
			<div class="product">
                    <div class="container">
                        <div class="product_content">
                            <div class="product_content_title">
                                <?php
                                    foreach ($danhmuc as $value)
                                    { ?>
                                        <p><?php  echo count($kq)?> <?php echo $value['ten_dm']?> </p> 

                                <?php }?>
                                
                                       
                            </div>
                            <div class="product_content_product">
								<?php
									foreach ($kq as $value)
									{ 
								 ?>
                                <div class="product_items">
                                    <a href="index.php?action=chitiet&id=<?php echo $value['id_sp'] ?>">
											<?php echo '<img src="anh/'.$value['hinhanh_sp'].'">'?>
                                        <div class="product_item_text">
                                            <li><img src="img/icon/icon1.png" alt=""><p>Trợ giá mùa dịch</p></li>
                                            <li><h3><?php echo $value['ten_sp'];?></h3></li>
                                            <li>Online giá rẻ</li>
                                            <li><strong>25.999.000 <sup>đ</sup></strong><span>-6%</span> </li>
                                            <li> <strong><?php echo number_format($value['gia_sp']); ?><sup>đ</sup></strong> </li>
                                            <li>Quà 400.000 <sup>đ</sup></li>
                                            <li>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                            </li>
                                        </div>
                                    </a>
                                </div>
								<?php
								}
								?>
                            </div>
                        </div>
                    </div>
            </div>
		</div>									
</div>
<?php include('includes/customer/footer.php') ?>
	
	
