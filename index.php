<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<title>Desafio 4 - Formulários PHP</title>
<style>
 body {
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    margin: 0;
    padding: 40px 20px;
    background: linear-gradient(to right, #d0e6f8, #f0f8ff);
    color: #333;
}

h1 {
    text-align: center;
    color: #005f99;
    font-size: 2.2em;
    margin-bottom: 10px;
}

p {
    text-align: center;
    font-size: 1em;
    margin-bottom: 30px;
    color: #333;
}

.menu {
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    gap: 20px;
}

.exercicio {
    background: #ffffff;
    border-radius: 12px;
    width: 220px;
    height: 90px;
    display: flex;
    align-items: center;
    justify-content: center;
    text-align: center;
    text-decoration: none;
    color: #005f99;
    font-weight: bold;
    font-size: 1em;
    box-shadow: 0 6px 12px rgba(0,0,0,0.1);
    transition: all 0.3s ease;
    border: 2px solid transparent;
}

.exercicio:hover {
    background: linear-gradient(135deg, #0077cc, #00aaff);
    color: #fff;
    transform: translateY(-5px);
    box-shadow: 0 10px 20px rgba(0,0,0,0.2);
    border: 2px solid #005f99;
}

@media (max-width: 768px) {
    .exercicio {
        width: 45%;
        height: 80px;
        font-size: 0.95em;
    }
}

@media (max-width: 480px) {
    .exercicio {
        width: 90%;
        height: 70px;
        font-size: 0.9em;
    }
}
</style>
</head>
<body>

   <h1>Desafio 4 - Formulários PHP</h1>

<div class="menu">
    <!-- Sequenciais -->
    <a class="exercicio" href="Ex1.PHP">1. Conversor de Moedas</a>
    <a class="exercicio" href="Ex2.php">2. Área e Perímetro</a>
    <a class="exercicio" href="Ex3.php">3. Consumo de Combustível</a>
    <a class="exercicio" href="Ex4.php">4. Situação do Aluno</a>
    <a class="exercicio" href="Ex5.php">5. Verificador de Idade</a>
    <a class="exercicio" href="Ex6.php">6. Par ou Ímpar</a>
    <a class="exercicio" href="Ex7.php">7. Dia da Semana</a>
    <a class="exercicio" href="Ex8.php">8. Calculadora Simples</a>
    <a class="exercicio" href="Ex9.php">9. Mês por Extenso</a>
    <a class="exercicio" href="Ex10.php">10. Fatorial de um Número</a>
    <a class="exercicio" href="Ex11.php">11. Somatório</a>
    <a class="exercicio" href="Ex12.php">12. Sequência de Pares</a>
    <a class="exercicio" href="Ex13.php">13. Média de Valores</a>
    <a class="exercicio" href="Ex14.php">14. Lista de Compras</a>
    <a class="exercicio" href="Ex15.php">15. Menor e Maior</a>
</div>

</body>
</html>