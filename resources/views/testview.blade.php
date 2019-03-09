<!DOCTYPE html>
<html>
<head>
	<title>test view</title>
</head>
<body>
	@foreach($book as $data)
		@foreach($data->authors as $datas)
		<p>{{$datas->atname}}</p>
		@endforeach
	@endforeach

{{--  {{$book}} --}}
 {{-- {{$book->authors}}<br> --}}


</body>
</html>