# Lista de Exercícios PHP – Estruturas de Programação

Este projeto contém uma lista de **15 exercícios em PHP** desenvolvidos para praticar conceitos fundamentais de programação web utilizando **HTML, CSS e PHP**.

Os exercícios trabalham diferentes estruturas da lógica de programação, como:

* Algoritmos sequenciais
* Estruturas condicionais (`if/else`)
* Estruturas de múltipla escolha (`switch/case`)
* Laços de repetição (`for`, `while`)
* Manipulação de arrays

Cada exercício possui um **formulário HTML** para entrada de dados e utiliza **PHP para processar e exibir os resultados**.

---

# Tecnologias Utilizadas

* **HTML5**
* **CSS3**
* **PHP**

---

# Estrutura do Projeto

```
DESAFIOS04PHP
│
│   ├──Index.php
│   ├── Ex1.PHP
│   ├── Ex2.php
│   ├── Ex3.php
│   ├── Ex4.php
│   ├── Ex5.php
│   ├── Ex6.php
│   ├── Ex7.php
│   ├── Ex8.php
│   ├── Ex9.php
│   ├── Ex10.php
│   ├── Ex11.php
│   ├── Ex12.php
│   ├── Ex13.php
│   ├── Ex14.php
│   └── Ex15.php
│
└── README.md
```

---

# Como Executar o Projeto

1. Instale um ambiente que suporte **PHP**, como:

* XAMPP
* WAMP
* Laragon
* PHP embutido do VS Code

2. Coloque a pasta do projeto dentro da pasta do servidor.

Exemplo (XAMPP):

```
htdocs/
   projeto-exercicios-php/
```

3. Inicie o servidor Apache.

4. Abra o navegador e acesse:

```
http://localhost/DESAFIO04PHP/Ex1.PHP
```

ou abra qualquer outro exercício.

---

#Layout
<img width="1365" height="636" alt="Captura de tela 2026-03-16 210510" src="https://github.com/user-attachments/assets/6376f764-4469-4cf1-9614-fbba28a403cb" />
<img width="1365" height="633" alt="Captura de tela 2026-03-16 210606" src="https://github.com/user-attachments/assets/9bd2d21e-c370-4128-b5a4-15afc19926c7" />




# Descrição dos Exercícios

## Bloco 1 – Algoritmos Sequenciais

### Exercício 1 – Conversor de Moedas

Lê um valor em **Reais (R$)** e a cotação do **Dólar**, calcula o valor convertido e exibe o resultado.

Exemplo:

```
R$ 100,00 equivalem a US$ 19,50
```

---

### Exercício 2 – Área e Perímetro de um Retângulo

Recebe **base e altura** e calcula:

* Área = base × altura
* Perímetro = 2 × (base + altura)

---

### Exercício 3 – Consumo de Combustível

Recebe:

* Distância percorrida (Km)
* Combustível gasto (Litros)

Calcula o **consumo médio (Km/L)**.

---

# Bloco 2 – Estruturas Condicionais (if/else)

### Exercício 4 – Situação do Aluno

Calcula a média de duas notas e exibe:

* **Aprovado** (≥ 7)
* **Recuperação** (≥ 4 e < 7)
* **Reprovado** (< 4)

---

### Exercício 5 – Verificador de Idade (Votação)

Calcula a idade a partir do **ano de nascimento** e informa:

* **Voto obrigatório**
* **Voto facultativo**
* **Não pode votar**

---

### Exercício 6 – Par ou Ímpar

Verifica se um número inteiro é:

* **PAR**
* **ÍMPAR**

Utilizando o operador **módulo (`%`)**.

---

# Bloco 3 – Estrutura Switch / Case

### Exercício 7 – Dia da Semana

Recebe um número de **1 a 7** e exibe o dia correspondente.

Exemplo:

```
1 - Domingo
2 - Segunda-feira
```

---

### Exercício 8 – Calculadora Simples

Recebe:

* Dois números
* Uma operação

Operações disponíveis:

* Somar
* Subtrair
* Multiplicar
* Dividir

Utiliza **switch/case** para executar o cálculo correto.

Possui validação para **divisão por zero**.

---

### Exercício 9 – Mês por Extenso

Recebe um número de **1 a 12** e exibe o nome do mês.

Exemplo:

```
3 - Março
```

---

# Bloco 4 – Laços de Repetição

### Exercício 10 – Fatorial

Calcula o **fatorial de um número (N!)** utilizando um laço `for`.

Exemplo:

```
5! = 120
```

---

### Exercício 11 – Somatório de 1 até N

Soma todos os números de **1 até N**.

Exemplo:

```
A soma de 1 até 5 = 15
```

---

### Exercício 12 – Números Pares em Intervalo

Recebe:

* Número inicial
* Número final

Exibe apenas os **números pares** dentro do intervalo.

Exemplo:

```
Pares entre 5 e 15: 6, 8, 10, 12, 14
```

---

# Bloco 5 – Manipulação de Arrays

### Exercício 13 – Média de Várias Notas

Recebe **5 notas** utilizando `name="notas[]"`.

O PHP recebe os valores como **array** e calcula a média usando `foreach`.

---

### Exercício 14 – Lista de Compras

Utiliza **checkboxes** para selecionar itens.

Exemplo de itens:

* Arroz
* Feijão
* Leite
* Ovos

O PHP recebe os itens selecionados em um **array** e exibe todos usando `foreach`.

---

### Exercício 15 – Maior Número

Recebe **5 números** em um array e encontra o maior valor.

Utiliza um laço `foreach` comparando os valores.

Exemplo:

```
O maior número digitado foi: 25
```

---

# Objetivo do Projeto

O objetivo desta lista de exercícios é **praticar lógica de programação aplicada ao desenvolvimento web com PHP**, utilizando:

* entrada de dados com **formulários HTML**
* processamento com **PHP**
* estruturação visual com **CSS**

---

# Autor
Vitória Gabriela Fernandes da Luz
vitoriagabrielafernades@gmail.com


Projeto desenvolvido para fins acadêmicos.
