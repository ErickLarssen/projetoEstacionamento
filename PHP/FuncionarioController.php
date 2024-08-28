<?php
    namespace Projeto\ProjetoEstacionamento\PHP;
    require_once('Funcionario.php');
    use Projeto\ProjetoEstacionamento\PHP\FuncionarioController;
    use Projeto\ProjetoEstacionamento\PHP\Funcionario;
?>

<Doctype HTML>
<HTML lang="PT-BR">
    <head>
        <meta charset="UTF-8">
    </head>
    <body>
        <form method="POST">
            <label>Código de Funcionário</label>
            <input type="number" id="codigo" name="codigo"/><br><br>

            <label>CPF</label>
            <input type="number" id="cpf" name="cpf"/><br><br>

            <label>Nome</label>
            <input type="text" id="nome" name="nome"/><br><br>

            <label>Telefone</label>
            <input type="number" id="telefone" name="telefone"/><br><br>

            <label>Endereço</label>
            <input type="text" id="endereco" name="endereco"/><br><br>

            <label>Cargo</label>
            <input type="text" id="cargo" name="cargo"/><br><br>

            <label>Salário</label>
            <input type="number" id="salario" name="salario"/><br><br>

            <label>Setor</label>
            <input type="text" id="setor" name="setor"/><br><br>

            <button>Cadastrar
                <?php
                    session_start();
                    try{
                        $_SESSION['codigo'] = $_POST['codigo'];
                        $_SESSION['cpf'] = $_POST['cpf'];
                        $_SESSION['nome'] = $_POST['nome'];
                        $_SESSION['telefone'] = $_POST['telefone'];
                        $_SESSION['endereco'] = $_POST['endereco'];
                        $_SESSION['cargo'] = $_POST['cargo'];
                        $_SESSION['salario'] = $_POST['salario'];
                        $_SESSION['setor'] = $_POST['setor'];
                    }catch(Exception $erro){
                        echo $erro;
                    }//Fim do 'try_catch
                ?>
            </button><br><br>
    </body>
</html>