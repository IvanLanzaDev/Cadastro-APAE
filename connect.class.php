<?php

	$link = mysqli_connect("mysql.hostinger.com.br", "u640958987_site", "!ganhevoce@2018");
    if($link){
        mysqli_select_db($link,"u640958987_site");
    }else{
        echo "Erro ao Conectar com o Banco";    
    }
?>