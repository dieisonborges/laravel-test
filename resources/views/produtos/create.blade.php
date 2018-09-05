@extends('layouts.app')
@section('title','Produtos')
@section('content')

<div class="col-md-12">
	<div class="box box-success">

	<form method="POST" action="{{url('produtos/')}}">
		@csrf
		<div class="form-group col-md-12">
			<label >Nome</label>
			<input type="text" name="nome" class="form-control">
			<label>Preço</label>
			<input type="text" name="preco" class="form-control">
			<label>Quantidade</label>
			<input type="number" name="quantidade" class="form-control">

			<input type="submit" value="Enviar" class="btn btn-warning">
		</div>
	</form>

	
<br><br>

	<a href="{{url('/produtos/')}}" class="btn btn-success">Produtos Voltar</a>

	</div>			
</div>


@endsection