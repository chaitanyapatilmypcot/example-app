

<h1>User Login Page</h1>




<form action="users" method="POST">
    {{-- HTTP methods --}}
    {{method_field('DELETE')}}
    @csrf
    
    <input type="text" name="username" placeholder="enter user id"><br>
    <span style="color: red">@error('username'){{$message}}@enderror</span><br>
    <input type="text" name="userpassword" placeholder="enter user password"><br>
    <span style="color: red">@error('userpassword'){{$message}}@enderror</span><br>
    <button type="submit" >Login</button>
</form>

{{-- <h1>User List </h1>

<table border="1">
    <tr>
        <td>Id</td>
        <td>Name</td>
        <td>Email</td>
        <td>Profile Photo</td>
    </tr>

    @foreach ($collection as $item)
    <tr>
        <td>{{$item['id']}}</td>
        <td>{{$item['first_name']}}</td>
        <td>{{$item['email']}}</td>
        <td><img src="{{$item['avatar']}}"></td>
    </tr>
    @endforeach
</table> --}}



