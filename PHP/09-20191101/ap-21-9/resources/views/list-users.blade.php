<h3>DANH SÁCH NGƯỜI DÙNG</h3>
<table align="left" border="1" cellpadding="3" cellspacing="0">
<thead>
    <tr>
    <th>id</th>
    <th>name</th>
    <th>email</th>
    <th>password</th>
    </tr>
</thead>
<tbody>
    @foreach($DsUser as $user)
    <tr>
    <td>{{$user->id}}</td>
    <td>{{$user->name}}</td>
    <td>{{$user->email}}</td>
    <td>{{$user->password}}</td>
    </tr>
    @endforeach
</tbody>
</table>