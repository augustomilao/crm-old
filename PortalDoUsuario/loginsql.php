<?php
session_start();
include './conexao.php';
$usuario = $_POST['usuario'];
$senha = $_POST['senha'];

$resultado = Login($conn, $usuario, $senha);
var_dump($resultado);
if(!$resultado){
    header('Location: ./login.php');
}

$_SESSION['nome'] = $resultado['nome'];
$_SESSION['usuario'] = $resultado['usuario'];
$_SESSION['setor'] = $resultado['setor'];
$_SESSION['hashunico'] = $resultado['hashunico'];

header('Location: ./index.php');

?>