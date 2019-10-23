<?php

$server = "localhost";
$username = "root";
$password ="";

// Kết nối database formData
$connect = mysqli_connect($server, $username, $password);

//Nếu kết nối bị lỗi thì xuất báo lỗi và thoát.
if (!$connect) {
    die("Không kết nối :" . mysqli_error($connect));
    exit();
}

//Khai báo giá trị ban đầu, nếu không có thì khi chưa submit câu lệnh insert sẽ báo lỗi
$email = "";
$pass = "";
$gioitinh = "";
$city = "";

//Lấy giá trị POST từ form vừa submit
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if(isset($_POST["email"])) { $email = $_POST['email']; }
    if(isset($_POST["pass"])) { $pass = $_POST['pass']; }
    if(isset($_POST["gioitinh"])) { $gioitinh = $_POST['gioitinh']; }
    if(isset($_POST["city"])) { $city = $_POST['city']; }
}

    // Code tạo database và table
    // Tạo xong 1 lần thì đóng lại không cần tạo thêm.
    // $sql = "CREATE DATABASE formData";

    // // Kiem tra viec tao database
    //     if (mysqli_query($connect, $sql)) {
    //         echo "Tạo database thành công";
    //     } else {
    //         echo "Tạo database thất bại: " . mysqli_error($connect);
    //     };
    // $sql = "create table formData.thongtin (
    //     email varchar (255) unique,
    //     pass varchar (50),
    //     gioitinh varchar (10),
    //     city varchar (255)
    //     )";
    //     // Kiem tra viec tao bang
    //     if (mysqli_query($connect, $sql)) {
    //         echo "Tạo database thành công";
    //     } else {
    //         echo "Tạo database thất bại: " . mysqli_error($connect);
    //     };


        
    //Code xử lý, insert dữ liệu vào table

    $sql = "INSERT INTO formData.thongtin (email, pass, gioitinh, city)
    VALUES ('$email', '$pass', '$gioitinh', '$city')";

        if (mysqli_query($connect, $sql)) {
            echo "Them data thành công vào DATABASE";
        } else {
            echo "Them data thất bại: " . mysqli_error($connect);
        };
?>
<form action="./Check-form.php" method="POST">
<input type="email" name="email" placeholder="Email...">
<input type="password" name="pass" placeholder="password...">

<br>Giới tính:<br>
    Nam <input type="radio" name="gioitinh" value="Nam">,
    Nữ <input type="radio" name="gioitinh" value="Nữ"><br>

<br>Thành phố: <br>
<select name="city">
    <option value="Hà Nội">Hà Nội</option>
    <option value="Hồ Chí Minh">Hồ Chí Minh</option>
    <option value="Đà Nẵng">Đà Nẵng</option>
    <option value="Hà Tĩnh">Hà Tĩnh</option>
    <option value="Huế">Huế</option>
    <option value="Quảng Trị">Quảng Trị</option>
    <option value="Quảng Bình">Quảng Bình</option>
    <option value="Quảng Ngãi">Quảng Ngãi</option>
</select>
<br>
<br>
<button type="submit">Logn in</button>
</form>
<?php
//Đóng data base
$connect->close();
?>