<?php
namespace Projeto\ProjetoEstacionamento\PHP;

require_once("Relatorio.php");
require_once("Funcionario.php");
require_once("Mensalista.php");
require_once("Controle.php");

use Projeto\ProjetoEstacionamento\PHP\Relatorio;
use Projeto\ProjetoEstacionamento\PHP\Funcionario;
use Projeto\ProjetoEstacionamento\PHP\Mensalista;
use Projeto\ProjetoEstacionamento\PHP\Controle;
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Relatórios de Estacionamento</title>
    <link rel="stylesheet" href="https://use.typekit.net/gvp4xoa.css">
    <style>
        body {
            font-family: "magistral", sans-serif;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 20px;
            background: linear-gradient(to right, #1e2e52, #d3283b, #1e2e52);
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.5);
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            height: 5vh;
            z-index: 10;
        }

        .logo_img {
            margin-left: 620px;
        }

        main {
            margin-top: 80px; /* Ajusta o topo para compensar o header fixo */
            padding: 20px;
        }

        .tabs {
            margin-bottom: 20px;
        }

        .tab-button {
            background-color: #1e2e52;
            color: white;
            border: none;
            padding: 10px 20px;
            cursor: pointer;
            margin-right: 5px;
        }

        .tab-button:hover {
            background-color: #45a049;
        }

        .tab-content {
            display: none;
        }

        .tab-content.active {
            display: block;
        }

        footer {
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 20px;
            background: linear-gradient(to right, #1e2e52, #d3283b, #1e2e52);
            color: white;
            position: fixed;
            bottom: 0;
            left: 0;
            right: 0;
            height: 60px;
        }

        footer p {
            margin: 0;
        }
    </style>
</head>
<body>
    <header>
        <img src="imagens/logo_estacionamento.png" class="logo_img" width="350" alt="Logo da Elarssen Estacionamento">
    </header>

    <main>
        <div class="tabs">
            <button class="tab-button" onclick="showTab('funcionario')">Funcionário</button>
            <button class="tab-button" onclick="showTab('cliente')">Cliente</button>
            <button class="tab-button" onclick="showTab('mensalista')">Mensalista</button>
        </div>

        <div id="funcionario" class="tab-content">
            <?php
                $relatorio = new Relatorio();
                echo $relatorio->gerarRelatorioFuncionario();
            ?>
        </div>

        <div id="cliente" class="tab-content">
            <?php
                $relatorio = new Relatorio();
                echo $relatorio->gerarRelatorioControle();
            ?>
        </div>

        <div id="mensalista" class="tab-content">
            <?php
                $relatorio = new Relatorio();
                echo $relatorio->gerarRelatorioMensalista();
            ?>
        </div>
    </main>

    <footer>
        <p>Elarssen Park. Todos os direitos reservados<sup>&#174;</sup></p>
    </footer>

    <script>
        function showTab(tabName) {
            var contents = document.querySelectorAll('.tab-content');
            contents.forEach(content => {
                content.style.display = 'none';
            });

            var tab = document.getElementById(tabName);
            if (tab) {
                tab.style.display = 'block';
            }
        }

        document.addEventListener('DOMContentLoaded', function() {
            showTab('funcionario');
        });
    </script>
</body>
</html>
