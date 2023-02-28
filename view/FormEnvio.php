<!-- <?php

/* x */

?> -->
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Registro de Jogos</title>
    <link rel="stylesheet" href="../css/FormEnvio.css" />
    <script>
  $( function() {
    $( "#accordion" ).accordion({
      collapsible: true
    });
  } );
  </script>
  </head>
  <body>
    <section class="container">
      <header>Enviar Jogo</header>
      <form action="../controller/acoes.php?operacao=inserir_jogo" method = "POST" enctype="multipart/form-data" class="form">
        <div class="input-box">
          <label>Nome </label>
          <input type="text" id="nome_i" name="nome" placeholder="Nome completo do Jogo" required />
        </div>

        <div class="input-box">
          <label>Email</label>
          <input type="text" id="email_i" name="email" placeholder="Email para contato" required />
        </div>

        <div class="column">
          <div class="input-box">
            <label>Descrição</label>
            <input type="text" id="descricao_i" name="descricao" placeholder="Descrição do Jogo" required />
          </div>
          
          <div class="input-box">
            <label>data de criação</label>
            <input type="date" id="data_i" name="data" required />
          </div>
          
        </div>
        <div class="column">
          <div class="input-box">
            <label>Regras e arquivo do Jogo</label>
            <input type="text" id="regras_i" name="regras" placeholder="Regras " required />
          </div>
          
        </div>
        <div class="i">
            <input type="file" id="arquivo_i" name="arquivo" required />
          </div>
          <div class="column">
          <div class="input-box">
            <label>Matéria do Jogo</label>
            <input type="text" id="materia" name="materia" placeholder="Nome da Matéria" required />
          </div>
          
        </div>
          </div>
        </div>
        <button>Enviar</button>
        <button class="button"> <a href="index.html">Voltar</a></button>
      </form>
    </section>
  </body>
</html>