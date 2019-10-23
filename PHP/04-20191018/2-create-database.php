<?php

$servername = "localhost";
$username = "root";
$password ="";

// Create connection
$connect = mysqli_connect($servername, $username, $password);
// or
// $connect = new mysqli($servername, $username, $password);
// Or (không cần khai báo biến ban đầu)
// $connect = mysqli_connect ("localhost", "root", "");


// Check connection

if (!$connect) {
    die("Connection failed" .mysqli_connect_error());
}
echo "Connected successfully <br>";

//create database

$sql = "CREATE DATABASE ap_21_4";


// Thực thi câu truy vấn
 if (mysqli_query($connect, $sql)) {
    echo "Tạo database thành công";
} else {
    echo "Tạo database thất bại: " . mysqli_error($connect);
}

//=> Tạo bảng

$sql ="create table ap_21_4.Users
    (id int (10),
    email varchar (255) unique,
    password varchar (255)
)"; 


// Kiem tra tinh trang
if (mysqli_query($connect, $sql)) {
    echo "Tạo table thành công";
} else {
    echo "Tạo table thất bại: " . mysqli_error($connect);
}


//=> INSERT Thêm thông tin vào bảng
$sql = "insert into ap_21_4.users (id, email, password)
values
(1, 'tvthuat.89@mail.com', 'abcd'),
(2, 'namnh.website@gmail.com', 'abs'),
(3, 'trinh.php21@gmail.com', 'aghalf'),
(4, 'phu.php21@gmail.com', 'lkal'),
(5, 'loi.php@gmail.com', 'algajl')";
*/

//Kiem tra tinh trang
if (mysqli_query($connect, $sql)) {
    echo "INSERT thành công";
} else {
    echo "INSERT thất bại: " . mysqli_error($connect);

// SELECT trong database

$sql = "select id, email, password from ap_21_4.users";
$result = mysqli_query($connect, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        echo "id: " . $row["id"]. "; - Email: " . $row["email"]. "; - PW " . $row["password"]. "<br>";
    }
} else {
    echo "0 results";
}


// Ngắt kết nối khi xong
mysqli_close($connect);
?>