<!DOCTYPE html>
<html>
<head>
	
	<title>ElectionAgeVerifier</title>
	@vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body>
	<center><br><br><br><br><br><br>
	<form method="POST" action="/inputAge">
		@csrf 
		<label for="inputAge">Enter your age: </label>
		<input type="text" id="inputAge" name="InputAge" required /><br>
		<br><br><input type="submit" name="submit" />
    </form>

    <br>
       <p style="color:red;">{{$age}}</p>
    </center>
</body>
</html>