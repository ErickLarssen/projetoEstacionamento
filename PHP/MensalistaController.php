<?php
    namespace Projeto\ProjetoEstacionamento\PHP;
    require_once('Mensalista.php');
    use Projeto\ProjetoEstacionamento\PHP\MensalistaController;
    use Projeto\ProjetoEstacionamento\PHP\Mensalista;
?>

<Doctype HTML>
    <HTML lang="PT-BR">
        <head>
            <meta charset="UTF-8">
        </head>
        <body>
            <form method="POST">
                <label>Nome</label>
                <input type="text" id="nome" name="nome"/><br><br>

                <label>Telefone</label>
                <input type="number" id="telefone" name="telefone"/><br><br>

                <label>Endereço</label>
                <input type="text" id="endereco" name="endereco"/><br><br>

                <label>Carro</label>
                <input type="text" id="carro" name="carro"/><br><br>

                <label>Placa do Carro</label>
                <input type="text" id="placa" name="placa"/><br><br>

                <label>Cor do Carro</label>
                <input type="text" id="cor" name="cor"/><br><br>

                <label>Data de Pagamento</label>
                <input type="number" id="dataPag" name="dataPag"/><br><br>

                <label>Valor Mensal</label>
                <input type="number" id="valorMensal" name="valorMensal"/><br><br>

                <button>Cadastrar
                    <?php
                        session_start();
                        try{
                            $_SESSION['nome'] = $_POST['nome'];
                            $_SESSION['telefone'] = $_POST['telefone'];
                            $_SESSION['endereco'] = $_POST['endereco'];
                            $_SESSION['carro'] = $_POST['carro'];
                            $_SESSION['placa'] = $_POST['placa'];
                            $_SESSION['cor'] = $_POST['cor'];
                            $_SESSION['dataPag'] = $_POST['dataPag'];
                            $_SESSION['valorMensal'] = $_POST['valorMensal'];
                        }catch(Exception $erro){
                            echo $erro;
                        }//Fim do 'try_catch
                    ?>
                </button>
        </body>
