<?php
//Exercicio 4: Média Aritmética com Situação
$n1 = $n2 = $n3 = "";
$media = null;
$situacao = null;
$erros = [];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    

    $notas_postadas = [
        'n1' => $_POST['n1'] ?? null,
        'n2' => $_POST['n2'] ?? null,
    ];
    
    $notas_validas = [];
    $opcoes_filtro = ["options" => ["min_range" => 0, "max_range" => 10]];

    foreach ($notas_postadas as $chave => $valor) {
        if (isset($valor) && $valor !== '') {
            $nota_filtrada = filter_var(trim($valor), FILTER_VALIDATE_FLOAT);
            
            if ($nota_filtrada === false || $nota_filtrada < 0 || $nota_filtrada > 10) {
                $erros[] = "Nota " . substr($chave, 1) . " inválida. Deve ser um número entre 0 e 10.";
                $$chave = htmlspecialchars(trim($valor)); // Repopula campo inválido
            } else {
                $notas_validas[] = $nota_filtrada;
                $$chave = $nota_filtrada; // Repopula campo válido
            }
        } else {
            $erros[] = "Nota " . substr($chave, 1) . " é obrigatória.";
        }
    }

    // Se todas as 2 notas foram válidas, calcula média e situação
    if (count($notas_validas) == 2) {
        $media = array_sum($notas_validas) / 2;

        if ($media >= 7) {
            $situacao = "Aprovado";
        } elseif ($media >= 4) {
            $situacao = "Em Recuperação";
        } else {
            $situacao = "Reprovado";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<title>Ex 4. Média Aritmética com Situação</title>
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

.erro {
    color: #b71c1c;
    background: linear-gradient(145deg, #ffebee, #ffcdd2);
    border: 1px solid #b71c1c;
    padding: 15px 20px;
    border-radius: 10px;
    margin-bottom: 20px;
    box-shadow: 0 4px 8px rgba(183, 28, 28, 0.2);
    font-weight: bold;
    font-size: 1em;
}


.resultado {
    color: #1b5e20;
    background: linear-gradient(145deg, #e8f5e9, #c8e6c9);
    border: 1px solid #1b5e20;
    padding: 15px 20px;
    border-radius: 10px;
    margin-bottom: 20px;
    font-weight: bold;
    text-align: center;
    box-shadow: 0 4px 8px rgba(27, 94, 32, 0.2);
    font-size: 1em;
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

<h2>Calculadora de Média Aritmética e Situação</h2>
<p>Digite as duas notas do aluno (0 a 10)</p>

<?php
// Exibe erros
if (!empty($erros)) {
    echo "<div class='erro'><ul>";
    foreach ($erros as $erro) { echo "<li>$erro</li>"; }
    echo "</ul></div>";
}

// Exibe resultado e situação
if ($media !== null && $situacao !== null) {
    $media_formatada = number_format($media, 2, ',', '.');
    echo "<div class='resultado'>Média: <strong>$media_formatada</strong><br>Situação: <strong>$situacao</strong></div>";
}
?>

<form method="post" action="">
    <div>
        <label for="n1">Nota 1:</label>
        <input type="text" id="n1" name="n1" value="<?= htmlspecialchars($n1) ?>">
    </div>
    <div>
        <label for="n2">Nota 2:</label>
        <input type="text" id="n2" name="n2" value="<?= htmlspecialchars($n2) ?>">
    </div>
    <div>
        <input type="submit" value="Calcular Média">
    </div>
    <div>
            <input type="submit" value="voltar" onclick="window.history.back(); return false;">
        </div>
</form>

</body>
</html>