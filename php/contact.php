<?php
if($_POST["btn"]=="1"){
  $encabezados = "From: ".$_POST["email"]."\nReply-To: ".$_POST["email"]."\n";
   mail("aetiru@gmail.com", $_POST["options"], "Nombre: ". $_POST["f_name"]."\n"."\n". "Mensaje: ".$_POST["message"],$encabezados);

}

//PQR Correo
if( $_POST['send'] == "1" ){
  $encabezados_pqr = "From: ".$_POST["Email"] . "\nReply-To: " . $_POST['Email'] . "\n";
    mail("aetiru@gmail.com", $_POST['asunto'], "Nombre: " . $_POST['name_last_name'],
                           "Numero de Identifiacion: " . $_POST['CC']."\n"."\n". 
                           "Departamento: " . $_POST['Departamento']."\n"."\n". 
                           "Ciudad: " . $_POST['ciudad'] . "Tipo de Remitente: " . $_POST['remitente'] );
}
?>