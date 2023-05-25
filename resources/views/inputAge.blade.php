<!DOCTYPE html>
<html>
<head>
	
	<title>ElectionAgeVerifier</title>
	@vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body>
    <center><br><br><br><br><br><br>
    	<h1> Election Age Verifier </h1>
	<form method="POST" action="/inputAge">
		@csrf 
		<label for="inputAge">Enter your age: </label>
		<input type="number" id="inputAge" name="InputAge" min="1" required autofocus /><br>
		<br><br><input type="submit" name="submit" />
    </form>
        
    @if ($age == 0)
      Put a number first
    @elseif ($age < 15)
      Not eligible to vote
    @elseif ($age < 18)
      Eligible to vote in SK election 
    @else 
      Eligible to vote National Election
    @endif

    <br>
       <p style="color:red;">{{$age}}</p>
    </center>
	
</body>
</html>