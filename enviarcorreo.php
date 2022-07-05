<?php
  session_start( );
  if( md5( $_POST[ 'code' ] ) != $_SESSION[ 'key' ] ) {
         echo "You ented the wrong code, please try again!";
  } else {
    if($_POST["botfail"] == ""){
      if (isset($_POST['correoclinica'])) {
        $nombre = $_POST['nombre'];
        $email = $_POST['email'];
        $telefono = $_POST['telefono'];
        $mensaje = $_POST['mensaje'];
        $correoclinica = $_POST['correoclinica'];
        $httphost = $_SERVER['HTTP_HOST'];
        $ip = $_SERVER['REMOTE_ADDR'];
        $ipsh = $_SERVER['HTTP_CLIENT_IP'];
        $iprox = $_SERVER['HTTP_X_FORWARDED_FOR'];
        $cuerpomensaje = "Name: ".$nombre."\n"."E-Mail: ".$email."\n"."Phone number: ".$telefono."\n"."Message: "."\n".$mensaje."\n\n\n\n\n\n"."Enviado desde: $httphost \n $ip \n ipshare $ipsh \n prxy $iprox";
        mail("ventas@smilefactory.com.gt, h.suchi@traffic360.net, $correoclinica", "Contacto Smilefactory",$cuerpomensaje, 'From:'.$email);
        echo "<script> window.location='contacto.php', 5000;</script>";
      }else {
        $nombre = $_POST['nombre'];
        $email = $_POST['email'];
        $telefono = $_POST['telefono'];
        $mensaje = $_POST['mensaje'];
        $httphost = $_SERVER['HTTP_HOST'];
        $ip = $_SERVER['REMOTE_ADDR'];
        $ipsh = $_SERVER['HTTP_CLIENT_IP'];
        $iprox = $_SERVER['HTTP_X_FORWARDED_FOR'];
        $cuerpomensaje = "Name: ".$nombre."\n"."E-Mail: ".$email."\n"."Phone number: ".$telefono."\n"."Message: "."\n".$mensaje."\n\n\n\n\n\n"."Enviado desde: $httphost \n $ip \n ipshare $ipsh \n prxy $iprox";;
        mail("ventas@smilefactory.com.gt, h.suchi@traffic360.net", "Contacto Smilefactory",$cuerpomensaje, 'From:'.$email);
        echo "<script> window.location='index.php', 5000;</script>";
      }
    }else{
      echo "<script> window.location='index.php?bot=true', 5000;</script>";
    }
  }
?>
