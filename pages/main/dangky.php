<?php

    if(isset($_POST['dangky'])){
        $tenkhachhang = $_POST['hovaten'];
        $email = $_POST['email'];
        $dienthoai = $_POST['dienthoai'];
        $matkhau = md5($_POST['matkhau']);
        $diachi = $_POST['diachi'];
        $sql_dangky = mysqli_query($mysqli,"INSERT INTO tbl_dangky(tenkhachhang,email,diachi,matkhau,dienthoai) VALUE('".$tenkhachhang."','".$email."','".$diachi."','".$matkhau."','".$dienthoai."')");
        if($sql_dangky){
            echo '<p style="color:green">Bạn Đã Đăng Ký Thành Công</p>';
            $_SESSION['dangky']= $tenkhachhang;
            $_SESSION['id_khachhang']= mysqli_insert_id($mysqli);
            header('Location:index.php?quanly=giohang');
        }
        
    }

?>
<p>Dăng Kí Thành Viên</p>
<style type="text/css">
    table.dangky tr td{
        padding: 5px;
    }
</style>
<form action="" method="POST">
<table class="dangky" border="1" width="50%" style="border-collapse:collapse;">
    <tr>
        <td>Họ Và Tên</td>
        <td><input type="text" size="50"  name="hovaten"></td>
    </tr>
    <tr>
        <td>Email</td>
        <td><input type="text" size="50" name="email"></td>
    </tr>
    <tr>
        <td>Điện Thoại</td>
        <td><input type="text" size="50"  name="dienthoai"></td>
    </tr>
    <tr>
        <td>Địa Chỉ</td>
        <td><input type="text" size="50"  name="diachi"></td>
    </tr>
    <tr>
        <td>Mật Khẩu</td>
        <td><input type="text" size="50"  name="matkhau"></td>
    </tr>
    <tr>

        <td><input type="submit"   name="dangky" value="Đăng Ký"></td>
        <td><a href="index.php?quanly=dangnhap">Đăng Nhập Nếu Có Tài Khoản</a></td>
    </tr>

</table>
</form>