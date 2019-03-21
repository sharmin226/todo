
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title></title>
</head>
<body>
	
	<h1>All Todo list</h1>
<ul>
	@foreach($mylists as $mytitle)
		<b>	{{ $mytitle->id }}.</b>
			<a href="task/{{ $mytitle->id }}">
			{{ $mytitle->deadline }}  
			</a>
			<br>
		{{$mytitle->task}}
		<br>
		<br>
	@endforeach

</ul>
	
</body>
</html>