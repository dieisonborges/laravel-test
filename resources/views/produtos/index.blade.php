<!DOCTYPE html>
<html>
<head>
	<title>Produtos</title>
</head>
<body>
	<h1>Produtos</h1>
	<ul>
		@foreach ($produtos as $produto)
		<li>
			<a href="{{url('/produtos/'.$produto->id)}}">
				{{$produto->nome}}
			</a>
		</li>
		@endforeach
	</ul>

</body>
</html>