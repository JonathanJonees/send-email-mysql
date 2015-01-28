
<?php
$msg ="";
if ($_POST){
$conexao = mysql_connect ("localhost","user","pass") or die (mysql_error());
mysql_select_db ("database", $conexao)or die (mysql_error());

//command to database ok
$nome = $_POST["nome"];
$email = $_POST["email"];
$tel = $_POST["tel"];
$celular = $_POST["celular"];
$cidade = $_POST["cidade"];
$empresa = $_POST["empresa"];
$mensagem = $_POST["mensagem"];

$query = "INSERT INTO contato (nome, email, tel, celular, cidade, empresa, mensagem)
VALUES ('".$nome."', '".$email."', '".$tel."', '".$celular."', '".$cidade."','".$empresa."', '".$mensagem."')";

$q = mysql_query($query);
  if($q){
     $msg ="Contact ok";
} else{
     $msg ="There was an error Send contact";
}
}

//** only works with mail host :( **//
$to = "host@host.com.br"; 
$subject = "Recrutamento";
$nome = $_REQUEST['nome'];
$email = $_REQUEST['email'];
$tel = $_REQUEST['tel'];
$celular = $_REQUEST['celular'];
$cidade = $_REQUEST['cidade'];
$empresa = $_REQUEST['empresa'];
$mensagem = $_REQUEST['mensagem'];

         $corpo .= "<strong>Nome:</strong> $nome";
		     $corpo .= "<br><strong>E-mail:</strong> $email ";
	       $corpo .= "<br><strong>Telefone:</strong> $tel ";
			   $corpo .= "<br><strong>Celular:</strong> $celular ";
			   $corpo .= "<br><strong>Cidade:</strong> $cidade";
		     $corpo .= "<br><strong>Empresa:</strong> $empresa ";
	       $corpo .= "<br><strong>Mensagem:</strong> $mensagem ";
			 
			 			 $header ="MIME-Version: 1.0\n";
             $header .="From: $email Reply-to: $email\n";
             $header .="Content-type: text/html; charset=iso-8859-1\n";	 	

mail($to,$subject,$corpo,$header);	
 	 
?>

