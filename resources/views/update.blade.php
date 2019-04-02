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
<div class="container">
	<div class="row">
		<form action="update" method="post" enctype="multipart/form-data">
			@csrf()
			<input type=file name="file" placeholder="Upload" class="form-control"><br>
			<button class="btn btn-primary" type="submit">Click Here</button>
		</form>
	</div>
</div>
</body>
</html>