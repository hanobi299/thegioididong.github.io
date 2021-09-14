<?php
class BaseModel
{
	private $maychu = 'localhost';
	private $tk='root';
	private $mk='';
	private $csdl='thegioididong';
	private $bienketnoi=null;

	function __construct()
	{
		$this->ketnoi();
	}
	
	public function ketnoi()
	{
		$this->bienketnoi = new mysqli($this->maychu,$this->tk,$this->mk,$this->csdl);
		mysqli_set_charset($this->bienketnoi,'utf8');
	}
	public function laysanpham()
		{
			$sql="select * from sanpham";
			$this->ketqua=$this->bienketnoi->query($sql);
			if ($this->ketqua->num_rows==0) {
				$data=0;
			}else{
				while ($row=$this->ketqua->fetch_assoc()) {
					$data[]=$row;
				}
			}
			return $data;
		}
			public function laysanphamquanly($limit, $page)
		{
			$sql="select *, (select count(id_sp) from sanpham ) as total from sanpham LIMIT ".(($page - 1) * $limit).", ".'5'."";
			$this->ketqua=$this->bienketnoi->query($sql);
			if ($this->ketqua->num_rows==0) {
				$data=0;
			}else{
				while ($row=$this->ketqua->fetch_assoc()) {
					$data[]=$row;
				}
			}
			return $data;
		}
	 public function layhoadon_iduser($id){
			$sql="select * from hoadon where id_user=$id";
			$this->ketqua=$this->bienketnoi->query($sql);
			if ($this->ketqua->num_rows==0) {
				$data=0;
			}else{
				while ($row=$this->ketqua->fetch_assoc()) {
					$data[]=$row;
				}
			}
			return $data;

	 }
	 public function sanphammoi()
		{
			$sql="SELECT * FROM `sanpham` ORDER BY id_sp DESC LIMIT 5";
			$this->ketqua=$this->bienketnoi->query($sql);
			if ($this->ketqua->num_rows==0) {
				$data=0;
			}else{
				while ($row=$this->ketqua->fetch_assoc()) {
					$data[]=$row;
				}
			}
			return $data;
		}
		public function layuser(){
			$sql= "SELECT * FROM `user`";
			$this->ketqua=$this->bienketnoi->query($sql);
			if ($this->ketqua->num_rows==0) {
				$data=0;
			}else{
				while ($row=$this->ketqua->fetch_assoc()) {
					$data[]=$row;
				}
			}
			return $data;
		}
		public function sumhd($sql1){
			$this->ketqua=$this->bienketnoi->query($sql1);
			if ($this->ketqua->num_rows==0) {
				$data=0;
			}else{
				while ($row=$this->ketqua->fetch_assoc()) {
					$data[]=$row;
				}
			}
			return $data;
		}
		public function sumuser($sql){
			$this->ketqua=$this->bienketnoi->query($sql);
			if ($this->ketqua->num_rows==0) {
				$data=0;
			}else{
				while ($row=$this->ketqua->fetch_assoc()) {
					$data[]=$row;
				}
			}
			return $data;
		}
		public function sumdt($sqldt){
			$this->ketqua=$this->bienketnoi->query($sqldt);
			if ($this->ketqua->num_rows==0) {
				$data=0;
			}else{
				while ($row=$this->ketqua->fetch_assoc()) {
					$data[]=$row;
				}
			}
			return $data;
		}
		public function sumSL($sql2){
			$this->ketqua=$this->bienketnoi->query($sql2);
			if ($this->ketqua->num_rows==0) {
				$data=0;
			}else{
				while ($row=$this->ketqua->fetch_assoc()) {
					$data[]=$row;
				}
			}
			return $data;
		}
			public function layhoadon($sql){
			$sql= "SELECT * FROM `hoadon`";
			$this->ketqua=$this->bienketnoi->query($sql);
			if ($this->ketqua->num_rows==0) {
				$data=0;
			}else{
				while ($row=$this->ketqua->fetch_assoc()) {
					$data[]=$row;
				}
			}
			return $data;
		}


		public function laysanpham_id($id_sua)
		{
			$sql="select * from sanpham where id_sp=$id_sua";
			$this->ketqua=$this->bienketnoi->query($sql);
			if ($this->ketqua->num_rows==0) {
				$data=0;
			}else{
				while ($row=$this->ketqua->fetch_assoc()) {
					$data[]=$row;
				}
			}
			return $data;
		}
		public function danhmucsp($id)
		{
			$sql="select * from sanpham where id_dm = $id ";
			$this->ketqua=$this->bienketnoi->query($sql);
			if ($this->ketqua->num_rows==0) {
				return 0;
			}else{
				while ($row=$this->ketqua->fetch_assoc()) {
					$data[]=$row;
				}
			}
			return $data;
		}
		public function danhmucsp_home($id)
		{
			$sql="select * from sanpham where id_dm = $id limit 5";
			$this->ketqua=$this->bienketnoi->query($sql);
			if ($this->ketqua->num_rows==0) {
				return 0;
			}else{
				while ($row=$this->ketqua->fetch_assoc()) {
					$data[]=$row;
				}
			}
			return $data;
		}
		public function danhmucsp_dt($id)
		{
			$sql="select * from sanpham where id_dm = $id limit 10";
			$this->ketqua=$this->bienketnoi->query($sql);
			if ($this->ketqua->num_rows==0) {
				return 0;
			}else{
				while ($row=$this->ketqua->fetch_assoc()) {
					$data[]=$row;
				}
			}
			return $data;
		}
		public function layid_sanpham($id_sp)
		{
			$sql="select * from sanpham where id_sp = '$id_sp'";
			$this->ketqua=$this->bienketnoi->query($sql);
			if ($this->ketqua->num_rows==0) {
				return 0;
			}else{
				while ($row=$this->ketqua->fetch_assoc()) {
					$data[]=$row;
				}
			}
			return $data;
		}
		public function layid_user($id_user)
		{
			$sql="select * from user where id_user = '$id_user'";
			$this->ketqua=$this->bienketnoi->query($sql);
			if ($this->ketqua->num_rows==0) {
				return 0;
			}else{
				while ($row=$this->ketqua->fetch_assoc()) {
					$data[]=$row;
				}
			}
			return $data;
		}

		public function layloaisp()
		{
			$sql="select * from loaisp";
			$this->ketqua=$this->bienketnoi->query($sql);
			if ($this->ketqua->num_rows==0) {
				$data=0;
			}else{
				while ($row=$this->ketqua->fetch_assoc()) {
					$data[]=$row;
				}
			}
			return $data;
		}
		public function laydanhmuc()
		{
			$sql="select * from danhmuc";
			$this->ketqua=$this->bienketnoi->query($sql);
			if ($this->ketqua->num_rows==0) {
				$data=0;
			}else{
				while ($row=$this->ketqua->fetch_assoc()) {
					$data[]=$row;
				}
			}
			return $data;
		}
			public function layid_danhmuc($id_dm)
		{
			$sql="select * from danhmuc where id_dm = '$id_dm'";
			$this->ketqua=$this->bienketnoi->query($sql);
			if ($this->ketqua->num_rows==0) {
				return 0;
			}else{
				while ($row=$this->ketqua->fetch_assoc()) {
					$data[]=$row;
				}
			}
			return $data;
		}
				public function layid_danhmucsp($id_dm)
		{
			$sql="select * from sanpham where id_dm = '$id_dm'";
			$this->ketqua=$this->bienketnoi->query($sql);
			if ($this->ketqua->num_rows==0) {
				return 0;
			}else{
				while ($row=$this->ketqua->fetch_assoc()) {
					$data[]=$row;
				}
			}
			return $data;
		}
		
				public function layid_nhanhieu($id_loai_sp)
		{
			$sql="select * from loaisp where id_loai_sp = '$id_loai_sp'";
			$this->ketqua=$this->bienketnoi->query($sql);
			if ($this->ketqua->num_rows==0) {
				return 0;
			}else{
				while ($row=$this->ketqua->fetch_assoc()) {
					$data[]=$row;
				}
			}
			return $data;
		}
		public function dangkythanhvien($user,$pass,$Hoten,$ngaysinh,$gioitinh,$email,$dienthoai,$diachi,$ngaydangky)
		{
		$sql="INSERT INTO user(user,pass,level,Hoten,ngaysinh,gioitinh,email,dienthoai,diachi,ngaydangky) VALUES ('$user','$pass','2','$Hoten','$ngaysinh','$gioitinh','$email','$dienthoai','$diachi','$ngaydangky')";
		$this->bienketnoi->query($sql);

		}
		public function themsanpham($b1,$b2,$b3,$b4,$b5,$b6,$b7,$b8,$b9)
		{
			$sql="INSERT INTO sanpham(id_dm,ten_sp,gia_sp,id_loai_sp,hinhanh_sp,soluong,mota_sp,thongso,ngaynhapkho_sp) VALUES ('".$b1."','".$b2."','".$b3."','".$b4."','".$b5."','".$b6."','".$b7."','".$b8."','".$b9."')";
			$this->bienketnoi->query($sql);

		}
		public function themdanhmuc($ten_dm)
		{	
			$sql="INSERT INTO `danhmuc`( `ten_dm`) VALUES ('".$ten_dm."')";			
			$this->bienketnoi->query($sql);

		}
		public function themnhanhieu($ten_loai_sp,$sdt,$diachi,$mota)
		{	
			$sql="INSERT INTO `loaisp`(`ten_loai_sp`, `SDT`, `Diachi`, `mota`) VALUES ('".$ten_loai_sp."','".$sdt."','".$diachi."','".$mota."')";			
			$this->bienketnoi->query($sql);

		}
		public function suasanpham($b1,$b2,$b3,$b4,$b5,$b6,$b7,$b8,$b9,$b10){
		$sql="UPDATE sanpham SET id_dm='".$b2."',ten_sp = '".$b3."', gia_sp = '".$b4."', id_loai_sp = '".$b5."', hinhanh_sp = '".$b6."', soluong = '".$b7."', mota_sp = '".$b8."',thongso = '".$b9."', ngaynhapkho_sp = '".$b10."' WHERE id_sp = ".$b1."";
		$this->bienketnoi->query($sql);
		}
		public function suauser($id_user,$user,$pass,$level,$Hoten,$ngaysinh,$gioitinh,$email,$dienthoai,$diachi){
		$sql="UPDATE user SET user ='".$user."',pass = '".$pass."', level = '".$level."',Hoten='".$Hoten."' ,ngaysinh = '".$ngaysinh."', gioitinh = '".$gioitinh."', email = '".$email."', dienthoai = '".$dienthoai."', diachi = '".$diachi."' WHERE id_user = ".$id_user."";
		$this->bienketnoi->query($sql);
		}
		public function suatt($id_user,$pass,$Hoten,$ngaysinh,$gioitinh,$email,$dienthoai,$diachi){
		$sql="UPDATE user SET pass = '".$pass."',Hoten='".$Hoten."' ,ngaysinh = '".$ngaysinh."', gioitinh = '".$gioitinh."', email = '".$email."', dienthoai = '".$dienthoai."', diachi = '".$diachi."' WHERE id_user = ".$id_user."";
		echo $sql;
		$this->bienketnoi->query($sql);
		}
		public function suadm($id_dm,$ten_dm){
		$sql="UPDATE `danhmuc` SET `ten_dm`='".$ten_dm."' WHERE  id_dm = '".$id_dm."'";
		$this->bienketnoi->query($sql);
		}
		public function suanhanhieu($id_loai_sp,$ten_loai_sp,$sdt,$diachi,$mota){
		$sql="UPDATE `loaisp` SET ten_loai_sp='".$ten_loai_sp."',SDT='".$sdt."',Diachi='".$diachi."',mota='".$mota."' WHERE id_loai_sp='".$id_loai_sp."'";
		$this->bienketnoi->query($sql);
		}
		public function xoadm($id_dm){
		$sql="delete from danhmuc where id_dm =$id_dm";
		$this->bienketnoi->query($sql);
		}
			public function xoanhanhieu($id_loai_sp){
		$sql="delete from loaisp where id_loai_sp =$id_loai_sp";
		$this->bienketnoi->query($sql);
		}



		public function xoasanpham($id_xoa){
			$sql= "delete from sanpham where id_sp=$id_xoa";
			$this->bienketnoi->query($sql);

		}
		public function xoauser($id_user){
			$sql= "delete from user where id_user=$id_user";
			$this->bienketnoi->query($sql);

		}
				public function xoahoadon($id){
			$sql= "delete from hoadon where id_hd=$id";
			$this->bienketnoi->query($sql);

		}
		
		public function kiemtradangnhap($user,$pass){
			$sql="select *from user where user='".$user."'and pass='".$pass."'";
			$this->ketqua=$this->bienketnoi->query($sql);
			if ($this->ketqua->num_rows==0) {
				$data=0;
			
			}else{
				while ($row=$this->ketqua->fetch_assoc()) {
					$data[]=$row;
					}
				}
			return $data;
		}
		public function dembangghi($user,$pass){
			$sql="select*from user where user='".$user."' and pass='".$pass."'";
			$this->ketqua=$this->bienketnoi->query($sql);
			if ($this->ketqua->num_rows==0) {
				$dem= 0;
			}else{
				$dem=1;
			}
			return $dem;
		}
		public function checktaikhoan($user){
			$sql="select*from user where user='".$user."'";
			$this->ketqua = $this->bienketnoi->query($sql);
			if($this->ketqua->num_rows==0){
				return 0;
			}else{
				return 1;

				}

		}
		public function tksp($tukhoa)
		{
			$sql="select * from sanpham where ten_sp like '%$tukhoa%'";
			$this->ketqua=$this->bienketnoi->query($sql);
			if ($this->ketqua->num_rows==0) {
				return 0;
			}else{
				while ($row=$this->ketqua->fetch_assoc()) {
					$data[]=$row;
				}
			}
			return $data;
		}
			public function tkkh($ten)
		{
			$sql="select * from user where hoten like '%$ten%'";
			$this->ketqua=$this->bienketnoi->query($sql);
			if ($this->ketqua->num_rows==0) {
				return 0;
			}else{
				while ($row=$this->ketqua->fetch_assoc()) {
					$data[]=$row;
				}
			}
			return $data;
		}
		public function taohoadon($id_user,$hoten,$diachi,$dienthoai,$ghichu,$Total,$trangthai, $phuongThucThanhToan){
			$sql="INSERT INTO `hoadon`( `id_user`, `hoten`, `diachi`, `dienthoai`, `ghichu`, `Total`, `trangthai`) VALUES ('$id_user','$hoten','$diachi','$dienthoai','$ghichu',$Total,$trangthai)";
			if($this->bienketnoi->query($sql)) {
				$id_hd = $this->bienketnoi->insert_id;
				foreach ($_SESSION["giohang"] as $key => $item) {
					$id = $key;
					$soluong = $item["soluong"];
					$gia = $item["gia"];
					$ten=$item["name"];
					$hinhanh=$item["hinhanh_sp"];
					$Phuongthucthanhtoan = $phuongThucThanhToan;
					$sql1= "SELECT * FROM `sanpham` WHERE id_sp= ".$id;
					$ketqua= $this->bienketnoi->query($sql1)->fetch_assoc();
					$soluongmoi=(int)$ketqua['soluong']-(int) $soluong;
					
					if($this->ktraHoaDon($id,$soluong)) {
						$sql="INSERT INTO chitiethoadon( id_hd, id_sp,ten_sp,hinhanh_sp,soluong,gia_sp, Phuongthucthanhtoan) VALUES ('$id_hd','$id','$ten','$hinhanh','$soluong','$gia',$Phuongthucthanhtoan)";
						$this->bienketnoi->query($sql);
						$sql="UPDATE sanpham set soluong= ".$soluongmoi." where id_sp = ".$id;
						$this->bienketnoi->query($sql);
						}
						else {
							$sql = "delete from hoadon where id_hd = $id_hd";
							$this->bienketnoi->query($sql);
							return false;
					}
				}
				unset($_SESSION['giohang']);
			}
			return true;
		}
		public function capnhaptrangthai($id,$trangthai){
			$sql="update hoadon set trangthai='".$trangthai."' where id_hd=$id ";
			$this->bienketnoi->query($sql);
		}
		public function layid_hoadon($id){
			$sql = "select*from chitiethoadon where id_hd =$id";
			$this->ketqua=$this->bienketnoi->query($sql);
			if ($this->ketqua->num_rows==0) {
				return 0;
			}else{
				while ($row=$this->ketqua->fetch_assoc()) {
					$data[]=$row;
				}
			}
			return $data;
		}
		public function ktraHoaDon($id, $sl)
    	{
        $sql= "select * from sanpham where id_sp=$id";
        $result= $this->bienketnoi->query($sql)->fetch_assoc();
        if($result["soluong"]<$sl)
            return false;
        return true;
    	}
	     public function themBinhLuan($id,$id_user,$hoten,$noidung,$ngaybl) {
		  $sql= "INSERT INTO `binhluan`( `id_sp`, `id_user`, `hoten`, `noidung`, `ngaybl`) VALUES ('".$id."','".$id_user."','".$hoten."','".$noidung."','".$ngaybl."')";
				    $this->ketqua=$this->bienketnoi->query($sql);
						if ($this->ketqua->num_rows==0) {
							return 0;
						}else{
							while ($row=$this->ketqua->fetch_assoc()) {
								$data[]=$row;
							}
						}
						return $data;
	    }	
		public function layBinhLuanCT($id, $limit, $page) {
        $sql = "select *, (select count(*) from binhluan where id_sp = $id) as total from binhluan where id_sp = $id ORDER BY id_bl ASC LIMIT ".((int) ($page - 1) * $limit).", ".((int) $page * $limit);
            $this->ketqua=$this->bienketnoi->query($sql);
				if ($this->ketqua->num_rows==0) {
					return 0;
				}else{
					while ($row=$this->ketqua->fetch_assoc()) {
						$data[]=$row;
					}
				}
				return $data;
    		}
    	public function layBinhLuanid($id){
    		$sql="SELECT* FROM binhluan where id_sp =$id";
    		$this->ketqua=$this->bienketnoi->query($sql);
						if ($this->ketqua->num_rows==0) {
							return 0;
						}else{
							while ($row=$this->ketqua->fetch_assoc()) {
								$data[]=$row;
							}
						}
						return $data;
    	}	
    	public function xoabl($id){
    		$sql = "DELETE FROM `binhluan` WHERE id_bl =$id";
    		$this->bienketnoi->query($sql);
    	}
    	public function capnhaptrangthaibinhluan($id,$trangthai){
    		$sql="UPDATE `binhluan` SET`trangthai`= '".$trangthai."' WHERE `id_bl`= '".$id."' ";
    		$this->bienketnoi->query($sql);
    	}
    	public function layBinhLuan() {
        $sql = "select * from binhluan";
            $this->ketqua=$this->bienketnoi->query($sql);
				if ($this->ketqua->num_rows==0) {
					return 0;
				}else{
					while ($row=$this->ketqua->fetch_assoc()) {
						$data[]=$row;
					}
				}
				return $data;
    		}		
   }
?>