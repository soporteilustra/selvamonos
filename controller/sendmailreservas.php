<?php
function sendEmail($variables, $values)
{

  $vars = explode(',',$variables);
  $vals = explode(',',$values);

  $email_to = "soporte@ilustraconsultores.com";
  $email_subject = "Registro desde Landing | Selvámonos ";

  $email_message = "<h2 style='font-family: sans-serif; text-transform: uppercase;'>Detalles del registro:</h2>";
  $email_message .= "<div style='width: 60%; background: #f5f5f5; padding: 1em;'>";

  for ($i=0; $i < count($vars); $i++) {
    $email_message.= "<h3 style='font-size: 1em;font-family: arial; font-weight: 200; text-transform: uppercase; background: #fff; color: #004F99; border-bottom: 2px solid #004F99; padding: .5em 1em; margin: 0em;'>".$vars[$i]."</h3>";
    $email_message.= "<h3 style='font-family: arial; font-weight: 300; color: #424242; margin: 0em; padding: .5em 1em;'>".substr($vals[$i],1,-1)."</h3>";
  }
  $email_message .= "</div>";

  // Ahora se envía el e-mail usando la función mail() de PHP
  $headers = "MIME-Version: 1.0\r\n";
  $headers .= "Content-type: text/html; charset=utf-8\r\n";
  //dirección del remitente
  $headers .= "From: Registro | Landing Selvámonos < noreply@haval.com.pe > \r\n";
  //Enviamos el mensaje a tu_dirección_email
  //$bool = mail($email_to,$email_subject,$email_message,$headers);
  $bool = @mail($email_to, $email_subject, $email_message, $headers);

  return $bool;
}


?>
