<?php
    namespace Projeto\ProjetoEstacionamento\PHP;
    require_once('Controle.php');
    use Projeto\ProjetoEstacionamento\PHP\ControleController;
    use Projeto\ProjetoEstacionamento\PHP\Controle;
?>

<Doctype HTML>
<HTML lang="PT-BR">
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="css/estilo.css">
    </head>
    <body>
        <header>
            <img src="imagens/logo_estacionamento.png" class="logo_img" width="350px" alt="logo da Elarssen estacionamento">
        </header>
        <form method="POST">
            <label>Informe o código aleatório</label>
            <input type="text" id="codigo" name="codigo"/><br><br>

            <label>Informe a data</label>
            <input type="number" id="data" name="data"/><br><br>

            <label>Informe o horário de entrada</label>
            <input type="number" id="hrEntrada" name="hrEntrada"/><br><br>

            <label>Informe o horário de saída</label>
            <input type="number" id="hrSaida" name="hrSaida"/><br><br>

            <label>Informe o modelo do veículo</label>
            <input type="text" id="veiculo" name="veiculo"/><br><br>

            <label>Informe o valor total a ser pago</label>
            <input type="number" id="valor" name="valor"/><br><br>

            <button>Cadastrar
                <?php
                    session_start();
                    try{
                        $_SESSION['codigo'] = $_POST['codigo'];
                        $_SESSION['data'] = $_POST['data'];
                        $_SESSION['hrEntrada'] = $_POST['hrEntrada'];
                        $_SESSION['hrSaida'] = $_POST['hrSaida'];
                        $_SESSION['veiculo'] = $_POST['veiculo'];
                        $_SESSION['valor'] = $_POST['valor'];
                    }catch(Exception $erro){
                        echo $erro;
                    }//Fim do 'try_catch
                ?>
            </button><br><br>
    </body>
</html>