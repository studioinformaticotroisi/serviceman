 <?php 


  if (isset($_POST['email']))
{


   include_once 'phpMailer/class.phpmailer.php';
   function invia_mail($destinatario, $oggetto)
   {
     $spunta_marketing = "<br>L'utente <b>non</b> ha accettato l'utilizzo dei suoi dati personali per scopi pubblicitari e di marketing.";
     if (isset($_POST['spunta_marketing'])) $spunta_marketing = "<br>L'utente ha accettato l'utilizzo dei suoi dati personali per scopi pubblicitari e di marketing.";
 
     $mail = new PHPMailer();
     $body = '<html><head></head><body>';
     if (isset($_POST['nome']))    $body .= 'Nome: ' . $_POST['nome'];
     if (isset($_POST['data']))    $body .= '<br>Data Richiamo: ' . $_POST['data'];
     if (isset($_POST['telefono']))   $body .= '<br>Telefono: ' . $_POST['telefono'];
     if (isset($_POST['email']))      $body .= '<br>Email: ' . $_POST['email'];
     if (isset($_POST['zona']))    $body .= '<br>Zona: ' . $_POST['zona'];
     if (isset($_POST['messaggio']))
     {
      $testo = htmlentities($_POST['messaggio']);
      $testo = str_replace("\r\n","<br/>",$testo);
      $testo = str_replace("\n","<br/>",$testo);
      $body.='<br/>Messaggio:<br/><br/>'.$testo;
     }  
     $body .= '<br><br>Data: '. date("d/m/Y H:i:s") .' - Indirizzo IP:'. $_SERVER['REMOTE_ADDR'] . $spunta_marketing . '</body></html>';
     $body = preg_replace("[\\\]",'',$body);
     $mail->IsSMTP();  
     $mail->Host = "smtp.clion.email";
     $mail->From = "siti@clion.it";
     //$mail->From = "siti@clion.it";
     $mail->FromName = "lavorazionimeccanichecapeccio.it";
     $mail->Subject = $oggetto;
     $mail->AltBody = "Per vedere correttamente il messaggio ti preghiamo di utilizzare un visualizzatore HTML!";
     $mail->MsgHTML($body);
     $mail->AddAddress($destinatario, $destinatario);
 
     //echo '<pre>';
     //print_r($_FILES['files']);
     //echo '<pre>';
 
     //echo "<script>alert('".$_FILES['files'][0]['tmp_name']."');</script>";
 
     if (isset($_FILES['files']) && $_FILES['files']['error'] == UPLOAD_ERR_OK && is_uploaded_file($_FILES['files']['tmp_name']))
     {
       $mail->AddAttachment($_FILES['files']['tmp_name']);
     }
     // $mail->SMTPDebug = 2;
     $mail->Send();
 
     if (isset($_POST['redirect']))
     {
       echo "<script>alert('Grazie per averci contattato');</script>";
       echo "<script type=\"text/javascript\">document.location.href ='".$_POST['redirect'].".php?ok';</script>";
       //header('Location: '.$_POST['redirect'].'.php');
       //die();
     }
     else
     {
       echo "<script>alert('Grazie per averci contattato');</script>";
       echo "<script type=\"text/javascript\">document.location.href ='".$_SERVER['HTTP_REFERER']."';</script>";
       //header("Location:".$_SERVER['HTTP_REFERER']);
       //die();
     }
 
   }
 
   $invalid = "";
   if(isset($_POST['g-recaptcha-response']) && !empty($_POST['g-recaptcha-response']))
   {
     //your site secret key
     $secret = '6LfJf78UAAAAAI2yHyM-2jjeuOdM0H_7penk29AJ';
     //get verify response data
     $verifyResponse = file_get_contents('https://www.google.com/recaptcha/api/siteverify?secret='.$secret.'&response='.$_POST['g-recaptcha-response']);
     $responseData = json_decode($verifyResponse);
     if($responseData->success)
     {
 
       invia_mail("info@serviceman.it", "Richiesta di contatto da serviceman.it");
 
     }
     else
     {
       $invalid = "Captcha errato, riprovare.";
     }    
   }
   else
   {
     $invalid = "Per favore compila il box reCaptcha";
   }
   if (!empty($invalid))
   {
     if (isset($_POST['redirect']))
     {
       echo "<script>alert('".$invalid."');</script>";
       echo "<script type=\"text/javascript\">document.location.href ='".$_POST['redirect'].".php?ok';</script>";
       //header('Location: '.$_POST['redirect'].'.php');
       //die();
     }
     else
     {
       echo "<script>alert('".$invalid."');</script>";
       echo "<script type=\"text/javascript\">document.location.href ='index.php';</script>";
       //header("Location:".$_SERVER['HTTP_REFERER']);
       //die();
     }
   }


}




   ?>
