@extends('layouts.app')
@section('title','Produtos')
@section('content')



@if($message = Session::get('success'))
	<div class="alert alert-success">
		{{$message}}		
	</div>
@endif



<a href="{{url('/produtos/create')}}" class="btn btn-success">________Criar________</a>

<div class="col-md-12">
	<div class="box box-success">
		<div class="box-header with-border">
			<h3 class="box-title">Produtos</h3>
		</div>
		
		<ul>
			@foreach ($produtos as $produto)
			<li>
				<a class="btn btn-success" href="{{url('/produtos/'.$produto->id)}}">
					{{$produto->nome}}
				</a>

				<form method="POST" action="{{action('ProdutosController@destroy', $produto->id)}}">
					@csrf
					<input type="hidden" name="_method" value="DELETE">
					<button class="btn btn-danger">Excluir</button>
				</form>

				<a href="" class="btn btn-warning">Editar</a>
			</li>
			<hr>
			@endforeach
		</ul>					
	</div>			
</div>



@endsection