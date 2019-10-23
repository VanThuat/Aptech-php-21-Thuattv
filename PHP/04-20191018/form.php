<form action="./Check-form.php" method="POST">
<input type="email" name="email" placeholder="Email...">
<input type="password" name="Password" placeholder="Password...">

Giới tính:<br>
    Nam <input type="radio" name="gioitinh" value="Nam">,
    Nữ <input type="radio" name="gioitinh" value="Nữ"><br>

Thành phố: <br>
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