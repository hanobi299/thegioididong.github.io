<?php
if (isset($_POST['nutdx'])) {
	session_unset();

}
?>
<!DOCTYPE html>
<html>
<head lang="vi">
	<title>thegioididong.com</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/dm.css">

</head>


<body>
	<div id="wrapper">
		<div id="main_menu">
			<ul>
				<a href="index.php">
					<form action="?tukhoa=<?php echo($key); ?>" class="timkiem" method="GET">
						<a href="index.php" ><img id="tklogo" width="150px" height="65px" src="anh/123.png"></a>
						<div class="boxtk">

                		<input id="tk" type="Search" name="tukhoa" placeholder="Tìm Kiếm..."/>
                		</div>
            		</form>
            	</a>
				<li><a href="index.php?action=Category&id_dm=1"><div><img width="25px" height="30px" id="icon" src="anh/smartphone-call.png" alt="1"></div>Điện Thoại</a>
				</li>
				<li><a href="index.php?action=Category&id_dm=2"><div><img width="25px" height="30px" id="icon" src="anh/tablet.png"></div>Tablet</a>
				</li>
				<li><a href="index.php?action=Category&id_dm=3"><div><img width="35px" height="30px" id="icon" src="anh/laptop.png"></div>Laptop</a>
				
				</li>
				<li><a href="index.php?action=Category&id_dm=4"><div><img width="25px" height="30px" id="icon" src="anh/earphones.png"></div>Phụ Kiện</a>
				
				</li>
				<li><a href="index.php?action=Category&id_dm=5"><div><img width="25px" height="30px" id="icon" src="anh/sport-watch.png"></div>Đồng Hồ</a>
				
				</li>
				<li><a href="#"><div><img width="25px" height="30px" id="icon" src="anh/cu.png"></div>Đồ Cũ</a>
				
				</li>
				<li><a href="index.php?action=tintuc"><div><img width="25px" height="30px" id="icon" src="anh/circular-arrow-clock.png"></div>Công Nghệ</a>
					
				</li>
				<li><a href="#"><div><img width="25px" height="30px" id="icon" src="anh/call-center.png"></div>Hỏi Đáp</a>
					
				</li>
				
		            <?php 
					if (isset($_SESSION['tennguoidung'])and($_SESSION['quyennguoidung'])!=0) {
						?>
							<li><a href="index.php?action=listcart"><div><img width="25px" height="30px" id="icon" src="anh/cart.png"></div>Giỏ hàng</a>
					</li >
					<li><a href="index.php?action=Thongtincanhan&idnd=<?php echo($_SESSION['id']); ?>"><div><img id="icon" src="anh/icon.png"></div> <?php echo $_SESSION['tennguoidung']; ?></a>
						<ul class="sub_menu">
						<li><form method="POST"><button class="bn" type="submit" name="nutdx">Logout</button></form></li>
					</ul>
					</li>
					<?php
					}else{
					?>
						<li><a href="index.php?action=dangnhap"><div><img width="25px" height="30px" id="icon" src="anh/cart.png"></div>Giỏ hàng</a>
					</li>
					<li><a href="index.php?action=dangnhap"><div><img id="icon" src="anh/icon.png"></div> Đăng Nhập</a>
						<ul class="sub_menu">
							<li><a href="index.php?action=dangky"><button type="button" class="bn">Đăng ký</button></a></li>
						</ul>
					
					</li>
					<?php
					}
					?>				
				
			</ul>
				<div class="clearfix"></div>
		</div>
		

		<div id="content">
						<div class="banner">
					<div class="slideshow-container">
						<div class="mySlides active">
						  <img src="anh/s1.png" style="width:800px">
						</div>

						<div class="mySlides fade">
						  <img src="anh/s2.png" style="width:800px">
						
						</div>

						<div class="mySlides fade">
						  <img src="anh/s3.png" style="width:800px">
						
						</div>
					     <div class="mySlides fade">
						  <img src="anh/s4.png" style="width:800px">
						
						</div>

							 <!-- Next and previous buttons -->
						 <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
						 <a class="next" onclick="plusSlides(1)">&#10095;</a>

						</div>
							<br>

							<!-- The dots/circles -->
							<div style="text-align:center">
							  <span class="dot" onclick="currentSlide(1)"></span>
							  <span class="dot" onclick="currentSlide(2)"></span>
							  <span class="dot" onclick="currentSlide(3)"></span>
							  <span class="dot" onclick="currentSlide(4)"></span>
							</div>
						<script>
						var slideIndex = 0;
						showSlides();
						function plusSlides(n) {
						  showSlides(slideIndex += n);
						}

						function currentSlide(n) {
						  showSlides(slideIndex = n);
						}
						function showSlides(n) {
						  var i;
						  var slides = document.getElementsByClassName("mySlides");
						  var dots = document.getElementsByClassName("dot");
						  for (i = 0; i < slides.length; i++) {
						    slides[i].style.display = "none";  
						  }
						  slideIndex++;
						  if (slideIndex > slides.length) {slideIndex = 1}    
						  for (i = 0; i < dots.length; i++) {
						    dots[i].className = dots[i].className.replace(" active", "");
						  }
						  slides[slideIndex-1].style.display = "block";  
						  dots[slideIndex-1].className += " active";
						  setTimeout(showSlides, 5000); // Change image every 5 seconds
						}
						</script>
				<div class="banner2">
					<img id="a1" src="anh/iphone-11-pro-398-110-398x110-1.png">
					
					<img id="a2" src="anh/398-110-398x110-3.png">
					
				</div>
				 <div class="banner-qc">
				 	<img style=" width: 82.4%; margin-left: 140px;margin-top: 15px;margin-bottom: 10px;" src="anh/banner-qc-1 (2).jpg" alt="">
                    <img style=" width: 82.4%; margin-left: 140px;margin-bottom: 10px;" src="anh/qc1.gif" alt="">
                </div>
						
			</div>	
			<div class="box clearfix">
			  <div class="container">
				</div>
			<div class="sp">
				<div class="col-md-9">
					<div class="panel-info">
						<div class="panel-heading"></div>
				<?php 
					if ($data_tk==0) {
						?>
						<h1 class="panel-title" style="text-align: center; font-size: 20px;padding-top: 10px;margin-right: 50px margin-bottom 10px;"><?php echo "Không tìm thấy kết quả với ".$key; ?></h1>
						<?php
					}
					else{
						?>
							<h2 style="text-align: center; font-size: 20px;padding-top: 10px;color: black;margin-right: 50px margin-bottom 10px;"><?php echo "Kết quả với từ ".$key; ?> ( <?php echo count($data_tk) ?> kết quả trả về ) </h2>
						<?php
					foreach ($data_tk as $value)
					{
				?>

					<div class="info" ><a href="index.php?action=chitiet&id=<?php echo $value['id_sp'] ?>">
													<div id="anh">
														<?php
															echo '<img src="anh/'.$value['hinhanh_sp'].'">'
														?>
													</div></a>
													<div id="ten">
														<?php
															echo $value['ten_sp'];
														?>
													</div>

													<div id="gia">
														<p>Giá</p>
														<?php
															echo number_format($value['gia_sp']); 
														?>đ
													</div>
															
													<div id="ngnk" >
														<p>Ngày ra mắt</p>
														<?php
															echo $value['ngaynhapkho_sp'];
														?>
													</div>
													<div class="mua">
													   <form method="POST"> 
							                                <a href="index.php?action=add&id= <?php echo $value['id_sp'] ?>" >      
							                                     <button class="bn" type="button">Mua Ngay</button></a>  
							                          </form>
							                          </div> 
												</div>
				<?php
					}
				}
				?>
				</div>	
			</div>
			</div>
		</div>
	</div>
		<div id="footer">				
				<div class="foot1">
			        <ul>
			        	<li>
			                <p>Gọi mua hàng <a href="tel:18001060">1800.1060</a> (7:30 - 22:00)</p>
			                <p>Gọi khiếu nại  <a href="tel:18001062">1800.1062</a> (8:00 - 21:30)</p>
			                <p>Gọi bảo hành  <a href="tel:18001064">1800.1064</a> (8:00 - 21:00)</p>
			                <p>Kỹ thuật <a href="tel:18001763">1800.1763</a> (7:30 - 22:00)</p>
            	   		</li>
			        </ul> 
		    </div>	             
		</div>	
</div>
</body>
</html>