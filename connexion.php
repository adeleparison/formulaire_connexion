<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
	<title>Connexion</title>
    <link rel="stylesheet" type="text/css" href="connexion_style.css">
</head>
    <body>
            <h2 class="title">Votre connexion</h2>
            <form  method="POST" action="">
                
                        <div class="input-group">
                            <label for="loginconnect">Votre pseudo :</label>
                            <input type="text" placeholder="Pseudo" id="loginconnect" name="loginconnect"/>
                        </div>
                        
                        <div class="input-group">
                            <label for="pwdconnect">Votre mot de passe :</label>
                            <input type="password" placeholder="Mot de passe" id="pwdconnect" name="pwdconnect"/>
                      </div>
                <button class="btn" type="submit" name="connect" value="Je me connecte">Je me connecte
                </button>
                    
            </form>
    </body>
</html>