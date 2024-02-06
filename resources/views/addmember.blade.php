@include('links')

<figure class="text-center">
    <blockquote class="blockquote">
      <p>Add Member</p>
    </blockquote>
  </figure>

{{-- Flash session --}}
@if (session('user'))
<p class="alert alert-success" id="myAlert">{{session('user')}} user has been added successfully</p>   
@endif

<div class="container">
    <form action="add" method="POST">
        @csrf

        <div class="mb-3">
            <label for="name" class="form-label">Username</label>
            <input type="text" name="name" placeholder="Enter user name" class="form-control">
            <span style="color: red">@error('name'){{$message}}@enderror</span>
        </div>
    
        <div class="mb-3">
            <label for="gender" class="form-label">Gender</label>
            <select name="gender" id="gender" class="form-select">
                <option value="male">Male</option>
                <option value="female">Female</option>
                <option value="other">Do not wish to tell</option>
            </select> 
            <span style="color: red">@error('gender'){{$message}}@enderror</span>
        </div>
    
        <div class="mb-3">
            <label for="dob" class="form-label">Date of Birth</label>
            <input type="date" name="dob" placeholder="Enter your DOB" class="form-control">
            <span style="color: red">@error('dob'){{$message}}@enderror</span>
        </div>
    
        <div class="mb-3">
            <label for="email"  class="form-label">Enter your email</label>
            <input type="text" name="email" class="form-control" placeholder="Enter your mail" aria-describedby="emailHelp">
            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
            <span style="color: red">@error('email'){{$message}}@enderror</span>
        </div>
    

        <div class="mb-3">
            <label for="address" class="form-label">Enter your address</label>
            <input type="text" name="address" placeholder="Enter your address" class="form-control">
            <span style="color: red">@error('address'){{$message}}@enderror</span>
        </div>
    
        <div class="mb-3">
            <label for="personality" class="form-label">Enter your personality</label>
            <input type="checkbox" name="personality[]" value="Calm" class="form-check-input">Calm 
            <input type="checkbox" name="personality[]" value="Team Work" class="form-check-input">Team Work 
            <span style="color: red">@error('personality'){{$message}}@enderror</span> 
        </div>
        
        <div class="mb-3">
            <label for="drink" class="form-label">Enter your Favorite Drink</label>
            <input type="radio" name="drink" value="tea" class="form-check-input mr-10">Tea 
            <input type="radio" name="drink" value="coffee" class="form-check-input">Coffee 
            <input type="radio" name="drink" value="none" class="form-check-input">Better Working 
            <span style="color: red">@error('drink'){{$message}}@enderror</span> 
        </div>
    
        <button type="submit" class="btn btn-outline-success">Add member</button>
    
    
        
            <a href="/list" class="btn btn-outline-primary">Show All Members</a>
        
    </form>
</div>



