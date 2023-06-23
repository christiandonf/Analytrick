<?php
include('session.php');
include('conexao.php');
$sql_code = "SELECT * FROM vendas";
$sql_query = $mysqli->query($sql_code) or die($mysqli->error);
$dado = mysqli_fetch_assoc($sql_query);
if (isset($_POST['logout'])) {
  session_destroy();
  header("Location: /index.html");
}
?>

<!DOCTYPE html>
<html lang="PT-br">

<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-compatible" content="ie=edge" />
  <title>AnalyTrick</title>

  <!-- imports -->
  <script src="./js/header_and_footer.js"></script>
  <link rel="stylesheet" type="text/css" href="..\css\Mains\dashboard_main.css" />
  <script src="https://kit.fontawesome.com/6ffe26f1f6.js" crossorigin="anonymous"></script>
</head>
<body>

    <header>
        <form method="POST" action=""><input type="submit" name="logout" value="Logout" class="logout ttexto">
        </form>

        <nav class="Menu_options">
            <select name="Linguas" class="Idioma_Select">
                <option value="Portugues">PT-BR</option>
                <option value="Ingles">EN</option>
            </select>
            <ul class="Menu_options_list">
                <li><button class="icons" id="notifications"><i class="fa-solid fa-bell"></button></i></li>
                <li><button class="icons" id="reminders"><i class="fa-solid fa-calendar-days"></button></i></li>
                <li><button class="icons" id="chat"><i class="fa-sharp fa-solid fa-comment"></button></i></li>
            </ul>
            <img src="./img/fotoperfil.png" alt="perfilfoto" class="perfil_foto">
        </nav>
    </header>

    
    <main>

        <section>
            <div class="ecommerce">
                <h2 class="titulo Destacado">E-Commerce Dashboard</h2>
                <p class="texto">Home - Dashboard</p>
            </div>

            <div class="dash_main">
                <div>

                    <div class="ganhos box">
                        <div class="moneyganho">
                            <h3 class="titulo Destacado">$
                                <?php echo $dado["ganhos"]; ?>
                            </h3>
                            <p class="texto">Ganhos Atuais</p>
                        </div>
                        <div class="graficomoney">

                            <div class="grafico"></div>

                            <ul>
                                <li class="ttexto"><span class="c1"><i class="fa-solid fa-circle"></i></span> Sapatos
                                    <span class="Destacado marginleft">$
                                        <?php echo $dado["sapatos"]; ?>
                                    </span>

                                </li>
                                <li class="ttexto"><span class="c2"><i class="fa-solid fa-circle"></i></span>Jogos <span
                                        class="Destacado marginleft">$
                                        <?php echo $dado["jogos"]; ?>
                                    </span>
                                </li>
                                <li class="ttexto"><span class="c3"><i class="fa-solid fa-circle"></i></span>Outros
                                    <span class="Destacado marginleft">$
                                        <?php echo $dado["outros"]; ?>
                                    </span>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="box">
                        <div class="pedidos">
                            <h3 class="titulo Destacado">
                                <?php echo $dado["emitidosmes"]; ?>
                            </h3>
                            <p class="texto">Pedidos nesse Mês</p>
                        </div>
                        <div></div>
                    </div>

                </div>


                <div>

                    <div class="box">
                        <div class="mediavendasbox">

                            <div class="mediavendas">
                                <h3 class="Destacado titulo">
                                    <?php echo $dado["vendasdias"]; ?>
                                </h3>
                                <p class="texto">Média de vendas diárias</p>
                            </div>

                            <div class="graficovendas">
                                <div class="graficobarras">
                                    <div class="barra barra1"></div>
                                    <div class="barra barra2"></div>
                                    <div class="barra barra3"></div>
                                </div>
                                <div class="categoria_media">
                                    <ul>
                                        <li class="ba1">
                                            <?php echo $dado["sapatosdia"]; ?>
                                        </li>
                                        <li class="ba2">
                                            <?php echo $dado["jogosdia"]; ?>
                                        </li>
                                        <li class="ba3">
                                            <?php echo $dado["outrosdia"]; ?>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="box">
                        <div class=" clientes">
                            <h3 class="titulo Destacado">
                                <?php echo $dado["novosclientes"]; ?>
                            </h3>
                            <p class="texto">Novos Clientes esse mês</p>
                        </div>
                        <div></div>
                    </div>
                </div>


                <div class="box">
                    <div class="ano_vendas_box">
                        <div>
                            <h3 class="titulo Destacado">Vendas nesse Ano</h3>
                            <p class="texto">De usuários de todas as plataformas</p>
                        </div>
                        <div>
                            <h3 class="titulo Destacado margintop">$
                                <?php echo $dado["vendasAno"]; ?>
                            </h3>
                        </div>
                        <div class="graficove">
                            <div class="meses">
                                <p>
                                    <?php echo $dado["janeiro"]; ?>
                                </p>
                                <p>
                                    <?php echo $dado["feveiro"]; ?>
                                </p>
                                <p>
                                    <?php echo $dado["marco"]; ?>
                                </p>
                                <p>
                                    <?php echo $dado["abril"]; ?>
                                </p>
                                <p>
                                    <?php echo $dado["maio"]; ?>
                                </p>
                                <p>
                                    <?php echo $dado["junho"]; ?>
                                </p>
                                <p>
                                    <?php echo $dado["julho"]; ?>
                                </p>
                                <p>
                                    <?php echo $dado["agosto"]; ?>
                                </p>
                                <p>
                                    <?php echo $dado["setembro"]; ?>
                                </p>
                            </div>

                            <div class="graficobarrashori">
                                <div class="barrave corbarra"></div>
                                <div class="barrave corbarra"></div>
                                <div class="barrave corbarra"></div>
                                <div class="barrave corbarra"></div>
                                <div class="barrave corbarra"></div>
                                <div class="barrave corbarra"></div>
                                <div class="barrave corbarra"></div>
                                <div class="barrave corbarra"></div>
                                <div class="barrave corbarra"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
</body>

</html>