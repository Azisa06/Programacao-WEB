# 🖥️ Exercícios em PHP

Este repositório contém **25 exercícios** desenvolvidos em **PHP**, utilizando o **framework Laravel** para a criação de formulários e manipulação de dados.

## 📌 Sobre os Exercícios

Os exercícios abordam conceitos fundamentais da linguagem PHP, incluindo:

- ✅ **Manipulação de formulários** (requisições GET e POST)
- ✅ **Processamento e validação de dados**
- ✅ **Lógica de programação** (estruturas condicionais e de repetição)
- ✅ **Uso de Controllers no Laravel** para organizar a lógica da aplicação

## 📁 Estrutura do Projeto

- 📂 **`PrimeiraLista/`** → 15 exercícios utilizando **rotas e views**
- 📂 **`SegundaLista/`** → 10 exercícios usando **Controllers**

## 🚀 Tecnologias Utilizadas

- **PHP** (v.X.X)
- **Laravel** (v.X.X)
- **Bootstrap**

## 📄 Exercícios Disponíveis

### ✅ Lista de Exercícios 1

1. Criar um formulário para inserir três notas e calcular a **média**.
2. Criar um formulário para inserir uma temperatura em **Celsius** e convertê-la para **Fahrenheit**.
3. Criar um formulário para inserir uma temperatura em **Fahrenheit** e convertê-la para **Celsius**.
4. Criar um formulário para inserir a **base** e a **altura** de um **retângulo**, calculando sua **área**.
5. Criar um formulário para inserir o **raio** de um **círculo** e calcular a **área** e o **perímetro**.
6. Criar um formulário para inserir a **largura** e **altura** de um **retângulo** e calcular seu **perímetro**.
7. Criar um formulário para inserir o **raio** de um **círculo** e calcular seu **comprimento**.
8. Criar um formulário para inserir a **base** e a **altura** de um **triângulo** e calcular sua **área**.
9. Criar um formulário para inserir um **valor em metros** e convertê-lo para **centímetros** e **milímetros**.
10. Criar um formulário para inserir um **valor em milhas** e convertê-lo para **quilômetros**.
11. Criar um formulário para inserir o **peso** e a **altura** e calcular o **IMC**.
12. Criar um formulário para inserir o **preço de um produto** e aplicar um **percentual de desconto**.
13. Criar um formulário para inserir um **capital, taxa de juros e período**, calculando os **juros simples**.
14. Criar um formulário para inserir um **capital, taxa de juros e período**, calculando os **juros compostos**.
15. Criar um formulário para inserir um **valor em dias** e convertê-lo para **horas, minutos e segundos**.

---

### ⚡ Lista de Exercícios 2 (usando Controllers)

1. Criar um programa que receba **dois valores** e retorne a **soma**. Se forem iguais, retornar o **triplo** da soma.
2. Criar um programa para receber os valores **A e B** e exibi-los em **ordem crescente**. Se forem iguais, exibir apenas um deles.
3. Criar um programa para calcular o **desconto de 15%** em um produto caso o valor seja superior a **R$100,00**.
4. Criar um programa para exibir os **números primos** de **1 até um número informado**.
5. Criar um programa para receber um **número de 1 a 12** e exibir o **mês correspondente** usando `switch-case`.
6. Criar um programa para imprimir **todos os números** de **1 até um número informado** usando `for`.
7. Criar um programa para somar todos os números de **1 até um número informado** usando `while`.
8. Criar um programa que peça para o usuário inserir um número e **exiba a contagem regressiva** com `do-while`.
9. Criar um programa para calcular o **fatorial** de um número informado.
10. Criar um programa para exibir a **tabuada** de um número de **1 a 10**.

## ▶️ Como Executar

1. Clone o repositório:

   ```sh
   git clone https://github.com/seu-usuario/seu-repositorio.git
   cd seu-repositorio

2. Atualize as dependências do Laravel:

    ```sh
    composer update

3. Copie o arquivo .env.example para .env e gere a chave da aplicação:

    ```sh
    cp .env.example .env
    php artisan key:generate

4. Inicie o servidor e clique no link usando a tecla CTRL:

    ```sh
    php artisan serve