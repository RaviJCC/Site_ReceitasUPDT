<?php

    if(isset($_POST['submit'])) {

        //print_r('nome: ' . $_POST['name']);
        //print_r('<br>');
        //print_r('email: ' . $_POST['email']);
        //print_r('<br>');

        include_once('config.php');

        $nome = $_POST['name'];
        $email = $_POST['email'];
        $senha = $_POST['senha'];

        $result = mysqli_query($conexao, "INSERT INTO formulario(nome, email, senha) VALUES ('$nome', '$email', '$senha')");

        header('Location: login.php');

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
    <title>Cadastro</title>
</head>
<body>
    <header class="cabecalho">
        <nav class="minicabecalho">
          <ul>
            <li><a name="inicio" class="miniminicabecalho" href="/Site.html">Sitereceitas</a></li>
            <li><a class="miniminicabecalho" href="#" onclick="toggleSubMenu()">Receitas</a>
              <ul class="submenu" id="submenuReceitas">
                <li><a href="/Paginas/receitascafe.html">Receitas de Café da Manhã</a></li>
                <li><a href="/Paginas/receitasalmoco.html">Receitas de Almoço</a></li>
                <li><a href="/Paginas/receitaslanche.html">Receitas de Lanche</a></li>
                <li><a href="/Paginas/receitasjanta.html">Receitas de Janta</a></li>
              </ul>
            </li>
            <li><a class="miniminicabecalho" href="/Paginas/Livro.html">Livro</a></li>
            <li><a class="miniminicabecalho" href="/Paginas/sobre.html">Sobre</a></li>
            <li><a class="miniminicabecalho" href="/Paginas/contato.html">Contato</a></li>
            <li><a href="/php/usuario.php">Usuário</a></li>
          </ul>
        </nav>
    </header>
    <main>
        <h1>Divulgue suas próprias receitas!:</h1>
        <div class="livro-container">
            <section class="Contatar">
              <img src="https://s2.glbimg.com/jpG3BXC2A4xmW6PX75Cwdw6C8Gs=/620x455/e.glbimg.com/og/ed/f/original/2020/06/29/10_receitas_sobras.jpg" alt="Receitas">
                <h2><a name="Contato">Preencha o campo:</a></h2> 
                <form action="/php/dados.php" method="POST">
                  <label for="name">Nome</label>
                  <input type="text" name="name" id="name" placeholder="Nome">
                  <label for="email">Email:</label>
                  <input type="email" name="email" id="email" placeholder="Seu e-mail" required>
                  <br></br>
                  <input type="password" name="senha" id="senha" placeholder="Senha" required>
                  <br></br>
                  <input type="submit" name="submit" id="submit" value="enviar">
                </form>
              </section>
        </div>
    </main>
    <footer>
        <p>Site Receitas 2024@ Todos os direitos reservados.</p>
    </footer>
    <script src="/scripts/scripts2.js"></script>
</body>
</html>

