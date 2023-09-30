<?php
// Verifica se o formulário foi enviado
/*if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  // Obtém os dados do formulário
  $name = $_POST['name'];
  $email = $_POST['email'];
  $country = $_POST['country'];
  $team = $_POST['team'];
  $experience = $_POST['experience'];
  
  // Realiza as ações desejadas com os dados
  // Por exemplo, você pode armazenar os dados em um banco de dados ou enviar por email
  
  // Exemplo de armazenamento em um arquivo de texto
  $dados = "Nome: $name\nEmail: $email\nPaís: $country\nEquipe favorita: $team\nExperiência: $experience\n";
  file_put_contents('dados_formulario.txt', $dados, FILE_APPEND);
  
  // Exemplo de envio por email
  $assunto = "Novo cadastro - Fórmula 1";
  $mensagem = "Um novo cadastro foi recebido:\n\nNome: $name\nEmail: $email\nPaís: $country\nEquipe favorita: $team\nExperiência: $experience\n";
  mail('seu-email@example.com', $assunto, $mensagem);
  
  // Redireciona para uma página de confirmação
  header('Location: confirmacao.html');
  exit;
}*/
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Confirmação de Cadastro - Fórmula 1</title>
</head>
<body>
  <h1>Confirmação de Cadastro</h1>
  
  <?php
  if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $country = $_POST['country'];
    $team = $_POST['team'];
    $experience = $_POST['experience'];
    
    // Exibe os dados do formulário
    echo "<p>O seu cadastro foi enviado com sucesso! Agradecemos por se cadastrar em nosso site.</p>";
    echo "<p>Nome: $name</p>";
    echo "<p>Email: $email</p>";
    echo "<p>País: $country</p>";
    echo "<p>Equipe favorita: $team</p>";
    echo "<p>Experiência: $experience</p>";
  }
  ?>
</body>
</html>