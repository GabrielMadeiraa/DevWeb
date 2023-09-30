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
  <title>Confirmação de Contato - Fórmula 1</title>
</head>
<body>
  <h1>Confirmação de Contato</h1>
  
  <?php
    // Verifica se o formulário foi enviado
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
      // Coleta os valores enviados pelo formulário
      $nome = $_POST["nome"];
      $email = $_POST["email"];
      $idade = $_POST["idade"];
      $equipe = $_POST["equipe"];
      $comentario = $_POST["comentario"];
      $numero = $_POST["numero"];
      $cor = $_POST["cor"];
      $url = $_POST["url"];

      // Processa os dados ou realiza outras ações necessárias
      // ...

      // Exemplo de exibição dos dados recebidos
      echo "Nome: " . $nome . "<br>";
      echo "E-mail: " . $email . "<br>";
      echo "Idade: " . $idade . "<br>";
      echo "Equipe favorita: " . $equipe . "<br>";
      echo "Comentário: " . $comentario . "<br>";
      echo "Número favorito: " . $numero . "<br>";
      echo "Cor favorita: " . $cor . "<br>";
      echo "Website favorito: " . $url . "<br>";
    }
  ?>
</body>
</html>