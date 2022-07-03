<?php
$bdd = new PDO("mysql:host=127.0.0.1;dbname=forum;charset=utf8", "root", "");
if(isset($_POST['formconnexion'])) {

      $mailconnect = htmlspecialchars($_POST['mail']);
      $mdpconnect = sha1($_POST['mdpconnect']);
	  if(!empty('$mailconnect') AND !empty(' $mdpconnect') )
	  {
		$requser = $bdd->prepare("SELECT*FROM membres WHERE mail = ? AND motdepasse= ?");
		$requser->execute(array($mailconnect, $mdpconnect));
		$userexist =$requser->rowcount();
		if($userexist == 1)
        {
            $userinfo = "";
        }else
        {
            $message = 'Veuillez remplir tous les champs';
        }
		
	  }
      else
      {
        $message = 'Veuillez remplir tous les champs';
     
         } 
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>