<?php
include('conexao.php');
if (isset($_POST['nome']) || isset($_POST['sobrenome']) || isset($_POST['email']) || isset($_POST['senha'])) {

  if (strlen($_POST['nome']) == 0) {
    echo "<script>alert('Preencha seu nome!')</script>";
  } else if (strlen($_POST['sobrenome']) == 0) {
    echo "<script>alert('Preencha seu sobrenome!')</script>";
  } else if (strlen($_POST['email']) == 0) {
    echo "<script>alert('Preencha seu e-mail')</script>";
  } else if (strlen($_POST['senha']) == 0) {
    echo "<script>alert('Preencha sua senha!')</script>";
  } else if(strlen($_POST['senha']) != strlen($_POST['confirmasenha'])){
    echo "<script>alert('As senhas não conferem!')</script>";
  } else {
    $nome = $mysqli->real_escape_string($_POST['nome']);
    $sobrenome = $mysqli->real_escape_string($_POST['sobrenome']);
    $email = $mysqli->real_escape_string($_POST['email']);
    $senha = $mysqli->real_escape_string($_POST['senha']);
    $sql_code = "INSERT INTO `usuarios` (`id`, `nome`, `sobrenome`, `email`, `senha`) VALUES (NULL, '$nome', '$sobrenome', '$email', '$senha')";
    $sql_query = $mysqli->query($sql_code) or die("Falha na execução do código SQL: " . $mysqli->error);
    header("Location: ./login.php");
  }
}
?>


<!DOCTYPE html>
<html lang="PT-br">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-compatible" content="ie=edge" />
    <title>AnalyTrick</title>

    <!-- imports -->
    <link rel="stylesheet" type="text/css" href="..\css\Mains\cadastro_main.css" />
    <script src="https://kit.fontawesome.com/6ffe26f1f6.js" crossorigin="anonymous"></script>
</head>

<body>
    <main>
        <section class="container">
            <div>
                <div>
                    <div class="full_register">
                        <div class="register_area">
                            <a href="/index.html" class="alignitems"><img src="/img/Logo.png" alt="logo"
                                    id="logo_icon"></a>
                            <span class="texto"> Potencialize suas vendas, alcance o sucesso. Inscreva-se na
                                AnalyTrick.</span>

                            <form method="POST" action="" class="register_inputs">
                                <input type="text" id="nome" name="nome" placeholder="Nome" class="Inputbox" />
                                <input type="text" id="sobrenome" name="sobrenome" placeholder="Sobrenome"
                                    class="Inputbox" />
                                <input type="email" id="e-mail" name="email" placeholder="E-mail" class="Inputbox" />
                                <input type="password" id="senha" name="senha" placeholder="Senha" class="Inputbox" />
                                <input type="password" id="confirmpassword" placeholder="Confirme a senha" class="Inputbox" name="comfirmasenha"/>
                                <div class="margintop">
                                    <input type="checkbox" name="termos" onclick="submitButton.disabled=false" /> <label for="termos">Aceito os <a
                                            href="/termos.html" class="Destacado">Termos e condições</a></label>
                                </div>
                                <button type="submit" class="Button margintop marginbottom" disabled id="submitButton">Criar conta</button>
                            </form>
                            <div>Já tem conta? <a href="./login.php" class="Destacado">Iniciar sessão</a></div>
                        </div>
                    </div>
        </section>
    </main>
</body>

</html>