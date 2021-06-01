<?php
include_once('conexao.php');
$data= $_POST['data'];
$descricao=$_POST['descricao'];

$result_msg_vacina="insert into vacinas(data, descricao) VALUES('$data', '$descricao')";

$resultado_msg_vacina= mysqli_query( $conn, $result_msg_vacina);
$a=1;
$b=1;
if($a=$b){
    header('location:vacina.php');
    exit;
}
?>