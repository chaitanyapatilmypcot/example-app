<h1>Add members</h1>

{{-- flash session --}}
@if (session('user'))
<h3 style="color : green">{{session('user')}} user has been added</h3>   
@endif

<form action="addmember" method="POST">
    @csrf
    <input type="text" name="user" placeholder="Enter user name"><br><br>
    <input type="text" name="password" placeholder="Enter the password"><br><br>
    <input type="text" name="email" placeholder="Enter the email"><br><br>
    <button type="submit">Add member</button>

</form>