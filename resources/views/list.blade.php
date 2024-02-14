@include('links')


<figure class="text-center">
    <blockquote class="blockquote">
      <p>Users List</p>
    </blockquote>
  </figure>

@if (session('user')) 
    <p class="alert alert-danger" id="myAlert">{{session('user')}}'s data has been Deleted successfuly</p>
@endif

@if (session('edit'))
    <p class="alert alert-success" id="myAlert">{{session('edit')}}'s data has been updated sucessfully</p>    
@endif

<table class="table table-striped table-hover">
    <tr class="table-dark"> 
        <td scope="col">Id</td>
        <td scope="col">Name</td>
        <td scope="col">Gender</td>
        <td scope="col">DOB</td>
        <td scope="col">Address</td>
        <td scope="col">Email</td>
        <td scope="col">Personality</td>
        <td scope="col">Drinks Prefered</td>
        <td scope="col">Operation</td>
    </tr>

    @foreach ($users as $user)
    <tr>
        <td scope="row">{{$user['id']}}</td>
        
        <td>{{$user['name']}}</td>

        <td>{{$user['gender']}}</td>
        <td>{{$user['dob']}}</td>
        <td>{{$user['address']}}</td>
        <td>{{$user['email']}}</td>
        
        <td>{{$user['personality']}}</td>
        <td>{{$user['drink']}}</td>
        <td class= "gap-2">
            <a href={{"edit/" . $user['id']}}>
                <button class="btn btn-outline-primary btn-sm">Edit</button>
            </a>
            <a data-bs-toggle="modal" data-bs-target="#exampleModal">
                <button class="btn btn-outline-danger delete btn-sm" id={{$user['id']}}>Delete</button>
            </a> 
             
        </td>
    </tr>
    @endforeach    
</table> 

<br><br>

<a href="/add">
    <button class="btn btn-primary" >Add a Member</button>
</a>
<br><br>
<!-- Button trigger modal -->

  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Are you sure you ant to delete the data?</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
          <a href="" type="button" class="btn btn-danger delValue">Delete Permanently</a>
        </div>
      </div>
    </div>
  </div>
<script>
    $('.delete').on('click', function() {
        var id = $(this).attr('id');
        $('.delValue').attr('href', 'delete/' + id);
    })
</script>


{{-- pagination --}}
{{-- <span class="pagination">
    {{$users->links()}}
</span>

<style>
    .w-5{
        display: none;
    }
</style> --}}



