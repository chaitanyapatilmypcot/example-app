<h1>Members List</h1>

<table border="1">
    @foreach ($data as $items)
    <tr>
        <td>{{$items->id}}</td>
        <td>{{$items->name}}</td>
        <td>{{$items->email}}</td>
        <td>{{$items->address}}</td>
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