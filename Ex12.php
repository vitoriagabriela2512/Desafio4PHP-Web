

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Ex.12 Sequência de Pares</title>

<style>
  body {
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    margin: 0;
    padding: 40px 20px;
    background: linear-gradient(to right, #e0f0ff, #f7faff);
    color: #333;
}

h1, h2 {
    text-align: center;
    color: #005f99;
}

h2 {
    margin-bottom: 10px;
}

p {
    text-align: center;
    font-size: 1em;
    margin-bottom: 20px;
    color: #333;
}

form {
    max-width: 450px;
    margin: 0 auto 30px auto;
    background-color: #ffffff;
    padding: 25px 20px;
    border-radius: 12px;
    box-shadow: 0 6px 15px rgba(0,0,0,0.1);
}

div {
    margin-bottom: 15px;
}

label {
    display: inline-block;
    width: 120px;
    font-weight: bold;
}

input[type=text], input[type=number] {
    width: calc(100% - 130px);
    padding: 8px;
    border-radius: 6px;
    border: 1px solid #ccc;
    font-size: 1em;
}

input[type=text]:focus, input[type=number]:focus {
    border-color: #0077cc;
    outline: none;
}

input[type=submit] {
    width: 100%;
    padding: 12px;
    background-color: #0077cc;
    color: #fff;
    border: none;
    border-radius: 8px;
    font-size: 1em;
    font-weight: bold;
    cursor: pointer;
    transition: all 0.3s ease;
}

input[type=submit]:hover {
    background-color: #005f99;
    transform: translateY(-2px);
    box-shadow: 0 4px 10px rgba(0,0,0,0.2);
}

@media (max-width: 600px) {
    label {
        display: block;
        width: 100%;
        margin-bottom: 5px;
    }
    input[type=text], input[type=number] {
        width: 100%;
    }
}

</style>
</head>

<body>
    <?php

if($_POST){

$inicio = $_POST['inicio'];
$fim = $_POST['fim'];

echo "Pares entre $inicio e $fim: ";

for($i = $inicio; $i <= $fim; $i++){

if($i % 2 == 0){
echo "$i ";
}

}
}


?>
 
<h2>Sequência de Pares</h2>
<p>Digite dois numeros e verifique os pares deles</p>
<form method="post">
    <div>
     <div>
        <input type="number" name="inicio"><br><br>
     </div>
     <div>
       <input type="number" name="fim"><br><br>
     </div>
     <div>
       <input type="submit" name ="Mostrar"><br><br>
     </div>
     <div>
         <input type="submit" value="Voltar" onclick="window.history.back(); return false;">  
     </div>
    </div>

</form>

</head>

<body>