@include('links')
<?php
$types =  ['Calm','Team Work','Fit & Fine'];
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
            <label for="name" class="form-label">Update Username</label><br><br>
            <input type="text" name="name" class="form-control" value="{{$data['name']}}"><br><br>
        </div>
        
        <div class="mb-3">
            <label for="gender" class="form-label">Update Gender</label><br><br>
            <select name="gender" id="gender" class="form-select">
            <option  value="male" <?php if ($data['gender'] == 'male') echo 'selected'; ?>>Male</option>
            <option value="female" <?php if ($data['gender'] == 'female') echo 'selected'; ?>>Female</option>
            <option value="other" <?php if ($data['gender'] == 'none') echo 'selected'; ?>>Do not wish to tell</option>
            </select> <br> <br>
        </div>
        
        
        <div class="mb-3">
            <label for="dob" class="form-label">Update DOB</label><br><br>
            <input type="date" name="dob" class="form-control" value="{{$data['dob']}}" ><br><br>
        </div>
        
        <div class="mb-3">
            <label for="email" class="form-label">Your email</label><br><br>
            <input type="text" name="email" class="form-control" value= "{{$data['email']}}" readonly><br><br>
        </div>
        
        <div class="mb-3">
            <label for="address" class="form-label">Enter your address</label><br><br>
            <input type="text" name="address" class="form-control" value= "{{$data['address']}}"><br><br>
        </div>
        
        
        <div class="mb-3">
            <label for="personality" class="form-label">Your personality</label><br><br>
            <input type="checkbox" name="personality[]" value="Calm" <?php if (is_array($data['personality']) && in_array('Calm', $data['personality'])) echo 'checked'; ?> >Calm 
            <input type="checkbox" name="personality[]" value="Team Work" <?php if (is_array($data['personality']) && in_array('Team Work', $data['personality'])) echo 'checked'; ?> >Team Work <br><br>
            <input type="checkbox" name="personality[]" value="Fit & Fine" <?php if (is_array($data['personality']) && in_array('Fit & Fine', $data['personality'])) echo 'checked'; ?> >Fit & Fine <br><br>
        </div>
        
        {{-- <label for="personality" disabled>Your personality</label><br><br>
        <input type="text" name="personality" value="{{$data['personality']}}"><br><br> --}}
        
        <div class="mb-3">
            <label for="drink" class="form-label">Update your Favorite Drink</label><br><br>
            <input type="radio" id="tea" name="drink" value="tea" <?php if($data['drink'] == 'tea') echo 'checked';?> > <label for="tea">Tea</label> 
            <input type="radio" name="drink" value="coffee" <?php if($data['drink'] == 'coffee') echo 'checked';?> >Coffee 
            <input type="radio" name="drink" value="none" <?php if($data['drink'] == 'none') echo 'checked';?> >Better Working <br> <br>
        </div>
        
    
        
    
        <button type="submit" class="btn btn-outline-primary">Update</button>
        <a href="/list" class="btn btn-outline-secondary">Go back</a>
    </form>
  </div>



