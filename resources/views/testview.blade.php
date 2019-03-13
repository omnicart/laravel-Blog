<!DOCTYPE html>
<html>
<head>
	<title>test view</title>
</head>
<body>
	{{-- @foreach($book as $data)
		@foreach($data->authors as $datas)
		<p>{{$datas->atname}}</p>
		@endforeach
	@endforeach --}}

 @foreach($book as $data)
 {{$data->atname}}
 @endforeach
 {{-- {{$book->authors}}<br> --}}


</body>
</html>