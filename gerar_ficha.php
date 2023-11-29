<!DOCTYPE html>
<html>
<head>
  <title>Ficha de Impressão</title>
  <link rel="shortcut icon" href="favicon-32x32.png" type="image/x-icon">
  <link rel="stylesheet" href="styles/ficha.css">
</head>
<body>
  <header>
    <h1>Informações Fornecidas no Cadastro</h1>
    <p>Confira se as informações informadas estão corretas!</p>
    </header>
  <div class="ficha">
    <section>
      <h1>Dados Pessoais</h1>
      <?php
      foreach ($_POST as $campo => $valor) {
        echo "<p><strong>$campo:</strong> $valor</p>";
      }
      ?>
    </section>
  </div>

  <script>

    window.onload = function() {
      window.print();
    }
  </script>
</body>
</html>
