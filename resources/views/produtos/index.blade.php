@extends('layouts.app')
@section('title','Produtos')
@section('content')

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

@endsection