<!DOCTYPE html>
<html>
<head>
  <title>Registration Form</title>
 
  
</head>
<body>

  
  <div class="container">
    <h2>Registration Form</h2>
    <form action="{{url('/insert')}}" method="post" >
      @csrf
      <div class="form-group">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required  />
      </div>
      <div class="form-group">
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required  />
      </div>
      <div class="form-group">
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required  />
      </div>
      <div class="form-group">
        <input type="submit" value="Register" name="submit" />
      </div>
    </form>
  </div>
</body>
</html>


