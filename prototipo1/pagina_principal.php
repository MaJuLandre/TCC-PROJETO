<?php
session_start();
if (!isset($_SESSION['usuario_logado'])) {
    header('Location: login.php'); // Redireciona para a página de login se não estiver logado
    exit();
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CADASTRO</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: flex-start;
            background-color: #f4f4f4;
        }
        .container {
            display: flex;
            width: 90%;
            max-width: 1200px;
            margin-top: 10px;
        }
        .form-section, .activities-section {
            background-color: #fff;
            border-radius: 8px;
            padding: 50px;
            box-shadow: 0 0 60px rgba(0, 0, 0, 0.1);
        }
        .form-section {
            width: 30%;
            margin-right: 20px;
        }
        .activities-section { /*muda o tamanho do quadrado de atividades*/
            width: 60%;
            text-align: center;
        }
        h1 {
            font-size: 24px;
            margin-bottom: 20px;
        }
        .activity-list {
            list-style: none;
            padding: 0;
        }
        .activity-list li {
            padding: 10px; /*muda formatação dos dias da semana*/
            border-bottom: 1px solid #ddd;
        }
        .activity-list li:last-child {
            border-bottom: none;
        }
        label {
            display: block;
            margin-bottom: 8px;
            font-weight: bold;
        }
        input, select {
            width: 100%; /* Aumenta a largura dos campos */
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ddd;
            border-radius: 4px;
        }
        button {
            padding: 10px 15px;
            background-color: #000000;
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        button:hover {
            background-color: #000000;
        }
    </style>
</head>
<body>
    <div class="container">
        <!-- Formulário -->
        <div class="form-section">
            <h1>Cadastro</h1>
            <form>

                <form action="cadas.php" method="POST"></form>



                <label for="nome">Nome:</label>
                <input type="text" id="nome" name="nome" placeholder="Digite seu nome" required>

                <label for="cpf">CPF:</label>
                <input type="text" id="cpf" name="cpf" placeholder="Digite seu CPF" required>
                
                <label for="email">E-mail:</label>
                <input type="email" id="email" name="email" placeholder="Digite seu e-mail" required>

                <label for="numero">Celular:</label>
                <input type="tel" id="numero" name="numero" placeholder="Digite seu celular" required>

                <label for="idade">Idade:</label>
                <input type="number" id="idade" name="idade" min="0" max="120" placeholder="Digite sua idade" required>
                
                <label for="instituicao">Instituição:</label>
                <select id="instituicao" name="instituicao" required>
                    <option value="" disabled selected>Selecione sua instituição</option>
                    <option value="universidade1">Universidade 1</option>
                    <option value="etec1">Etec 1</option>
                    <option value="empresa1">Empresa 1</option>
                    <option value="organizacao1">Organização 1</option>
                </select>

                <input type="password" name="senha" placeholder="senha" required>

                <button type="submit" class="btn btn-dark">Atualizar</button>
            </form>
        </div>
        
        <!-- Atividades -->
        <div class="activities-section">
            <h1>Atividades da Semana</h1>
            <ul class="activity-list">
                <li>
                    <button type="button" >08</button> <button type="button" >09</button> <button type="button" >10</button>
                    <p>Reunião de equipe às 10h</p>
                    <p>Entrega de relatórios</p>
                </li>
                <li>
                    
                    <p>Desenvolvimento de projeto</p>
                    <p>Revisão de código</p>
                </li>
                <li>
                    <h2>Sexta-feira</h2>
                    <p>Planejamento da próxima semana</p>
                    <p>Reunião com clientes</p>
                </li>
            </ul>
        </div>
    </div>
    <a href="logout.php">Sair</a>
</body>
</html>
