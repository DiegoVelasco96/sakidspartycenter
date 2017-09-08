<?php
    
    if(isset($_POST['date']) && !empty($_POST['date']) && 
    isset($_POST['mensaje']) && !empty($_POST['mensaje'])){
    
    $destino = "diegovelasco01@hotmail.es";
    $desde = "From: ". "Kids party center";
    $asunto = "Event reservation";
    $mensajeAux = $_POST['mensaje'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];

    $mensaje = $mensajeAux."\n Name: ".$name."\n Email: ".$email."\n Phone: ".$phone;

    mail($destino, $asunto, $mensaje, $desde);

        echo "1";
    }else{
        echo "Please enter the reservation information...";
    }
?>