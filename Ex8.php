<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<title>Ex. 8. Calculadora</title>

<style>

body {
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    margin: 0;
    padding: 40px 20px;
    background: linear-gradient(to right, #e0f0ff, #f7faff);
    color: #333;
}

h2 {
    text-align: center;
    color: #005f99;
}

p {
    text-align: center;
}

form {
    max-width: 450px;
    margin: auto;
    background: white;
    padding: 25px;
    border-radius: 12px;
}

div {
    margin-bottom: 15px;
}

label {
    display: inline-block;
    width: 120px;
    font-weight: bold;
}

input, select {
    width: calc(100% - 130px);
    padding: 8px;
}

input[type=submit] {
    width: 100%;
    padding: 10px;
    background: #0077cc;
    color: white;
    border: none;
    border-radius: 8px;
}

.resultado {
    background: #c8e6c9;
    padding: 15px;
    border-radius: 10px;
    text-align: center;
}

.erro {
    background: #ffcdd2;
    padding: 15px;
    border-radius: 10px;
    text-align: center;
}

</style>
</head>

<body>

<h2>Calculadora</h2>
<p>Digite dois números e escolha a operação.</p>

<?php

$erro="";
$resultado="";

if($_POST){

$n1=$_POST["n1"];
$n2=$_POST["n2"];
$op=$_POST["operacao"];

if($n1=="" || $n2==""){
$erro="Preencha os campos.";
}else{

switch($op){

case "somar":
$res=$n1+$n2;
$resultado="$n1 + $n2 = $res";
break;

case "subtrair":
$res=$n1-$n2;
$resultado="$n1 - $n2 = $res";
break;

case "multiplicar":
$res=$n1*$n2;
$resultado="$n1 × $n2 = $res";
break;

case "dividir":
if($n2==0){
$erro="Não é possível dividir por zero.";
}else{
$res=$n1/$n2;
$resultado="$n1 ÷ $n2 = $res";
}
break;

}

}

}

if($erro) echo "<div class='erro'>$erro</div>";
if($resultado) echo "<div class='resultado'>$resultado</div>";

?>

<form method="post">

<div>
<label>Número 1</label>
<input type="number" name="n1">
</div>

<div>
<label>Número 2</label>
<input type="number" name="n2">
</div>

<div>
<label>Operação</label>
<select name="operacao">
<option value="somar">Somar</option>
<option value="subtrair">Subtrair</option>
<option value="multiplicar">Multiplicar</option>
<option value="dividir">Dividir</option>
</select>
</div>

<div>
<input type="submit" value="Calcular">
</div>

<div>
<input type="submit" value="Voltar" onclick="window.history.back(); return false;">
</div>

</form>

</body>
</html>