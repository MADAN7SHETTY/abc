
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<ul class="nav">
    <li class="nav-item">
      <a class="nav-link active" href="#">Shoppingbazzaar</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="{{url('/login')}}">LOGIN</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="{{url('/register')}}">NEW REGISTRATION</a>
    </li>
    <li class="nav-item">
      <a class="nav-link " href="#">{{session()->get("user")}}</a>
    </li>
    <li class="nav-item">
      <a class="nav-link " href="{{url('/logot')}}">LOGOUT</a>
    </li>
  </ul>