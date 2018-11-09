<!DOCTYPE html>
<html>
<head>
	<title>
	Teste 02
	</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

</head>
<body>
	<div class="container">
		<div class="row">
			<div class="form-group col-md-3">
				<label>Produto</label>
				<input type="text" name="descricao_produto[]" id="descricao_produto" class="form-control">
			</div>
			<div class="form-group col-md-3">
				<label>Valor do Produto</label>
				<input type="number" name="valor_produto[]" id="valor_produto[]" class="form-control" onblur="produto()">
			</div>
			<div class="form-group col-md-2">
				<label>Quantidade</label>
				<input type="number" name="quantidade_produto[]" id="quantidade_produto[]" class="form-control" onblur="produto()">
			</div>
			<div class="form-group col-md-3">
				<label>Total Produto</label>
				<input type="number" class="form-control" name="produto_valor[]" id="produto_valor[]">
				
			</div>
	
			<div class="form-group col-md-1">
				<label>ADD</label>
				<a class="btn btn-warning" id="produto_adiciona" >+</a>
			</div>
		</div>
		<div id="produto_adicionado"></div>
		<div class="row">
			<div class="col-md-4">
			<p id="resultado"></p>
		</div>
		</div>
	   <div class="row">
	   	<div class="form-group col-md-3">
	   	 <input type="submit" class="btn btn-success" value="Calcular Total" onclick="somarValores()">
	   </div>
	</div>
	</div>

<script type="text/javascript">
	
	$( "#produto_adiciona" ).click(function() {
    $( "#produto_adicionado" ).append( "<div class='row'><div class='form-group col-md-3'><input type='text' name='descricao_produto[]' id='descricao_produto' class='form-control'></div><div class='form-group col-md-3'><input type='number' name='valor_produto[]'' id='valor_produto[]'' class='form-control'onblur='produto()'></div><div class='form-group col-md-2'><input type='number' name='quantidade_produto[]'' id='quantidade_produto[]'' class='form-control' onblur='produto()'></div><div class='form-group col-md-3'><input type='number' class='form-control' name='produto_valor[]' id='produto_valor[]' onblur='produto()'></div><div class='form-group col-md-1'><a class='btn btn-warning' id='produto_adiciona'>+</a></div></div>" );s
});

function produto(){

var valor_produto = document.getElementById("valor_produto[]").value;
var quantidade = document.getElementById("quantidade_produto[]").value;

var total = valor_produto * quantidade;

document.getElementById("produto_valor[]").value = total;

}
var quant = document.getElementsByName("produto_valor[]");
var teste = [];

function somarValores(){
var soma = 0;

 
for (var i=0; i<quant.length; i++){
  
   		teste[i] = parseInt(quant[i].value);      
        soma += parseInt(teste[i]);
 }  
  document.getElementById("resultado").innerHTML = soma;
}

</script></body></html>