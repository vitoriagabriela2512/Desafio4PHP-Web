<?php
//exercício 1: Conversor de Moedas
$real = $cotacao = null;
$erros = [];
$resultado = null;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Pega os valores do formulário
    $real = $_POST['real'] ?? '';
    $cotacao = $_POST['cotacao'] ?? '';

    // Validação
    if (!is_numeric($real) || $real <= 0) {
        $erros[] = "Valor em Reais inválido. Deve ser um número positivo.";
    }
    if (!is_numeric($cotacao) || $cotacao <= 0) {
        $erros[] = "Cotação do Dólar inválida. Deve ser um número positivo.";
    }

    // Se não houver erros, faz a conversão
    if (empty($erros)) {
        $dolar = $real / $cotacao;
        $resultado = "R$ " . number_format($real, 2, ',', '.') . 
                     " equivalem a US$ " . number_format($dolar, 2, '.', '');
    }
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Ex. 1: Conversor de Moedas</title>
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

    <h2>Conversor de Moedas</h2>
    <p>Digite o valor em Reais e a cotação do Dólar.</p>

    <?php
    // Exibe erros
    if (!empty($erros)) {
        echo "<div class='erro'><ul>";
        foreach ($erros as $erro) {
            echo "<li>$erro</li>";
        }
        echo "</ul></div>";
    }

    // Exibe resultado
    if ($resultado !== null) {
        echo "<div class='resultado'>$resultado</div>";
    }
    ?>

    <form method="post" action="">
        <div>
            <label for="real">Valor em Reais:</label>
            <input type="text" id="real" name="real" value="<?= htmlspecialchars($real) ?>">
        </div>
        <div>
            <label for="cotacao">Cotação do Dólar:</label>
            <input type="text" id="cotacao" name="cotacao" value="<?= htmlspecialchars($cotacao) ?>">
        </div>
        <div>
            <input type="submit" value="Calcular Conversão">
        </div>
        <div>
            <input type="submit" value="voltar" onclick="window.history.back(); return false;">
        </div>
        
    </form>  
</head>
<body>