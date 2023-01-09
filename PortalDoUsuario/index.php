<?php
session_start();
// var_dump($_SESSION);
include_once './conexao.php';
VerificaLogin();

?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Área do Usuário</title>

    <!-- Favicon -->
    <link rel="icon" href="favicon.ico" type="image/x-icon" />
    <!-- Fonte -->
    <link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet'>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" />
    <!-- Bootstrap Font Icon CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" />
    <!-- CSS Próprio -->
    <link rel="stylesheet" href="./estilo.css">
    <!-- JS -->
    <script src="./script.js"></script>
</head>

<body>
    <div class="desktop">
        <div class="header">
            <div class="row">
            <div class="col">
                <h6 class="ola">Olá, <?php echo $_SESSION['nome'] ?></h6>
            </div>
            <div class="col" style="color: white; text-align:right">
                <a href="./logout.php"><h6 class="ola pointer" style="margin-right: 20px;">Sair</h6></a>
            </div>
            <div>
        </div>

        <div class="gridmenu">
            <div class="centro tudo menuside" style="background-color:#888; ">
                <br>
                <div class="opcao" onclick="Mostra('contabilidade')">
                    <p class="menutitulo">Contabilidade
                    <p>
                </div>
                <div class="opcao" onclick="Mostra('rh')">
                    <p class="menutitulo">Recursos Humanos
                    <p>
                </div>
                <div class="opcao" onclick="Mostra('marketing')">
                    <p class="menutitulo">Marketing
                    <p>
                </div>
                <div class="opcao" onclick="Mostra('ti')">
                    <p class="menutitulo">TI
                    <p>
                </div>
                <div class="opcao" onclick="Mostra('financeiro')">
                    <p class="menutitulo">Financeiro
                    <p>
                </div>
                <br><br><br><br><br><br>
                <div class="opcao" onclick="Mostra('perfil')">
                    <p class="menutitulo">Perfil
                    <p>
                </div>
            </div>

            <div class="centro tudo area" style="background-color:white">
                <br>
                <div class="contabilidade" id="contabilidade" style="display: none;">
                    <h3>Documentação da Contabilidade</h3>
                    <hr>
                    <?php
                    Contabilidade();
                    ?>
                </div>

                <div class="rh" id="rh" style="display: none;">
                    <h3>Documentação do RH</h3>
                    <hr>
                    <?php
                    RH();
                    ?>
                </div>

                <div class="marketing" id="marketing" style="display: none;">
                    <h3>Documentação do Marketing</h3>
                    <hr>
                    <?php
                    Marketing();
                    ?>
                </div>

                <div class="ti" id="ti" style="display: none;">
                    <h3>Documentação da TI</h3>
                    <hr>
                    <?php
                    TI();
                    ?>
                </div>

                <div class="financeiro" id="financeiro" style="display: none;">
                    <h3>Documentação da Financeiro</h3>
                    <hr>
                    <?php
                    Financeiro();
                    ?>
                </div>

                <div class="perfil" id="perfil" style="display: none;">
                    <h3>Seus Documentos</h3>
                    <hr>
                    <?php
                    Perfil($_SESSION['hashunico']);
                    ?>
                </div>


            </div>
        </div>
    </div>

    <script>
        function Mostra(a) {
            var x = document.getElementById(a);
            if (x.style.display === 'block') {
                x.style.display = 'none';
            } else {
                x.style.display = 'block';
            }
        }
    </script>
</body>

</html>