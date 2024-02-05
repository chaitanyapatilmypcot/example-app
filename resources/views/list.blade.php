<h1>Members List</h1>

<table border="1">
    <tr>
        <td>Id</td>
        <td>Name</td>
        <td>Email</td>
        <td>Address</td>
        <td>Operation</td>
    </tr>

    @foreach ($users as $user)
    <tr>
        <td>{{$user['id']}}</td>
        <td>{{$user['name']}}</td>
        <td>{{$user['email']}}</td>
        <td>{{$user['address']}}</td>
        <td>
            <a href={{"delete/" . $user['id']}}>Delete</a> 
            <a href={{"edit/" . $user['id']}}>Edit</a> 
        </td>
    </tr>
    @endforeach    
</table> 

{{-- pagination --}}
{{-- <span>
    {{$users->links()}}
</span>

<style>
    .w-5{
        display: none;
    }
</style> --}}