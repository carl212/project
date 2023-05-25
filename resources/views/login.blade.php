<!DOCTYPE html>
<html>
<head>
	
	<title>Login form</title>
		@vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body>
	<center><br><br><br><br><br><br>
	<form method="POST" action="{{route('login')}}" >
		@csrf 
		<h1 style="color:royalblue;font-family: Cooper Black;"> Login Form </h1> <br>
		<label for="username">Enter Username: </label>
		<input type="text" id="username" name="username" required ><br>
		<br><br>
		<label for="password">Enter Password: </label>
		<input type="password" id="password" name="password" required ><br>
		
		
		<br><br><input type="submit" value="Login" /><br><br>
    </form> 
      @if ($errors->any())
      <div style="color:red;">
      {{$errors->first()}}
      </div>
      @endif
      <br>

    </center>
</body>
</html>