@include('links')

<?php
$personality =  ['Calm','Team Work','Fit & Fine'];
$drinks = ['Tea', 'Coffee'];
?>

<figure class="text-center">
    <blockquote class="blockquote">
      <p>Update User</p>
    </blockquote>
  </figure>

  <div class="container">
    <form action="/edit" method="POST">
        @csrf
        
        <input type="hidden" name="id" value={{$data['id']}}>
        
        <div class="mb-3">
            <label for="name" class="form-label">Update Username</label>
            <input type="text" name="name" class="form-control" value="{{$data['name']}}">
        </div>
        
        <div class="mb-3">
            <label for="gender" class="form-label">Update Gender</label>
                <select name="gender" id="gender" class="form-select">
                    <option  value="male" <?php if ($data['gender'] == 'male') echo 'selected'; ?>>Male</option>
                    <option value="female" <?php if ($data['gender'] == 'female') echo 'selected'; ?>>Female</option>
                 </select>  
        </div>
        
        
        <div class="mb-3">
            <label for="dob" class="form-label">Update DOB</label>
            <input type="date" name="dob" class="form-control" value="{{$data['dob']}}" >
        </div>
        
        <div class="mb-3">
            <label for="email" class="form-label">Your email</label>
            <input type="text" name="email" class="form-control" value= "{{$data['email']}}" readonly>
        </div>
        
        <div class="mb-3">
            <label for="address" class="form-label">Enter your address</label>
            <input type="text" name="address" class="form-control" value= "{{$data['address']}}">
        </div>
        
        
        <div class="mb-3">
            <label for="personality" class="form-label">Your personality :</label> <br>
                @foreach ($personality as $item)
                <input type="checkbox" id="{{$item}}" name="personality[]" value="{{$item}}" <?php if (is_array($data['personality']) && in_array('{{$item}}', $data['personality'])) echo 'checked'; ?> ><label for="{{$item}}">{{$item}}</label>
                @endforeach
        </div>
        
        {{-- <label for="personality" disabled>Your personality</label>
        <input type="text" name="personality" value="{{$data['personality']}}"> --}}
        
        <div class="mb-3">
            <label for="drink" class="form-label">Update your Favorite Drink :</label> <br>
                @foreach ($drinks as $item)
                <input type="radio" id="{{$item}}" name="drink" value="{{$item}}" <?php if($data['drink'] == '{{$item}}') echo 'checked';?> > <label for="{{$item}}">{{$item}}</label> 
                @endforeach
        </div>
        
    
        
    
        <button type="submit" class="btn btn-outline-primary">Update</button>
        <a href="/list" class="btn btn-outline-secondary">Go back</a>
    </form>
  </div>



