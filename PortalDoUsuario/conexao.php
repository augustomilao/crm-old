<?php

$servername = "localhost";
$database   = "portalusuario";
$username   = "root";
$password   = "";



// mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
$conn = new mysqli($servername, $username, $password, $database);
$conn->set_charset('utf8mb4');

// Check connection
if (!$conn) {
    die("Erro de Conexão: " . mysqli_connect_error());
} else {
}
// mysqli_close($conn);
// var_dump($conn);

function VerificaLogin()
{
    if (!$_SESSION) {
        header('Location: ./controle/login.php');
    }
}
function Login($conn, $usuario, $senha)
{
    $sql = "SELECT * FROM funcionario WHERE usuario = '$usuario' AND senha = '$senha' ";
    $resultado = $conn->query($sql)->fetch_assoc();
    return $resultado;
}

function TI()
{
    $ti = "./documentos/ti/";
    $resultado = glob($ti . '*');
    echo "<div class='menus'>";
    foreach ($resultado as $arquivo) {
        $nome = explode("/", $arquivo);
        echo "<div>";
        echo "<a href=" . $arquivo . " download><img src='./documentos/planilha.svg'></a>";
        echo "<p>" . $nome[3] . "</p>";
        echo "</div>";
    }
    echo "</div>";
}

function RH()
{
    $rh = "./documentos/rh/";
    $resultado = glob($rh . '*');
    echo "<div class='menus'>";
    foreach ($resultado as $arquivo) {
        $nome = explode("/", $arquivo);
        echo "<div>";
        echo "<a href=" . $arquivo . " download><img src='./documentos/planilha.svg'></a>";
        echo "<p>" . $nome[3] . "</p>";
        echo "</div>";
    }
    echo "</div>";
}

function Contabilidade()
{
    $contabilidade = "./documentos/contabilidade/";
    $resultado = glob($contabilidade . '*');
    echo "<div class='menus'>";
    foreach ($resultado as $arquivo) {
        $nome = explode("/", $arquivo);
        echo "<div>";
        echo "<a href=" . $arquivo . " download><img src='./documentos/planilha.svg'></a>";
        echo "<p>" . $nome[3] . "</p>";
        echo "</div>";
    }
    echo "</div>";
}


function Marketing()
{
    $marketing = "./documentos/marketing/";
    $resultado = glob($marketing . '*');
    echo "<div class='menus'>";
    foreach ($resultado as $arquivo) {
        $nome = explode("/", $arquivo);
        echo "<div>";
        echo "<a href=" . $arquivo . " download><img src='./documentos/planilha.svg'></a>";
        echo "<p>" . $nome[3] . "</p>";
        echo "</div>";
    }
    echo "</div>";
}

function Financeiro()
{
    $financeiro = "./documentos/financeiro/";
    $resultado = glob($financeiro . '*');
    echo "<div class='menus'>";
    foreach ($resultado as $arquivo) {
        $nome = explode("/", $arquivo);
        echo "<div>";
        echo "<a href=" . $arquivo . " download><img src='./documentos/planilha.svg'></a>";
        echo "<p>" . $nome[3] . "</p>";
        echo "</div>";
    }
    echo "</div>";
}


// TODO: LINK PARA PASTA DE USUÁRIO
function Perfil($a)
{
    $perfil = "./usuarios/".$a."/";
    $resultado = glob($perfil . '*');
    echo "<div class='menus'>";
    foreach ($resultado as $arquivo) {
        $nome = explode("/", $arquivo);
        echo "<div>";
        echo "<a href=" . $arquivo . " download><img src='./documentos/planilha.svg'></a>";
        echo "<p>" . $nome[3] . "</p>";
        echo "</div>";
    }
    echo "</div>";
}
