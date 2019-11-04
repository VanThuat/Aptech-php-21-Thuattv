
<h3>Danh sach users đã đăng ký</h3>
<table align="left" border="1" cellpadding="3" cellspacing="0">  
    <thead>
        <th>id</th>
        <th>email</th>
        <th>password</th>
        <th>name</th>
    </thead>
    <tbody>
    
<?php

$server = "localhost";
$username = "root";
$password ="";
$dbname = "05_php21_JOIN";

// Kết nối database 05_php21_JOIN
$connect = mysqli_connect($server, $username, $password, $dbname);

$sql = "select * from users join roles on users.role_id = roles.id";
$result = mysqli_query($connect, $sql);
if (mysqli_num_rows($result) > 0) {
  // output data of each row
while ($row = mysqli_fetch_assoc($result)) {
    echo "<tr>";
    echo "<td>" .$row['role_id'];
    echo "<td>" .$row['email'];
    echo "<td>" .$row['pass'];
    echo "<td>" .$row['name'];
}
    } else {
    echo "0 results";
    };

?>
    </tbody>
</table>
