

<h1>User Login Page</h1>

{{-- Error Detection --}}
{{-- @if($errors->any())
@foreach ($errors->all() as $err)
        <li>{{$err}}</li>
@endforeach
@endif --}}


<form action="users" method="POST">
    @csrf
    <input type="text" name="username" placeholder="enter user id"><br>
    <span style="color: red">@error('username'){{$message}}@enderror</span><br>
    <input type="text" name="userpassword" placeholder="enter user password"><br>
    <span style="color: red">@error('userpassword'){{$message}}@enderror</span><br>
    <button type="submit" >Login</button>
</form>



