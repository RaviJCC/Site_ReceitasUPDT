<?php

session_start();

if ((!isset($_SESSION['email']) == true) and (!isset($_SESSION['senha']) == true)) {
    
    unset($_SESSION['email']);
    unset($_SESSION['senha']);
    header('Location: login.php');

}

    $logado = $_SESSION['email'];

    if(isset($_POST['submit'])) {

        include_once('config.php');
    
        $email = $_SESSION['email'];
        $senha = $_SESSION['senha'];

        $Text = $_POST['receita'];
        
        $targetDir = "uploads/";
        $imageFileName = basename($_FILES["imagem"]["name"]);
        $imageFilePath = $targetDir . $imageFileName;
        $videoFileName = basename($_FILES["video"]["name"]);
        $videoFilePath = $targetDir . $videoFileName;
    
        $result = mysqli_query($conexao, "INSERT INTO formulario(email, senha, receita, imagem, video) VALUES ('$email', '$senha', '$Text', '$imageFileName', '$videoFileName')");
    
    }
?>  

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/Style/EstiloPaginaReceitas.css">
    <link rel="stylesheet" href="/Style/EstiloReceita.css">
    <link rel="stylesheet" href="/Style/EstiloSite.css">
    <style>
      
      .navegarbar {
          background-color: #333; 
          overflow: hidden; 
      }

     
      .navegarbar a {
          float: left; 
          display: block; 
          color: #f2f2f2; 
          text-align: center; 
          padding: 14px 16px; 
          text-decoration: none; 
          font-size: 17px; 
      }

      .navegarbar a:hover {
          background-color: #ddd; 
          color: black; 
      }

      .alinhardiv {
            text-align: center;
            
        }

        .alinhardiv form {
            display: inline-block;
            text-align: left;
        }

        .alinhardiv label, .alinhardiv input[type="file"], .alinhardiv input[type="submit"] {
            display: block;
            margin-bottom: 10px;
        }

    </style>
    <title>Sistema</title>
</head>
<body>
<nav class="navegarbar">
        <a href="/php/sairsessao.php">Sair da sessão</a>
    </nav>
    <div class="alinhardiv">
    <?php
    echo "<h1>Bem-vindo <u>$logado</u></h1>";
    ?>
    <p>Divulgue suas receitas</p>
    <form action="/php/sistema.php" method="post" enctype="multipart/form-data">
        <label for="recipe">Receita:</label>
        <textarea id="receita" name="receita" rows="10" cols="50" placeholder="Descreva sua receita aqui..."></textarea><br><br>
        <label for="image">Envie uma imagem:</label>
        <input type="file" id="imagem" name="imagem" accept="imagem/*"><br><br>
        <label for="video">Envie um vídeo:</label>
        <input type="file" id="video" name="video" accept="video/*"><br><br>
        <input type="submit" name="submit" id="submit" value="Enviar Receita">
    </form>
    </div>
</body>
</html>