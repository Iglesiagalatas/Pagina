<?php
if(isset($_POST['submit'])){

      $nombre = htmlspecialchars($_POST['name']);
      $contenido = htmlspecialchars($_POST['message']);
      $subject = htmlspecialchars($_POST['subject']);
      $para = "paginagalatas@gmail.com";
      $de = htmlspecialchars($_POST['email']);
      $mensaje = "Mensaje de la Pagina web";
      $mensaje .= "\n";
      $mensaje .= "Nombre: ".$nombre."\n";
      $mensaje .= "Correo: ".$de."\n";
      $mensaje .= "Comentarios: ".$contenido."\n\n";
      $mensaje .= "----------------------\n";
      
      if(mail($para, $subject,$mensaje,"From: $de")){
          header("Location: index.html");
          exit();
      }
      
      // fin
  
  } else {
  
      echo "No se ha enviado ningún correo";
  
  }
?>