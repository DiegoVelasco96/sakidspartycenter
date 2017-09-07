<?php
    
    if(isset($_POST['asunto']) && !empty($_POST['asunto']) && 
    isset($_POST['mensaje']) && !empty($_POST['mensaje'])){
    
    $destino = "diegovelasco01@hotmail.es";
    $desde = "From: ". "Kids party center";
    $asunto = $_POST['asunto'];
    $mensajeAux = $_POST['mensaje'];
    $name = $_POST['name'];
    $email = $_POST['email'];

    $mensaje = $mensajeAux+"\n Name: "+$name+"\n Email: "+$email;

    mail($destino, $asunto, $mensaje, $desde);

        echo "1";
    }else{
        echo "Problemas al enviar...";
    }
?>