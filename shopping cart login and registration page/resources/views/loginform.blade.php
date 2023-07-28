<!DOCTYPE html>
<html>
<head>
  <title>Login Form</title>

</head>
<body>
  <div class="container">
    <h2>Login</h2>
    <form method="post" action="{{'/getin'}}">
        @csrf
     
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>
      </div>
    
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required>
      </div><br/>
     
        <input type="submit" value="Login" name="submit">
      </div><br/>
      
        <span class="forgot-password">Forgot password?</span>
      </div>
    </form>
  </div>
</body>
</html>
