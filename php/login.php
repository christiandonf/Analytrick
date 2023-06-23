<?php
include('conexao.php');
include('sessionbypass.php');
if (isset($_POST['email']) || isset($_POST['senha'])) {

  if (strlen($_POST['email']) == 0) {
    echo "Preencha seu e-mail";
  } else if (strlen($_POST['senha']) == 0) {
    echo "Preencha sua senha";
  } else {
    $email = $mysqli->real_escape_string($_POST['email']);
    $senha = $mysqli->real_escape_string($_POST['senha']);
    $sql_code = "SELECT * FROM usuarios WHERE email = '$email' AND senha = '$senha'";
    $sql_query = $mysqli->query($sql_code) or die("Falha na execução do código SQL: " . $mysqli->error);
    $quantidade = $sql_query->num_rows;
    if ($quantidade == 1) {
      $usuario = $sql_query->fetch_assoc();
      if (!isset($_SESSION)) {
        session_start();
      }
      $_SESSION['id'] = $usuario['id'];
      $_SESSION['nome'] = $usuario['nome'];
      echo "Logado com suceso!";
    } else {
      echo "Falha ao Logar! E-mail ou Senha incorretos";
    }
  }
  header("Location: ./dashboard.php");
}
?>


<!DOCTYPE html>
<html lang="PT-br">

<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-compatible" content="ie=edge" />
  <title>AnalyTrick</title>

  <!-- imports -->
  <link rel="stylesheet" type="text/css" href="..\css/Mains/login_main.css" />
  <script src="https://kit.fontawesome.com/6ffe26f1f6.js" crossorigin="anonymous"></script>
</head>

<body>
    <!-- main -->

    <main>
        <section>
            <div class="login_area">
                <a href="/index.html"><img src="/img/Logo.png" alt="logo" id="logo_icon" /></a>
                <div>Brasil</div>
                <form method="POST" action="" class="register_inputs">
                    <input type="email" id="email" name="email" placeholder="E-mail" class="Inputbox" />
                    <input type="password" id="senha" name="senha" placeholder="Senha" class="Inputbox" />
                    <button type="submit" value="Enviar" class="Button margintop marginbottom">Acessar</button>
                </form>
                <div class="marginbottom gap">
                    <a href="/dummy.html" class="Destacado">Esqueci minha senha</a>
                    <h>/</h>
                    <a href="/dummy.html" class="Destacado">Esqueci meu e-mail</a>
                </div>

                <div class="marginbottom">Não tem conta? <a href="./cadastro.php" class=" Destacado">Cadastre-se
                        agora</a></div>

                <div class="marginbottom">
                    O acesso à plataforma implica em aceitar os nossos
                    <a href="/termos.html " class=" Destacado">Termos e condições</a> e
                    <a href="/privacidade.html" class=" Destacado">Politica de privacidade</a>.
                </div>
            </div>
        </section>
    </main>
</body>

</html>