<h1>Login Sessions</h1>
<form action="user" method="POST">
    @csrf
    <input type="text" name="username" placeholder="Enter user name"><br><br>
    <input type="text" name="password" placeholder="Enter the password"><br><br>
    <button type="submit">Login</button>
</form>