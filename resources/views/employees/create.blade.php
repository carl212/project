@if (Auth::check())
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>UPDATE EMPLOYEE</title>
	 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        *{
            font-family: arial;
        }
    </style>
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body>

    <div class="container mt-4">
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="text-center">
                	<h2><b>Add Employee Page</b></h2>
                </div>
                  <div class="text-right ">
                    <a class="btn btn-info" href="{{ route('employees.index') }}"> <i class="fa-solid fa-arrow-left fa-beat" style="color: #ffffff;"></i></a>
                </div>
            </div>
        </div>
    @if(session('status'))
        <div class="alert alert-success mb-1 mt-1">
            {{ session('status') }}
        </div>
    @endif
	<form action="{{route('employees.store')}}" method="POST" enctype="multipart/form-data">
		@csrf
		  <div class="col-xs-12 col-sm-12 col-md-4 mx-auto">
            <div class="row mt-2">
                <div class="col-xs-12 col-sm-12 col-md-12 mx-auto">
		<div class="form-group">
                        <strong>Fullname</strong>
                        <input type="text" name="fullname" class="form-control" >
                        @error('fullname')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
		<br>
		 <div class="col-xs-12 col-sm-12 col-md-15">
                    <div class="form-group">
                        <strong>Email Address</strong>
                        <input type="text" name="email_address" class="form-control" >
                        @error('email_address')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
		<br>
		<div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Username</strong>
                        <input type="text" name="username" class="form-control" >
                        @error('username')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
	    <br>
		<div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Password</strong>
                        <input type="password" name="password" class="form-control" >
                        @error('password')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
	    <br>
		<div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Status</strong>
                        <input type="text" name="status" class="form-control" >
                        @error('status')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
	     <br>
          <button type="submit" class="btn  mx-auto btn-primary">Submit</button>
      </div>

	</form>
</div>


</body>
</html>
@else

<script>
   window.location.href = "{{ route('login') }}";
</script>

@endif