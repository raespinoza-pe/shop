<?php

    
    $data = json_decode($_POST['array']);
    

    $header_list = '<ol class="list-group list-group-numbered">';
    $footer_list = '</ol>';
    $nombre_productos  = "";

    foreach ($data as $key =>$value){
    
        $monto_total = (int)$value->precio*(int)$value->cantidad;

        $nombre_productos =  $nombre_productos.'<li class="list-group-item">'.$value->nombre. ' ( '.$value->cantidad.' ) : Monto Total = '.$monto_total.' </li>';

    }
    
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $names = $_POST['names'];

    
    $destinatario = $email; 
    $asunto = "Orden de Pedido -  ".$names; 
    $cuerpo = ' 
    <html> 
    <head> 
    <title> Orden de Pedido del señor (a) '.$names.'</title> 
    </head> 
    <body> 
    <h1> Se adjunta los datos del pedido!</h1> 
    <p> '.$nombre_productos.'
    </p> 
    <h3>Datos del Comprador</h3>
    <p>Nombres compleots : '.$names.'</p>
    <p>Correo electronico : '.$email.'</p>
    <p>Telefono : '.$phone.'</p>
    </body> 
    </html> 
    '; 

    //para el envío en formato HTML 
    $headers = "MIME-Version: 1.0\r\n"; 
    $headers .= "Content-type: text/html; charset=iso-8859-1\r\n"; 

    //dirección del remitente 
    $headers .= "From: JRMYASOCIADOS - GeneralServices <informes@jmryasociados.com>\r\n"; 

  

    mail($destinatario,$asunto,$cuerpo,$headers)


?>