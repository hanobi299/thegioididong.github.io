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
			  <div class="container">
				</div>
				    <?php if (isset($_SESSION['success'])) :?>
				    	<?= $myMessage= addslashes($_SESSION["success"]);
                        echo "<script type='text/javascript'>alert('$myMessage');</script>"; ?>
				     <?php endif ; unset($_SESSION['success']) ?>
					<div class="sp">
							<!---Mới nhất--->
			<div class="slider_product">
                <div class="slider_product_content">
                    <div class="slider_product_content_title">
                            <h2>Săn Sale Online Mỗi Ngày</h2>    
                    </div>
                        <div class="slider_product_container">
                            <div class="slider_product_content_items">
                                <div class="slider_product_items">
									
                                    <div class="slider_product_content_item">
                                        <a href="">
                                            <img src="img/product/dtdd/iphone11.jpg" alt="">
                                            <div class="slider_product_item_text">
                                                <li><img src="img/icon/icon1.png" alt=""><p>Trợ giá mùa dịch</p></li>
                                                <li><h3>Iphone 11 128GB</h3></li>
                                                <li>Online giá rẻ</li>
                                                <li><strong>25.999.000 <sup>đ</sup></strong><span>-6%</span> </li>
                                                <li> <strong>24.999.000 <sup>đ</sup></strong> </li>
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
                                    <div class="slider_product_content_item">
                                        <a href="">
                                            <img src="img/product/dtdd/iphone11.jpg" alt="">
                                            <div class="slider_product_item_text">
                                                <li><img src="img/icon/icon1.png" alt=""><p>Trợ giá mùa dịch</p></li>
                                                <li><h3>Iphone 11 128GB</h3></li>
                                                <li>Online giá rẻ</li>
                                                <li><strong>25.999.000 <sup>đ</sup></strong><span>-6%</span> </li>
                                                <li> <strong>24.999.000 <sup>đ</sup></strong> </li>
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
                                    <div class="slider_product_content_item">
                                        <a href="">
                                            <img src="img/product/dtdd/iphone11.jpg" alt="">
                                            <div class="slider_product_item_text">
                                                <li><img src="img/icon/icon1.png" alt=""><p>Trợ giá mùa dịch</p></li>
                                                <li><h3>Iphone 11 128GB</h3></li>
                                                <li>Online giá rẻ</li>
                                                <li><strong>25.999.000 <sup>đ</sup></strong><span>-6%</span> </li>
                                                <li> <strong>24.999.000 <sup>đ</sup></strong> </li>
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
                                    <div class="slider_product_content_item">
                                        <a href="">
                                            <img src="img/product/dtdd/iphone11.jpg" alt="">
                                            <div class="slider_product_item_text">
                                                <li><img src="img/icon/icon1.png" alt=""><p>Trợ giá mùa dịch</p></li>
                                                <li><h3>Iphone 11 128GB</h3></li>
                                                <li>Online giá rẻ</li>
                                                <li><strong>25.999.000 <sup>đ</sup></strong><span>-6%</span> </li>
                                                <li> <strong>24.999.000 <sup>đ</sup></strong> </li>
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
                                    <div class="slider_product_content_item">
                                        <a href="">
                                            <img src="img/product/dtdd/iphone11.jpg" alt="">
                                            <div class="slider_product_item_text">
                                                <li><img src="img/icon/icon1.png" alt=""><p>Trợ giá mùa dịch</p></li>
                                                <li><h3>Iphone 11 128GB</h3></li>
                                                <li>Online giá rẻ</li>
                                                <li><strong>25.999.000 <sup>đ</sup></strong><span>-6%</span> </li>
                                                <li> <strong>24.999.000 <sup>đ</sup></strong> </li>
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
                                </div>
                                <div class="slider_product_items">
                                    <div class="slider_product_content_item">
                                        <a href="">
                                            <img src="img/product/dtdd/iphone11.jpg" alt="">
                                            <div class="slider_product_item_text">
                                                <li><img src="img/icon/icon1.png" alt=""><p>Trợ giá mùa dịch</p></li>
                                                <li><h3>Iphone 11 128GB</h3></li>
                                                <li>Online giá rẻ</li>
                                                <li><strong>25.999.000 <sup>đ</sup></strong><span>-6%</span> </li>
                                                <li> <strong>24.999.000 <sup>đ</sup></strong> </li>
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
                                    <div class="slider_product_content_item">
                                        <a href="">
                                            <img src="img/product/dtdd/iphone11.jpg" alt="">
                                            <div class="slider_product_item_text">
                                                <li><img src="img/icon/icon1.png" alt=""><p>Trợ giá mùa dịch</p></li>
                                                <li><h3>Iphone 11 128GB</h3></li>
                                                <li>Online giá rẻ</li>
                                                <li><strong>25.999.000 <sup>đ</sup></strong><span>-6%</span> </li>
                                                <li> <strong>24.999.000 <sup>đ</sup></strong> </li>
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
                                    <div class="slider_product_content_item">
                                        <a href="">
                                            <img src="img/product/dtdd/iphone11.jpg" alt="">
                                            <div class="slider_product_item_text">
                                                <li><img src="img/icon/icon1.png" alt=""><p>Trợ giá mùa dịch</p></li>
                                                <li><h3>Iphone 11 128GB</h3></li>
                                                <li>Online giá rẻ</li>
                                                <li><strong>25.999.000 <sup>đ</sup></strong><span>-6%</span> </li>
                                                <li> <strong>24.999.000 <sup>đ</sup></strong> </li>
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
                                    <div class="slider_product_content_item">
                                        <a href="">
                                            <img src="img/product/dtdd/iphone11.jpg" alt="">
                                            <div class="slider_product_item_text">
                                                <li><img src="img/icon/icon1.png" alt=""><p>Trợ giá mùa dịch</p></li>
                                                <li><h3>Iphone 11 128GB</h3></li>
                                                <li>Online giá rẻ</li>
                                                <li><strong>25.999.000 <sup>đ</sup></strong><span>-6%</span> </li>
                                                <li> <strong>24.999.000 <sup>đ</sup></strong> </li>
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
                                    <div class="slider_product_content_item">
                                        <a href="">
                                            <img src="img/product/dtdd/iphone11.jpg" alt="">
                                            <div class="slider_product_item_text">
                                                <li><img src="img/icon/icon1.png" alt=""><p>Trợ giá mùa dịch</p></li>
                                                <li><h3>Iphone 11 128GB</h3></li>
                                                <li>Online giá rẻ</li>
                                                <li><strong>25.999.000 <sup>đ</sup></strong><span>-6%</span> </li>
                                                <li> <strong>24.999.000 <sup>đ</sup></strong> </li>
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
                                </div>
                                <div class="slider_product_items">
                                    <div class="slider_product_content_item">
                                        <a href="">
                                            <img src="img/product/dtdd/iphone11.jpg" alt="">
                                            <div class="slider_product_item_text">
                                                <li><img src="img/icon/icon1.png" alt=""><p>Trợ giá mùa dịch</p></li>
                                                <li><h3>Iphone 11 128GB</h3></li>
                                                <li>Online giá rẻ</li>
                                                <li><strong>25.999.000 <sup>đ</sup></strong><span>-6%</span> </li>
                                                <li> <strong>24.999.000 <sup>đ</sup></strong> </li>
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
                                    <div class="slider_product_content_item">
                                        <a href="">
                                            <img src="img/product/dtdd/iphone11.jpg" alt="">
                                            <div class="slider_product_item_text">
                                                <li><img src="img/icon/icon1.png" alt=""><p>Trợ giá mùa dịch</p></li>
                                                <li><h3>Iphone 11 128GB</h3></li>
                                                <li>Online giá rẻ</li>
                                                <li><strong>25.999.000 <sup>đ</sup></strong><span>-6%</span> </li>
                                                <li> <strong>24.999.000 <sup>đ</sup></strong> </li>
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
                                    <div class="slider_product_content_item">
                                        <a href="">
                                            <img src="img/product/dtdd/iphone11.jpg" alt="">
                                            <div class="slider_product_item_text">
                                                <li><img src="img/icon/icon1.png" alt=""><p>Trợ giá mùa dịch</p></li>
                                                <li><h3>Iphone 11 128GB</h3></li>
                                                <li>Online giá rẻ</li>
                                                <li><strong>25.999.000 <sup>đ</sup></strong><span>-6%</span> </li>
                                                <li> <strong>24.999.000 <sup>đ</sup></strong> </li>
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
                                    <div class="slider_product_content_item">
                                        <a href="">
                                            <img src="img/product/dtdd/iphone11.jpg" alt="">
                                            <div class="slider_product_item_text">
                                                <li><img src="img/icon/icon1.png" alt=""><p>Trợ giá mùa dịch</p></li>
                                                <li><h3>Iphone 11 128GB</h3></li>
                                                <li>Online giá rẻ</li>
                                                <li><strong>25.999.000 <sup>đ</sup></strong><span>-6%</span> </li>
                                                <li> <strong>24.999.000 <sup>đ</sup></strong> </li>
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
                                    <div class="slider_product_content_item">
                                        <a href="">
                                            <img src="img/product/dtdd/iphone11.jpg" alt="">
                                            <div class="slider_product_item_text">
                                                <li><img src="img/icon/icon1.png" alt=""><p>Trợ giá mùa dịch</p></li>
                                                <li><h3>Iphone 11 128GB</h3></li>
                                                <li>Online giá rẻ</li>
                                                <li><strong>25.999.000 <sup>đ</sup></strong><span>-6%</span> </li>
                                                <li> <strong>24.999.000 <sup>đ</sup></strong> </li>
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
                                </div>
                            </div>
                            <div class="slider_product_content_btn">
                                <i class="fa fa-caret-left fa-caret-left2" ></i>
                                <i class="fas fa-caret-right fa-caret-right2"></i> 
                            </div>
                        </div>
                    </div>
                
            </div>
					<!---Điện thoại--->
				<div class="product">
                    <div class="container">
                        <div class="product_content">
                            <div class="product_content_title">
                                <h2>ĐIỆN THOẠI NỔI BẬT NHẤT</h2>
                                <ul>
                                    <li><a href="">Samsung Galaxy A72</a></li>
                                    <li><a href="">Samsung Galaxy A92</a></li>
                                    <li><a href="index.php?action=chitiet&id=47">iphone 11</a></li>
                                    <li><a href="index.php?action=Category&id_dm=1">Xem tất cả (<?php echo count($dienthoai)?>) </a></li>
                                </ul>
                            </div>
                            <div class="product_content_product">
								<?php
									foreach ($dienthoai2 as $value)
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
					<!--Tablet-->
				<div class="product">
                    <div class="container">
                        <div class="product_content">
                            <div class="product_content_title">
                                <h2>LAPTOP NỔI BẬT NHẤT</h2>
                                <ul>
                                    <li><a href="">Samsung Galaxy A72</a></li>
                                    <li><a href="">Samsung Galaxy A92</a></li>
                                    <li><a href="index.php?action=chitiet&id=47">iphone 11</a></li>
                                    <li><a href="index.php?action=Category&id_dm=1">Xem tất cả (<?php echo count($laptop)?>) </a></li>
                                </ul>
                            </div>
                            <div class="product_content_product">
								<?php
									foreach ($laptop2 as $value)
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
					<!-- laptop -->
		<!--Tablet-->
		<div class="product">
                    <div class="container">
                        <div class="product_content">
                            <div class="product_content_title">
                                <h2>PHỤ KIỆN NỔI BẬT NHẤT</h2>
                                <ul>
                                    <li><a href="">Samsung Galaxy A72</a></li>
                                    <li><a href="">Samsung Galaxy A92</a></li>
                                    <li><a href="index.php?action=chitiet&id=47">iphone 11</a></li>
                                    <li><a href="index.php?action=Category&id_dm=1">Xem tất cả (<?php echo count($phukien)?>) </a></li>
                                </ul>
                            </div>
                            <div class="product_content_product">
								<?php
									foreach ($phukien2 as $value)
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
					<!--Phụ kiện-->
					<!--Tablet-->
				<div class="product">
                    <div class="container">
                        <div class="product_content">
                            <div class="product_content_title">
                                <h2>LAPTOP NỔI BẬT NHẤT</h2>
                                <ul>
                                    <li><a href="">Samsung Galaxy A72</a></li>
                                    <li><a href="">Samsung Galaxy A92</a></li>
                                    <li><a href="index.php?action=chitiet&id=47">iphone 11</a></li>
                                    <li><a href="index.php?action=Category&id_dm=1">Xem tất cả (<?php echo count($laptop)?>) </a></li>
                                </ul>
                            </div>
                            <div class="product_content_product">
								<?php
									foreach ($laptop2 as $value)
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
					<!--Tablet-->
					<div class="product">
                    <div class="container">
                        <div class="product_content">
                            <div class="product_content_title">
                                <h2>ĐỒNG HỒ NỔI BẬT</h2>
                                <ul>
                                    <li><a href="">Samsung Galaxy A72</a></li>
                                    <li><a href="">Samsung Galaxy A92</a></li>
                                    <li><a href="index.php?action=chitiet&id=47">iphone 11</a></li>
                                    <li><a href="index.php?action=Category&id_dm=1">Xem tất cả (<?php echo count($dongho)?>) </a></li>
                                </ul>
                            </div>
                            <div class="product_content_product">
								<?php
									foreach ($dongho2 as $value)
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
				
	</section>

<?php include('includes/customer/footer.php') ?>
