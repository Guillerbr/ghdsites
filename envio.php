<html>

<head>
	<title>Formulário de Envio de Contato.</title>

</head>



<body>

<?php


$name=$_POST ['Name'];
$email=$_POST ['Email'];
$phone=$_POST ['Phone'];
$message=$_POST ['Message'];

?>


<?php

$to = "EMAIL HERE"; //config email to send
$subject = "$email";
$message = "Nome: $name   E-mail: $email    Telefone:$phone    
 Mensagem:  $message";







$header = "MIME-VERSION: 1.0\n";
$header = "Content-Type: text/html; charset=iso-8859-1\n";
$header ="From: $email\n";

mail($to,$subject,$message,$header);
echo "Mensagem enviada com sucesso!
 Em Breve Responderemos para o Email!
  Obrigado!"

?>


<br>
<br>
<br>
<a href="index.html">VOLTAR</a>


</body>




</html>
