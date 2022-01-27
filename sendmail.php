<?php 
try {
  if (isset($_POST['email']))
  {
    $email_to = "servicemanav@gmail.com";
    $name = filter_input(INPUT_POST, "nome");
    $email = filter_input(INPUT_POST, "email");
    $phone = filter_input(INPUT_POST, "telefono");
    $message = filter_input(INPUT_POST, "messaggio");

    $spunta_marketing = "\nL'utente NON ha accettato l'utilizzo dei suoi dati personali per scopi pubblicitari e di marketing.";
    if (isset($_POST['spunta_marketing'])) $spunta_marketing = "\nL'utente ha accettato l'utilizzo dei suoi dati personali per scopi pubblicitari e di marketing.";
              
    // Create the email and send the message        
    $email_subject = "servicemanav.it - Nuovo contatto da $name";
    $email_body = "Nuovo contatto ricevuto:";
    $email_body .= "\nNome: $name";
    $email_body .= "\ne-mail: $email";
    $email_body .= "\nTelefono: $phone";
    $email_body .= "\nMessaggio: $message";
    $email_body .= "\n$spunta_marketing";

    $headers = "From: noreply@servicemanav.it\r\n";
    $headers .= "Reply-To: $email\r\n";	
    //$headers .= "Cc: $cc\r\n";
    //$headers .= "Bcc: $bcc\r\n";
    
    $res = mail($email_to,$email_subject,$email_body,$headers);

    echo "<script>alert('Grazie per averci contattato');</script>";
    echo "<script type=\"text/javascript\">document.location.href ='index.php';</script>";
  }
} catch (Exception $ex) {
  header("Location: index.php");
}
?>