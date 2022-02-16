<?php
    include_once("conexao.php");
    $nome = filter_input(INPUT_POST,'name',FILTER_SANITIZE_STRING);
    $nasc = filter_input(INPUT_POST,'data',FILTER_SANITIZE_STRING);
    $fone = filter_input(INPUT_POST,'fone',FILTER_SANITIZE_STRING);
    $rua = filter_input(INPUT_POST,'rua',FILTER_SANITIZE_STRING);
    $bairro = filter_input(INPUT_POST,'bairro',FILTER_SANITIZE_STRING);
    $cidade = filter_input(INPUT_POST,'city',FILTER_SANITIZE_STRING);
    $numero = filter_input(INPUT_POST,'num',FILTER_SANITIZE_NUMBER_INT);
    $estado = filter_input(INPUT_POST,'estado',FILTER_SANITIZE_STRING);




    $cor = filter_input(INPUT_POST,'cor',FILTER_SANITIZE_STRING);
    
    switch($cor)
{
    case "vermelho" :
        $cod = 0;
    break;
    case "azul" :
       $cod = 1;
    break;
    case "verde" :
        $cod = 2;
    break;
    case "amarelo" :
        $cod = 3;
    break;
    case "rosa" :
        $cod = 4;
    break;
    case "laranja" :
        $cod = 5;
    break;
}



$result = "INSERT INTO primo (nome,dt_Nasc,Telefone,Rua,Bairro,Cidade,Numero,Estado,cod_circulo) VALUES('$nome','$nasc','$fone','$rua','$bairro','$cidade','$numero','$estado','$cod')";

$result_final = mysqli_query($conn,$result);