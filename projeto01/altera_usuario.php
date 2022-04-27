<?php
    include("conexao.php");
    $id_usuario = $_GET["id_usuario"];
    $sql = "SELECT * FROM usuario where id_usuario = ".$id_usuario;
    $result = mysqli_query($con, $sql);
    $row = mysqli_fetch_array($result);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemplo de Aula</title>
</head>
<body>
    <!-- LANA AKEMI IHARA - 3º INFO -->
    <!-- Ex: Criar um formulário chamado “cadastro_usuario.htm”, este formulário
    html deverá conter os seguintes campos e botão enviar:
    • Nome_usuario: tamanho 50;
    • Email_usuario: tamanho 50;
    • Fone_usuario: tamanho 30. -->
    
    <!-- título -->
    <h3>Alteração de Usuário - IFSP</h3>

    <!-- "action" -> para que página o botão "submit" deve lhe enviar após este processo -->
    <!-- "method" controla como as informações devem ser enviadas ao servidor -->
    <form action="cadastro_usuario.php" method="POST">

        <!-- Caixa de texto de uma linha (TEXT) -->
        <!-- NOME -->
        <div> 
            <label for="nome_usuario">Nome:</label>
            <input type="text" name="nome_usuario" value="<?php echo $row["nome_usuario"]?>" size="50">
        </div>

        <!-- E-MAIL -->
        <div>
            <label for="email_usuario">E-mail:</label>
            <input type="email" name="email_usuario" value="<?php echo $row["email_usuario"]?>" size="50">
        </div>

        <!-- TELEFONE -->
        <div>
            <label for="fone_usuario">Telefone:</label>
            <input type="text" name="fone_usuario" value="<?php echo $row["telefone_usuario"]?>" size="30">
        </div>

        <br>

        <button type="submit">Enviar</button>

    </form>

    <br>
    <p>Feito por Lana Akemi Ihara, 3º INFO.</p>

    <!-- http://localhost/prw/projeto01/cadastro_usuario.htm -->
    <!-- http://127.0.0.1/prw/projeto01/cadastro_usuario.htm -->
    
</body>
</html>