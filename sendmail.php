
<?php
$msg ="";
if ($_POST){
$conexao = mysql_connect ("localhost","user","pass") or die (mysql_error());
mysql_select_db ("database", $conexao)or die (mysql_error());


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

?>
