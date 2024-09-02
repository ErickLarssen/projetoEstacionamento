<?php
    namespace Projeto\ProjetoEstacionamento\PHP;
    require_once('Mensalista.php');
    use Projeto\ProjetoEstacionamento\PHP\MensalistaController;
    use Projeto\ProjetoEstacionamento\PHP\Mensalista;
?>

<!DOCTYPE html>
    <html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="https://use.typekit.net/gvp4xoa.css">
        
        <style>
            body {
                margin: 0;
                padding: 0;
                font-family: "magistral", sans-serif;
                display: flex;
                flex-direction: column;
                min-height: 100vh;
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
                flex: 1;
                display: flex;
                flex-direction: column;
                align-items: center;
                justify-content: center;
                padding: 20px;
                margin-top: 15vh; /* Ajusta o topo para compensar o header fixo */
                margin-bottom: 15vh;
            }

            h1 {
                font-weight: 400;
                text-align: center;
                margin-top: 20px;
                margin-bottom: 20px;
            }

            .preenchimento {
                max-width: 500px;
                width: 100%;
                padding: 20px;
                border: 1px solid #ccc;
                border-radius: 8px;
                background-color: #f9f9f9;
            }

            .preenchimento label {
                display: block;
                margin-bottom: 5px;
            }

            .preenchimento input {
                width: calc(100% - 22px);
                padding: 10px;
                margin-bottom: 15px;
                border: 1px solid #ddd;
                border-radius: 4px;
            }

            button {
                display: block;
                width: 100%;
                padding: 10px;
                background-color: #1e2e52;
                color: white;
                border: none;
                border-radius: 4px;
                cursor: pointer;
            }

            button:hover {
                background-color: green;
            }

            footer {
                display: flex;
                justify-content: center;
                align-items: center;
                padding: 20px;
                background: linear-gradient(to right, #1e2e52, #d3283b, #1e2e52);
                box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.5);
                color: white;
                position: fixed;
                bottom: 0;
                left: 0;
                right: 0;
                height: 5vh;
            }
        </style>
    </head>
    <body>
        <header>
            <img src="imagens/logo_estacionamento.png" class="logo_img" width="350px" alt="logo da Elarssen estacionamento">
        </header>

        <main>
            <h1>CADASTRO DE MENSALISTAS</h1>
            <div class="preenchimento">
                <form method="POST">
                    <label for="nome">Nome</label>
                    <input type="text" id="nome" name="nome"/><br>

                    <label for="telefone">Telefone</label>
                    <input type="number" id="telefone" name="telefone"/><br>

                    <label for="endereco">Endereço</label>
                    <input type="text" id="endereco" name="endereco"/><br>

                    <label for="carro">Carro</label>
                    <input type="text" id="carro" name="carro"/><br>

                    <label for="placa">Placa do Carro</label>
                    <input type="text" id="placa" name="placa"/><br>

                    <label for="cor">Cor do Carro</label>
                    <input type="text" id="cor" name="cor"/><br>

                    <label for="dataPag">Data de Pagamento</label>
                    <input type="number" id="dataPag" name="dataPag"/><br>

                    <label for="valorMensal">Valor Mensal</label>
                    <input type="number" id="valorMensal" name="valorMensal"/><br>

                    <button type="submit">Cadastrar 
                        <?php
                            
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
                </form>
            </div>

        </main>
            
        <footer>
            <p>Elarssen Park. Todos os direitos reservados<sup>&#174;</sup></p>
        </footer>
    </body>
</html>
