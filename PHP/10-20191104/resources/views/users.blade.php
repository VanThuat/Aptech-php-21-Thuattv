<h2 align="center">THONG TIN USER DA DANG KY</h2>
<table align="center" border="1" cellpadding="3" cellspacing="0">
    <thead>
    <tr>
        <th>id</th>
        <th>name</th>
        <th>phone number</th>
    </tr>
    </thead>
    <tbody>
    @foreach($users as $user)
    <tr>
        <td>{{$user->id}}</td>
        <td>{{$user->name}}</td>
        <td>{{$user->phone->phone_number}}</td>
    </tr>
    @endforeach
    </tbody>
</table>