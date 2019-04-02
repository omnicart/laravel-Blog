<!DOCTYPE html>
<html>
<head>
	<title>Just Validate Page</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body>
@if(count($errors)>0)
			@foreach($errors->all() as $error)
				<span class="alert alert-danger">{{$error}}</span>
			@endforeach
			@endif
			<br><br>
	<div class="container">
		<div class="row">
			<form action="{{route('validate')}}" method="POST">
				@csrf()
				<input type="text" name='first' class="form-control" placeholder="First name"><br>
				<input type="text" name="second" class="form-control" placeholder="second name"><br>
			<center><input type="submit" value="submit" class="btn btn-primary"></center>
			</form>
		</div>

	</div>

</body>
</html>