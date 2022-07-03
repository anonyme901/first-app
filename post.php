
<?php
$bdd = new PDO("mysql:host=127.0.0.1;dbname=forum;charset=utf8", "root", "");
if(isset($_POST['article_titre'], $_POST['article_contenu'])) {
   if(!empty($_POST['article_titre']) AND !empty($_POST['article_contenu'])AND !empty($_POST['article_contenu'])) {
      
      $article_titre = htmlspecialchars($_POST['article_titre']);
      $article_contenu = nl2br(htmlspecialchars($_POST['article_contenu']));
      $article_contacte = htmlspecialchars($_POST['article_contacte']);
      $ins = $bdd->prepare('INSERT INTO postes (titre, contenu, contacte,date_time_publication) VALUES (?, ?, ?, NOW())');
      $ins->execute(array($article_titre, $article_contenu, $article_contacte));
      $message = 'Votre article a bien été posté';
   } else {
      $message = 'Veuillez remplir tous les champs';
   }
}
?>
<!DOCTYPE html>
<html>
<head>
   <title>Rédaction</title>
   <meta charset="utf-8">
</head>
<body>
   <form method="POST">
      <input type="text" name="article_titre" placeholder="Titre" /><br />
      <textarea name="article_contenu" placeholder="Contenu de l'article"></textarea><br />
      <input type= "text" name="article_contacte" placeholder="Votre contacte"></input><br />
      <input type="submit" value="Envoyer l'article" />
   </form>
   <br />
   <?php if(isset($message)) { echo $message; } ?>
</body>
</html>