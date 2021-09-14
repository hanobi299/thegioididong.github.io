
<?php 
session_start();

 ?>
<?php
require_once 'models/BaseModels.php';
	/**
	 * 
	 */
	class SanphamController
	{
		public $models;
		function __construct()
		{
			$this->models=new BaseModel();
		}	
		
		public function dieuhuong(){
			if(isset($_GET['action'])){
				switch ($_GET['action']) {
					case 'quanly':
	        			$sql1 = " SELECT * FROM `danhmuc`";
	        			$sql2 = "SELECT* FROM `loaisp`";
	        			$data = $this->models->laysanpham();
	        			$ketqua = $this->models->laysanphamquanly(5, isset($_GET['page'])? $_GET['page'] : 1);
	        			$ket = $this->models->laydanhmuc($sql1);
	        			$kq  = $this->models->layloaisp($sql2);
	        			$sotrang = isset($ketqua)? $ketqua[0]['total'] < 5? 1 : ($ketqua[0]['total'] % 5 > 0)? ($ketqua[0]['total']/5) + 1: $ketqua[0]['total']/5 : 0;
	         			require_once 'views/qlsp.php';
					break;
					case 'admin_dashboard':
						$sql1 =" SELECT count(id_hd) FROM `hoadon`";
	        		    $sumhoadon =  $this->models->sumhd($sql1);
						$sql2 ="SELECT sum(soluong) FROM `chitiethoadon`";
	        			$sumsoluong = $this->models->sumSL($sql2);
	        			$sql = "SELECT count(id_user) FROM `user` WHERE user.level = 2";
	        			$sumuser = $this->models->sumuser($sql);
	        			$sqldt = " SELECT sum(Total) FROM `hoadon`";
	        			$sumdt = $this->models->sumdt($sqldt);
	        			// $sqlhot = "SELECT Top 5 sp.id_sp,sp.ten_sp, Sum('cthd.soluong') as SL, sp.gia_sp From sanpham sp, chitietsanpham cthd Where sp.id_sp = cthd.id_sp Group by sp.id_sp,sp.ten_sp,sp.gia_sp Order by Sum('cthd.Soluong') DESC";
	        			// $sphot = $this->models->sphot($sqlhot);
	         			require_once 'views/quanly.php';
					break;
					case 'hoadon':
		        		$sql = "SELECT * FROM hoadon ";
						$ketqua  = $this->models->layhoadon($sql);
					require_once('views/quanlyhoadon.php');			
					break;

					case 'them':
						 $data=$this->models->layloaisp();
						 $datadm=$this->models->laydanhmuc();
						 require_once 'views/test.php';
						 if (isset($_POST['nutthem'])) {
						 	$ldm2 =$_POST['ldm'];
						 	$tsp2 = $_POST['tsp'];
						 	$gsp2 = $_POST['gsp'];
						 	$id_lsp2 = $_POST['lsp'];
						 	$linkha2 = $_POST['linkha'];
						 	$sl2=$_POST['sl'];
						 	$mt2 = $_POST['mt'];
						 	$thongso=$_POST['thongso'];
						 	$ngaynk2 = $_POST['ngaynk'];
						 	if ($sl2<0) {
							 		echo "Lỗi nhập số lượng !!";
							 	}
							 	else{
						 	$this->models->themsanpham($ldm2,$tsp2,$gsp2,$id_lsp2,$linkha2,$sl2,$mt2,$thongso,$ngaynk2);
							header('Location:index.php?action=quanly&message=success');
							}
						}
						break;
					case 'themdm':
						require_once'views/themdanhmuc.php';
							if (isset($_POST['nutthemdm'])) {
								$ten_dm=$_POST['tdm'];
								$this->models->themdanhmuc($ten_dm);
								header('Location:index.php?action=danhmuc');
							}
							break;
					case 'themnh':
						require_once'views/themnhanhieu.php';
							if (isset($_POST['nutthemnh'])) {
								$ten_nh=$_POST['tennh'];
								$sdt   =$_POST['sdt'];
								$diachi=$_POST['diachi'];
								$ghichu=$_POST['mota'];
								$this->models->themnhanhieu($ten_nh,$sdt,$diachi,$ghichu);
								header('Location:index.php?action=nhanhieu');
							}	
						break;
					case 'dangky':
						 require_once 'views/dangky.php';
						 if(isset($_POST['nutdangky'])){
							$user       = $_POST["tdk"];
							$pass1      = $_POST["pass1"];
							$pass2      = $_POST["pass2"];
							$Hoten		= $_POST["Hoten"];
							$ngaysinh   = $_POST["ns"];
							$gioitinh   = $_POST["gioitinh"];
							$email      = $_POST["email"];
							$sdt        = $_POST["sdt"];
							$diachi     = $_POST["diachi"];
							$ngaydangky = date("Y-m-d");
							if ($user==""||$pass1==""||$sdt==""||$diachi==""||$email==""||$ngaydangky=="") {
								echo "Yêu cầu nhập đủ dữ liệu";
							}
							else{
								$sql="select*from user where user='".$user."'";
								$this->ketqua = $this->models->checktaikhoan($user);
								if($this->ketqua==0&&$pass1==$pass2){
									$this->models->dangkythanhvien($user,$pass1,$Hoten,$ngaysinh,$gioitinh,$email,$sdt,$diachi,$ngaydangky);
									header("location:index.php?action=dangnhap&message=success");
								}else{ 
									if ($this->ketqua!=0) {
									    echo '<script type="text/javascript">';
  										echo ' alert("Tài khoản đã tồn tại!")';  //not showing an alert box.
  										echo '</script>';
									
									}
									if ($pass1!=$pass2) {
									     echo '<script type="text/javascript">';
 										 echo ' alert("Mật khẩu không khớp !")';  //not showing an alert box.
 										 echo '</script>';
									}
								}

							}

						}	

						break;

					case 'sua':
						$data = $this->models->layloaisp();
						$data1 = $this->models->laysanpham_id($_GET['id_sua']);
						$datadm=$this->models->laydanhmuc();
						include_once('views/sua.php');
						if(isset($_POST['nutsua'])){
							$id=$_GET['id_sua'];
							$id_dm2=$_POST['ldm'];
							$tsp2 = $_POST["tsp"];
							$gsp2 = $_POST["gsp"];
							$id_lsp2 = $_POST['lsp'];
							$linkha2 = $_POST['linkha']
							;
							if ($linkha2=='') {
								$linkha2=$_POST['linkha1'];
							}
							$sl2=$_POST['sl'];
							$mt2 = $_POST['mt'];
							$thongso=$_POST['thongso'];
							$ngaynk2 = $_POST['ngaynk'];
						   if ($id_dm2==""||$tsp2==""||$gsp2==""||$id_lsp2==""||$sl2==""||$thongso==""||$ngaynk2=="") {
						     	echo '<script type="text/javascript">';
  								echo ' alert("Nhập Thiếu dữ liệu !")';  //not showing an alert box.
  								echo '</script>';
						 	
						 	}else
							if ($sl2<0) {
								echo '<script type="text/javascript">';
  								echo ' alert("Lỗi nhập số lượng!")';  //not showing an alert box.
  								echo '</script>';
							}else{
								$this->models->suasanpham($id,$id_dm2,$tsp2,$gsp2,$id_lsp2,$linkha2,$sl2,$mt2,$thongso,$ngaynk2);
								header('Location:index.php.?action=quanly&message=success');
							}	
						}
					break;
					case 'suauser':
						$data = $this->models->layid_user($_GET['id_user']);
						include_once('views/sua_ad.php');
						if (isset($_POST['suaad'])) {
							$id=$_GET['id_user'];
							$user=$_POST['user'];
							$pass= $_POST['pass'];
							$level=$_POST['level'];
							$Hoten=$_POST['Hoten'];
							$ngaysinh=$_POST['ngaysinh'];
							$gioitinh=$_POST['gioitinh'];
							$email =$_POST['email'];
							$sdt   =$_POST['dienthoai'];
							$diachi=$_POST['diachi'];
							$this->models->suauser($id,$user,$pass,$level,$Hoten
								,$ngaysinh,$gioitinh,$email,$sdt,$diachi);
							header('Location:index.php?action=khachhang');

						}
						break;
					case 'suadanhmuc':
						$data = $this->models->layid_danhmuc($_GET['id_dm']);
						include_once('views/sua_dm.php');
						 if(isset($_POST['suadm'])){
						 	$id_dm=$_POST['iddm'];
						 	$ten_dm=$_POST['tendm'];
						 	$this->models->suadm($id_dm,$ten_dm);
						 	header('Location:index.php?action=danhmuc&message=success');
						 }
						break;
					case 'suanhan':
						$data = $this->models->layid_nhanhieu($_GET['id_loai_sp']);
						include_once('views/sua_nh.php');
						 if(isset($_POST['suanh'])){
						 	$id_nh=$_POST['idnh'];
						 	$ten_nh=$_POST['tennh'];
						 	$sdt   =$_POST['sdt'];
						 	$diachi=$_POST['diachi'];
						 	$ghichu=$_POST['mota'];
						 	$this->models->suanhanhieu($id_nh,$ten_nh,$sdt,$diachi,$ghichu);
						 	header('Location:index.php?action=nhanhieu');
						 }
						break;
					case 'xoa':
						$this->models->xoasanpham($_GET['id_xoa']);
						header('Location:index.php?action=quanly&message=success');
						break;
					case 'xoauser':
							$this->models->xoauser($_GET['id_user']);
							header('Location:index.php?action=khachhang');
							break;
					case 'xoadm':
						$s1 = $this->models->layid_danhmucsp($_GET['id_dm']);
						if($s1!=null){
							echo '<script type="text/javascript">';
							echo ' alert("Có sản phẩm trong danh mục này.Không thể thực hiện xóa!")';  
							echo '</script>';
						}else{
							$this->models->xoadm($_GET['id_dm']);
						}	
							header('Location:index.php?action=danhmuc&message=success');
							break;
					case 'xoanhan':
						$s2 = $this->models->layid_nhanhieu($_GET['id_loai_sp']);
						if($s2!=null){
							echo '<script type="text/javascript">';
							echo ' alert("Có sản phẩm của nhãn hiệu này.Không thể thực hiện xóa!")';  
							echo '</script>';
						}else{
                            $this->models->xoanhanhieu($_GET['id_loai_sp']);
                        }
							header('Location:index.php?action=nhanhieu');
							break;
					case 'xoahoadon':
							$this->models->xoahoadon($_GET['id']);
							header('Location:index.php?action=hoadon');
						break;					
					case'danhmuc':
							$sql = "SELECT * FROM `danhmuc` ";
							$ketqua2 = $this->models->laydanhmuc($sql);
							include_once('views/danhmuc.php');
							break;
						break;
					case 'nhanhieu':
						$sql="SELECT * FROM `loaisp`";
						$ketqua2 = $this->models->layloaisp($sql);
						 include_once('views/nhanhieu.php');
						break;
					case 'dangnhap':

						include_once('views/dangnhap.php');
						if (isset($_POST['nutdangnhap'])) {
							$tendn= $_POST['tdn'];
							$mkhau=$_POST['mk'];
							$data1=$this->models->kiemtradangnhap($tendn,$mkhau);
							$dem1 =$this->models->dembangghi($tendn,$mkhau);
							if ($dem1==0) {
								echo '<script type="text/javascript">';
									echo ' alert("đăng nhập thất bại!")';  
									echo '</script>';

								
							}else{
								$_SESSION['tennguoidung']=$tendn;
								$_SESSION['quyennguoidung']=$data1[0]['level'];
								$_SESSION['diachi']=$data1[0]['diachi'];
								$_SESSION['dienthoai']=$data1[0]['dienthoai'];
								$_SESSION['hoten']=$data1[0]['Hoten'];
								$_SESSION['id']=$data1[0]['id_user'];
								if($_SESSION['quyennguoidung']==1||$_SESSION['quyennguoidung']==3){
	        				$ketqua= $this->models->laysanpham($sql);

										header('Location:index.php?action=admin_dashboard');
								}else{
									header('location:index.php');
								}
							}
						}
						break;
						case 'Category':
						$iddm=$_GET['id_dm'];
						$danhmuc=$this->models->layid_danhmuc($iddm);
						$kq=$this->models->layid_danhmucsp($iddm);
						include_once('views/Category.php');
						break;
						case 'tintuc':{
							include_once('views/tintuc.php');
							}
							break;
				    	case 'xemchitiet':
							if (isset($_GET['id'])) {
								$id_hoadon=$_GET['id'];
								$data = $this->models->layid_hoadon($id_hoadon);
						include_once('views/chitiethoadonkhach.php');
						}
						break;

						case 'add':
							if (isset($_SESSION['tennguoidung'])) {
							$id =isset($_GET['id']) ? (int)$_GET['id'] : '';
							$sanpham=$this->models->layid_sanpham($id)[0];
							 if ($sanpham) {
								if (isset($_SESSION['giohang'][$id]))
							     {
							     	if (isset($_SESSION['giohang'][$id]))
							         {
							    		$_SESSION['giohang'][$id]['soluong']+=1;	
							     	}
							     	else
							     	{
							     		$_SESSION['giohang'][$id]['soluong']=1;
							     	}
							     	$_SESSION['giohang'][$id]['name']=$sanpham['ten_sp'];
							     	$_SESSION['giohang'][$id]['gia']=$sanpham['gia_sp'];
							 		$_SESSION['giohang'][$id]['hinhanh_sp']=$sanpham['hinhanh_sp'];
							     	$_SESSION['success']='sản phẩm đã có trong giỏ hàng! cập nhật mới';
							     	header("location:index.php");
							     	exit();
									
							 	}
							 	else
							 	{
							 		$_SESSION['giohang'][$id]['soluong']=1;
							 		$_SESSION['giohang'][$id]['name']=$sanpham['ten_sp'];
							 		$_SESSION['giohang'][$id]['gia']=$sanpham['gia_sp'];								
							 		$_SESSION['giohang'][$id]['hinhanh_sp']=$sanpham['hinhanh_sp'];
							 		$_SESSION['success']='Thêm sản phẩm vào giỏ hàng thành công!!!';
							 		header("location:index.php");
							 		exit();
							 	}
							 }
							 else{
							 	$_SESSION['success']='không tồn tại sp trong csdl!!';
							 	header("location:index.php");
							 	exit();
							 }
							}
							header("Location:index.php?action=dangnhap");
							exit();
							break;
						case "capnhatgiohang" : {
								$id = $_POST["id_sp"];
								$soluong = $_POST["soluong"];								
									for($i = 0; $i < count($id); $i++) {
										if($soluong[$i] <= 0) {
											unset($_SESSION["giohang"][$id[$i]]);
											
										}
										else {
											$_SESSION["giohang"][$id[$i]]["soluong"] = $soluong[$i];
									    }
									}
									
								header("Location: index.php?action=listcart");
							break;
						}
						case 'taohoadon': {
								$result = $this->models->taohoadon($_SESSION["id"],$_POST["hoten"],$_POST["diachi"],$_POST["dienthoai"],$_POST["ghichu"],$_POST["tongtien"], 0, $_POST['phuongthucthanhtoan']);
								if($result) {
									$_SESSION["thongbao"] = "Mua hàng thành công.";
									header("Location:index.php?action=listcart");		
								}
							else echo '<script type="text/javascript">';
  								 echo ' alert("Lỗi mua hàng do số lượng mua quá lớn.Hãy kiểm tra lại!")';  //not showing an alert box.
  								 echo '</script>';
								 echo  "<a href=index.php>Về trang chủ</a>";
							break;

						}
						case 'xemchitiethoadon':
							if (isset($_GET['id'])) {
								$id_hoadon=$_GET['id'];
								$data = $this->models->layid_hoadon($id_hoadon);
							$sql = "SELECT * FROM hoadon ";
						    $hoadon = $this->models->layhoadon($sql);
							}
						    if (isset($_POST['ok'])) {
	
									$ketqua = $this->models->capnhaptrangthai($_POST['id'],$_POST['trangthai']);
									header("Location:index.php?action=hoadon");
								}
								include_once('views/chitiethoadon.php');


							break;	

						
						case 'listcart':
							include_once('views/list_cart.php');
							break;
						case 'quanlybinhluan':
							$sql="SELECT * FROM `binhluan`";
							$databl = $this->models->layBinhLuan($sql);
							if (isset($_POST['ok'])) {
	
									$ketqua = $this->models->capnhaptrangthaibinhluan($_POST['id'],$_POST['trangthai']);
									header("Location:index.php?action=quanlybinhluan");
								}
								include_once('views/quanlybinhluan.php');
							break;
						case 'xoabl':
							$this->models->xoabl($_GET['id_bl']);
							header('Location:index.php?action=quanlybinhluan');
							break;
						case 'chitiet':
						if(isset($_GET['id'])){
							$id_sp=$_GET['id'];
							$data_id=$this->models->layid_sanpham($id_sp);
							$databl=$this->models->layBinhLuanid($id_sp);
							$data_bl=$this->models->layBinhLuanCT($id_sp, 5, isset($_GET['page'])? $_GET['page'] : 1);
							$sotrang = isset($data_bl)? $data_bl[0]['total'] < 5? 1 : ($data_bl[0]['total'] % 5 > 0)? ($data_bl[0]['total']/5) + 1: $data_bl[0]['total']/5 : 0; 
							include_once('views/chitiet.php');
							if(isset($_POST['submit']))
								{
								$id_sp=$_GET['id'];
								$id_user=$_POST['id_user'];
								$ten=$_POST['hoten'];
								$binhluan=$_POST['noidung'];
								$ngaybinhluan = date("Y-m-d H:i:s");
								$this->models->themBinhLuan($id_sp,$id_user,$ten,$binhluan,$ngaybinhluan);
								header('Location:index.php?action=chitiet&id='.$id_sp.'&message=success');
								}
						}
						break;
						case 'xoaCart':
								if (!isset($_SESSION['giohang'])) 
								{
									header("location:index.php");
									exit;
								}
								$key=isset($_GET['key']) ? (int)$_GET['key'] : '';
								if ($key)
							    {
							    	if (array_key_exists($key,$_SESSION['giohang'])) 
							    	{
							    		unset($_SESSION['giohang'][$key]);
							    		$_SESSION['success'] ='Xóa sản phẩm trong giỏ hàng thành công';
							    	}

								}
							header("location:index.php?action=listcart");exit();
							break;

						case 'xoagiohang':
								unset($_SESSION['giohang']);
								header("location:index.php?action=listcart");
								exit();
							break;	
						case 'khachhang':
							$sql      = "SELECT * FROM user ";
							$ketqua1  = $this->models->layuser($sql);
							include_once('views/khachhang.php');
							break;
					case 'suathongtin':
						$data = $this->models->layid_user($_GET['idnd']);
						include_once('views/thongtin.php');
						if (isset($_POST['suatt'])) {
							$id=$_GET['idnd'];
							$pass= $_POST['pass'];
							$Hoten=$_POST['Hoten'];
							$ngaysinh=$_POST['ngaysinh'];
							$gioitinh=$_POST['gioitinh'];
							$email =$_POST['email'];
							$sdt   =$_POST['dienthoai'];
							$diachi=$_POST['diachi'];
							/*if ($pass==""||$Hoten==""||$email==""||$sdt==""||$diachi=="") {
								echo "Nhập thiếu dữ liệu";
							}else{}*/
							$this->models->suatt($id,$pass,$Hoten
								,$ngaysinh,$gioitinh,$email,$sdt,$diachi);
							header('Location:index.php?action=Thongtincanhan&idnd='.$id.'&message=success');
							header('Location:index.php?action=dangnhap&message=ok');

						}
						break;
						case 'Thongtincanhan':
							if(isset($_POST['suatt']))
							{

							}else{	
								$id = $_GET['idnd'];
								$data=$this->models->layid_user($id);
								$hoadon1=$this->models->layhoadon_iduser($id);
								include_once('views/thongtin.php');
							}
							break;
						case 'lichsudonhang':
								{
								$id = $_GET['idnd'];
								$data=$this->models->layid_user($id);
								$hoadon1=$this->models->layhoadon_iduser($id);
								include_once('views/lichsudonhang.php');
								}
							break;	
					}

				}else{

                    if (isset($_GET['tukhoa'])) {
						$key=$_GET['tukhoa'];
						if ($key==NULL) {
							header('Location:index.php');
						}
						$data_tk=$this->models->tksp($key);
						
						include_once 'views/timkiem.php';
						exit();

					}
					   if (isset($_GET['ten'])) {
						$ten=$_GET['ten'];
						if ($ten==NULL) {
							header('Location:index.php?action=khachhang');
						}
						$data_tk=$this->models->tkkh($ten);
						
						include_once 'views/timkiem_user.php';
						exit();

					}
					if (isset($_GET['key'])) {
							$key=$_GET['key'];
							if ($key==NULL) {
								header('Location:index.php?action=quanly');
							}
							$sql1 = " SELECT * FROM `danhmuc`";
	        				$sql2 = "SELECT* FROM SELECT * FROM `loaisp`";
	        	        	$ket = $this->models->laydanhmuc($sql1);
	        			    $kq  = $this->models->layloaisp($sql2);
							$data_tk1=$this->models->tksp($key);
							include_once 'views/timkiem_ad.php';
							exit();
					}
					else{
						$data = $this->models->laysanpham();
						$sanphammoi=$this->models->sanphammoi();
						$id=1;
						$dienthoai=$this->models->danhmucsp($id);
						$id1=2;
						$tablet=$this->models->danhmucsp($id1);
						$id2=3;
						$laptop=$this->models->danhmucsp($id2);
						$id3=4;
						$phukien=$this->models->danhmucsp($id3);
						$id4=5;
						$dongho=$this->models->danhmucsp($id4);
						$dienthoai2=$this->models->danhmucsp_dt($id);
						$id1=2;
						$tablet2=$this->models->danhmucsp_home($id1);
						$id2=3;
						$laptop2=$this->models->danhmucsp_home($id2);
						$id3=4;
						$phukien2=$this->models->danhmucsp_home($id3);
						$id4=5;
						$dongho2=$this->models->danhmucsp_home($id4);

					
					include_once('views/home.php');
					}
				
				}	
			}				
		}
?>	