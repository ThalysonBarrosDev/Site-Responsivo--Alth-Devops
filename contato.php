<?php

if(isset($_POST['nome']) && !empty($_POST['nome'])) {

$nome = ($_POST['nome']);
$telefone = ($_POST['telefone']);
$appdesign = ($_POST['appdesign']);
$graphicdesign = ($_POST['graphicdesign']);
$uxdesign = ($_POST['uxdesign']);
$webdesign = ($_POST['webdesign']);
$marketing = ($_POST['marketing']);

$ip = $_SERVER["REMOTE_ADDR"];
date_default_timezone_set('America/Sao_Paulo');
$hora = date("Y-m-d  #  H:i:s");

$to = "contato@althdevops.com.br";
$subject = "Contato de Cliente -->";
$body = "Nome do Cliente: ".$nome. "\r\n".
        "\r\n".
        "Telefone do Cliente: ".$telefone. "\r\n". 
        "\r\n". 
        "O que o Cliente deseja: ". "\r\n".
        "\r\n".
        "Criação de App: ".$appdesign. "\r\n".
        "Design Gráfico: ".$graphicdesign. "\r\n".
        "Criação de Site: ".$uxdesign. "\r\n". 
        "Consultoria: ".$webdesign. "\r\n". 
        "Marketing: ".$marketing. "\r\n". 
        "\r\n".
        "Hora: ".$hora. "\r\n". 
        "Ip: ".$ip;
        $header = "From:contatocliente@althdevops.com.br"."\r\n".
        "X-Mailer:PHP/".phpversion();

if(mail($to,$subject,$body,$header)) {

  echo("");

} else{

  echo("");
}

}

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
  <title> Alth Devops</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="description" content="HTML5 website template">
  <meta name="keywords" content="global, template, html, sass, jquery">
  <meta name="author" content="Bucky Maler">
  <meta http-equiv="refresh" content="5;https://www.althdevops.com.br/"></meta>
  <link rel="stylesheet" href="assets/css/main.css">
</head>
<body>
<div class="perspective effect-rotate-left">
  <div class="container"><div class="outer-nav--return"></div>
    <div id="viewport" class="l-viewport">
      <div class="l-wrapper">
        <header class="header">
          <a class="header--logo" href="#0">
            <img src="assets/img/logo.png" alt="AlTh Devops">
            <p>ALTH DEVOPS</p>
          </a>
          <button class="header--cta cta">Contrate</button>
          <div class="header--nav-toggle">
            <span></span>
          </div>
        </header>
<p>Contato enviado com sucesso. Aguarde o nosso retorno.</p>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="assets/js/vendor/jquery-2.2.4.min.js"><\/script>')</script>
<script src="assets/js/functions-min.js"></script>
</body>
</html>
