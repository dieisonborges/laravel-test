<!DOCTYPE html>
<html>
<head>
	<title>Produtos - {{$produto->nome}}</title>
</head>
<body>
	<h1>Produtos - {{$produto->nome}}</h1>
	<ul>
		
		<li>Nome: {{$produto->nome}}</li>
		<li>Preco: {{$produto->preco}}</li>
		<li>Quantidade: {{$produto->quantidade}}</li>
		
	</ul>
	


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