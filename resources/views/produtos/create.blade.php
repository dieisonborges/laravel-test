<!DOCTYPE html>
<html>
<head>
	<title>Novo Produto</title>
</head>
<body>
	<h1>Novo Produto</h1>
	
	<form method="POST" action="{{url('produtos/')}}">
		@csrf
		<label>Nome</label>
		<input type="text" name="nome">
		<label>Preço</label>
		<input type="text" name="preco">
		<label>Quantidade</label>
		<input type="number" name="quantidade">

		<input type="submit" value="Enviar">
	</form>

	
<br><br>

	<a href="{{url('/produtos/')}}" class="myButton">Produtos Voltar</a>







<style type="text/css">
.myButton {
	background-color:#44c767;
	-moz-border-radius:28px;
	-webkit-border-radius:28px;
	border-radius:28px;
	border:1px solid #18ab29;
	display:inline-block;
	cursor:pointer;
	color:#ffffff;
	font-family:Arial;
	font-size:17px;
	padding:16px 31px;
	text-decoration:none;
	text-shadow:0px 1px 0px #2f6627;
}
.myButton:hover {
	background-color:#5cbf2a;
}
.myButton:active {
	position:relative;
	top:1px;
}	

</style>


        




</body>
</html>