<h1>Add Member</h1>
<form action="add" method="POST">
    @csrf
    <input type="text" name="name" placeholder="Enter user name"><br><br>
    <input type="text" name="email" placeholder="Enter the email"><br><br>
    <input type="text" name="address" placeholder="Enter the address"><br><br>
    <button type="submit">Add member</button>
</form>