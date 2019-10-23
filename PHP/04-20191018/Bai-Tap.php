<?php
// Ket Noi
$connect = mysqli_connect ("localhost", "root", "");

// Tao Database

$sql = "create database aptech_php_21";

// Kiem tra

if (mysqli_query($connect, $sql)) {
    echo "create databese thành công";
} else {
    echo "create database thất bại: " . mysqli_error($connect);
};

// Xoa database bang cau lenh drop

// $sql = "drop database aptech_php_21";

// Kiem tra tinh trang drop  

// if (mysqli_query($connect, $sql)) {
//     echo "<br> Drop thành công";
// } else {
//     echo "<br> Drop thất bại: " . mysqli_error($connect);
// };

// tao bảng


$sql = "create table aptech_php_21.users (
    id int,
    last_name varchar (255),
    first_name varchar (255),
    Email varchar (255) unique,
    Pass varchar (255)
    )";

//Kiem tra tao bang

if (mysqli_query($connect, $sql)) {
    echo "<br> Created table thành công";
} else {
    echo "<br> created table thất bại: " . mysqli_error($connect);
};

// Drop table

// $sql = "drop table aptech_php_21.users";

// Alter Column vao bang

$sql = "alter table aptech_php_21.users ADD dob date";

// kiem tra

if (mysqli_query($connect, $sql)) {
    echo "<br> ADD column vao table thành công";
} else {
    echo "<br> ADD column vao table thất bại: " . mysqli_error($connect);
};
$sql = "alter table aptech_php_21.users drop column dob";


//Kiem tra
if (mysqli_query($connect, $sql)) {
    echo "<br> Drop column tu table thành công";
} else {
    echo "<br> Drop column tu table thất bại: " . mysqli_error($connect);
};

// Insert du lieu vao table

$sql = "insert into aptech_php_21.users (id, last_name, first_name, Email, Pass)
value
(1, 'Thuat', 'tran', 'thuat.php@gmail.com', 'thuat123'),
(2, 'Nam', 'Nguyen', 'Nam.php@gmail.com', 'nam123'),
(3, 'Trinh', 'Nguyen', 'Trinh.php@gmail.com', 'trinh123'),
(4, 'Phu', 'Le', 'Phu.php@gmail.com', 'phu123'),
(5, 'Long', 'Phi', 'Long.php@gmail.com', 'long123')
";

//Kiem tra
if (mysqli_query($connect, $sql)) {
    echo "<br> insert table thành công";
} else {
    echo "<br> insert table thất bại: " . mysqli_error($connect);
};

// select column trong table

$sql = "select * from aptech_php_21.users";

// Nếu chọn all đối tượng có thể dùng * để thay thế, còn chọn cụ thể thì gọi tên ra, cách nhau dấu phẩy
// vd $sql = "select last_name from aptech_php_21.users";


// Thực thi câu truy vấn và gán vào $result
$result = mysqli_query($connect, $sql);

// Kiểm tra số lượng record trả về có lơn hơn 0
// Nếu lớn hơn tức là có kết quả, ngược lại sẽ không có kết quả
if (mysqli_num_rows($result) > 0) 
{
    // Sử dụng vòng lặp while để in kết quả
    while($row = mysqli_fetch_assoc($result)) {
        echo "<br>","Id: " . $row["id"]. " - name: " . $row["first_name"]." " .$row ["last_name"]. "- Email: " .$row["Email"]. "-Pass: " .$row["Pass"]. "<br>";
    }
} 
else {echo "Không có record nào";
}


//Chon chọn có điều kiện bang WHERE

// Chon hang thu 3 tu table
$sql = "select * table aptech_php_21.users where limit 3";

// chon tu table co first_name la 'Nguyen'
$sql = "select * table aptech_php_21.users where first_name = 'Nguyen'";

//Chon tu tabel co first_name la 'Nguyen' va co last_name la 'Nam'
$sql = "select * table aptech_php_21.users where first_name = 'Nguyen' and last_name = 'Nam'";

// Thay doi thong tin bang UPDATE

// thay doi first_name cua id 3 tu 'Nguyen' thanh 'Do'
$sql = "update aptech_php_21.users SET first_name='Do' where id= 3";

// Thay doi ten column trong bang thongtin tu password sang pass
// $sql = "alter table thongtin change password pass varchar (50)";

//Xoa dong bang DELETE va where
// xoa dong co id = 5
$sql = "delete from aptech_php_21.users where id = 5";
// Kiem tra
if (mysqli_query($connect, $sql)) {
    echo "<br> delete thành công";
} else {
    echo "<br> delete thất bại: " . mysqli_error($connect);
};

// Tao khoa chinh bang PRIMARY KEY

$sql = "alter table aptech_php_21.users ADD primary key(id)";
// kiem tra
if (mysqli_query($connect, $sql)) {
    echo "<br> Primary key thành công";
} else {
    echo "<br> primary key thất bại: " . mysqli_error($connect);
};

// AUTO_INCREMENT cho key (tang tu dong key)

$sql = "alter table aptech_php_21.users modify column id int NOT NULL AUTO_INCREMENT";
// kiem tra
if (mysqli_query($connect, $sql)) {
    echo "<br> Auto_increment thành công";
} else {
    echo "<br> Auto_increment thất bại: " . mysqli_error($connect);
};

// them du lieu vao Table De check column ID co tu dong tang gia tri hay khong
$sql = "insert into aptech_php_21.users (last_name, first_name, Email, Pass)
values ('Long', 'Phi', 'Long.php@gmail.com', 'long123')";
// kiem tra
if (mysqli_query($connect, $sql)) {
    echo "<br> Insers thành công";
} else {
    echo "<br> Insers thất bại: " . mysqli_error($connect);
};

// FOREIGN KEY (Key ngoai)

//Tao table con
$sql = "create table aptech_php_21.thongtin (
    id int Not null auto_increment primary key,
    title varchar (255) not null unique,
    state int default 1)";
    //Kiem tra
    if (mysqli_query($connect, $sql)) {
        echo "<br> Tao bang thành công";
    } else {
        echo "<br> Tao bang thất bại: " . mysqli_error($connect);
    };

    //Them du lieu vao bang

    $sql = "insert into aptech_php_21.thongtin (title)
    values ('Administrator'),('Copywriter')";
    //Kiem tra
    if (mysqli_query($connect, $sql)) {
        echo "<br> Them thành công";
    } else {
        echo "<br> Them thất bại: " . mysqli_error($connect);
    };

    //Thay doi dinh dang Email trong table users
    $sql = "alter table aptech_php_21.users modify column Email varchar (255) not null unique";
    
    //Kiem tra
    if (mysqli_query($connect, $sql)) {
        echo "<br> Thay doi thành công";
    } else {
        echo "<br> Thay doi thất bại: " . mysqli_error($connect);
    };

    //Dat vi tri mac dinh cac cot trong bang thong tin tren bang users

    $sql = "alter table aptech_php_21.users
    modify column state int default 1,
    modify column thongtin int default 2";
    //Kiem tra
    if (mysqli_query($connect, $sql)) {
        echo "<br> Dat thành công";
    } else {
        echo "<br> Dat thất bại: " . mysqli_error($connect);
    };

    //Tao key ngoai
$sql = "alter table aptech_php_21.users ADD FOREIGN KEY (thongtin) REFERENCES aptech_php_21.thongtin(id)";
//Kiem tra
if (mysqli_query($connect, $sql)) {
    echo "<br> FOREIGN thành công";
} else {
    echo "<br> FOREIGN thất bại: " . mysqli_error($connect);
};


//Đóng database
$connect->close();

?>