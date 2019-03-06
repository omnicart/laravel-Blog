<!DOCTYPE html>
<html>
<head>
	<title>test view</title>
</head>
<body>
	{{-- @foreach($book->authors as $data)
	{{$data}}
	
	@endforeach
 --}}
 {{$book->authors->atname}}
</body>
</html>