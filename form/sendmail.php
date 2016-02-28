<?

require_once("class.phpmailer.php");



// === CONFIGURAZIONE SERVER SMTP ===

$server_smtp = "smtp.ttake.it";

// ==================================

$destinatario = $_POST['destinatario'];
$destinatario_bcc = $_POST['destinatario_bcc'];
$mittente = $_POST['Email'];
$oggetto = $_POST['oggetto'];
$pagina_post_invio = $_POST['pagina_post_invio'];

// Compongo la mail

//Compongo il messaggio
while (list($key, $val) = each($_POST))
{
	//Se la prima lettera è MAIUSCOLA è un campo che inserisco nel messaggio!
	if (ereg('[A-Z]',substr($key,0,1))) 
	{

		// Se è il campo prodotto
		if($key == 'Prodotti'){

			$messaggio .= "<br><strong>".$key.":</strong> ";

			$c = 0;
			foreach ($val as $prodotto) {
				$c++;
				$messaggio .= $c == 1 ? "" : ", ";
				$messaggio .= $prodotto;
			}

		}else{

			$messaggio .= "<br><strong>".$key.":</strong> ".$val;

		}


	}
}

$messaggio = str_replace('\n', chr(10), stripslashes($_POST['messaggio_header'])).'<br>'.$messaggio.'<br>'.str_replace('\n', chr(10), stripslashes($_POST['messaggio_footer']));

$mail = new PHPMailer();
$mail->CharSet = 'UTF-8';

//$mail->IsSMTP(); // attiva l'invio tramiteSMTP
//$mail->Host     = $server_smtp;

$mail->From     = $mittente;
$mail->FromName = $mittente;
$mail->AddAddress($destinatario);
if ($destinatario_bcc) $mail->AddBCC($destinatario_bcc);
$mail->IsHTML(true);  
$mail->Subject  =  $oggetto;
$mail->Body     =  $messaggio;

if(!$mail->Send()){
	echo "Si è verificato un errore nell'invio della mail";
}else{
	echo "ok";
	//header ('Location: '.$pagina_post_invio);
}

?>