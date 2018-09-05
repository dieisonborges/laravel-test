@extends('layouts.app')
@section('title',$produto->nome)
@section('content')

<div class="col-md-12">
	<div class="box box-success">	
	<h1>Produtos - {{$produto->nome}}</h1>
	<ul>
		
		<li>Nome: {{$produto->nome}}</li>
		<li>Preco: {{$produto->preco}}</li>
		<li>Quantidade: {{$produto->quantidade}}</li>
		
	</ul>
	


	<a href="{{url('/produtos/')}}" class="btn btn-warning">Produtos Voltar</a>

	</div>			
</div>

@endsection