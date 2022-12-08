       <!DOCTYPE html>
       <html lang="en">

       <head>
           <meta charset="UTF-8">
           <meta http-equiv="X-UA-Compatible" content="IE=edge">
           <meta name="viewport" content="width=device-width, initial-scale=1.0">
           <title>Document</title>
           <link rel="stylesheet" href="sig_up_page.css">
           <link rel="stylesheet" href="asset/style.css">
       </head>

       <body>
           <div class="block_formulaire">
               <h1>Learn JS | Inscription</h1>
               <form action="../Controllers/register.inc.php" method="post">
                   <input type="text" name="firstname" id="firstname" placeholder="firstname" value="<?php echo $_GET["userfirstname"] ?? '' ?>"><br>
                   <input type="text" name="lastname" id="lastname" placeholder="lastname" value="<?php echo $_GET["userlastname"] ?? '' ?>"><br>
                   <input type="text" name="username" id="username" placeholder="username" value="<?php echo $_GET["username"] ?? '' ?>"><br>
                   <input type="email" name="email" id="email" value="<?php echo $_GET["useremail"] ?? '' ?>" placeholder="email"><br>
                   <input type="password" name="password" id="password" value="<?php echo $_GET["password"] ?? '' ?>" placeholder="password"><br>
                   <input type="password" name="password-confirm" id="new_password" placeholder="confirm your password"><br>
                   <button type="submit" name="register">S'inscrire</button>
                   <button type="reset" name="reset" id="refresh">Raffraichir</button>
                   <p>Déja inscrit ? <a href="Sig_in.php">Connectez-vous</a></p>
               </form>
           </div>
           <!-- <script src="../asset/refresh.js"></script> -->
       </body>

       </html>