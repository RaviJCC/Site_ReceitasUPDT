<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/Style/EstiloPaginaReceitas.css">
    <link rel="stylesheet" href="/Style/EstiloReceita.css">
    <link rel="stylesheet" href="/Style/EstiloSite.css">
    <title>Tela de login</title>
    <style>
      html, body {
          height: 100%;
          margin: 0;
          padding: 0;
          display: flex;
          flex-direction: column;
      }
      main {
          flex: 1; 
      }
      footer {
          background-color: #333;
          text-align: center;
          padding: 10px 0;
          width: 100%;
      }
      
      #email {
    margin-bottom: 20px;
  }
  </style>
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
        <h1>Login</h1>
        <div class="livro-container">
            <section class="Contatar">
                <form action="/php/testlogin.php" method="POST">
                  <label for="email">email</label>
                  <input type="email" name="email" id="email" placeholder="Seu Email" required>
                  <label for="email">Senha</label>
                  <input type="password" name="senha" id="senha" placeholder="Sua Senha" required>
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

