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
$role_id = "";

//Lấy giá trị POST từ form vừa submit
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if(isset($_POST["email"])) { $email = $_POST['email']; }
    if(isset($_POST["pass"])) { $pass = $_POST['pass']; }
    if(isset($_POST["role_id"])) { $role_id = $_POST['role_id']; }
}


    $sql = "INSERT INTO 05_php21_JOIN.users (email, pass, role_id)
    VALUES ('$email', '$pass', '$role_id')";

        if (mysqli_query($connect, $sql)) {
            echo "Them data thành công vào DATABASE";
        } else {
            echo "Them data thất bại: " . mysqli_error($connect);
        };
?>
<form action="./baitap.php" method="POST">
<input type="email" name="email" placeholder="Email...">
<input type="password" name="pass" placeholder="password...">


<br>Roles: <br>
<select name="role_id">
<?php
$sql = "SELECT * FROM 05_php21_JOIN.roles";
$result = mysqli_query($connect, $sql);
if (mysqli_num_rows($result) > 0) {
  // output data of each row
while ($row = mysqli_fetch_assoc($result)) {
?>

    <option value="<?php echo $row['id']; ?>">
        <?php echo $row['name']; ?>
    </option>
    <?php }
    } else {
    echo "0 results";
    }
    ?>
</select>
<br>
<br>
<button type="submit">Đăng ký</button>
</form>
<?php
//Đóng data base
$connect->close();
?>