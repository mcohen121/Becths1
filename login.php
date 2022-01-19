<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Becths</title>

    <link rel="stylesheet" type="text/css" href="css/style.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital@1&family=Rubik:wght@300&display=swap" rel="stylesheet">
    
    
</head>
<body>
    
<main>
        <div class="main-container"><!--start-->

            <div class="main-description">
                    <h1>becths</h1>
                    <p>O becths pode te ajudar</p>
             </div>
             <div class="main-login">
               <div class="main-card"><!--onde fica a senha e email-->

                  <form method="POST" action="process.php"><!--start backend-->
                      <div>
                          <input type="email" name="email" placeholder="email or telephone">
                      </div>

                      <div>
                          <input type="password" name="password" placeholder="password">
                      </div>

                      <button type="submit">Enter</button>

                      <div class="main-link">
                          <a href="">forgoten password</a>
                      </div>

                         <hr>
                         
                         
                         <div main-btn class="main-btn">
                             <a href="criar.php">criar nova conta</a>
                         </div>

                  </form>
                  
                  </P>
               </div>
               <div class="main-footer">
                <a href="">Crie uma pagina e comunique se</a>
            </div>
            </div>
        </div ><!--end-->
     </main>

    <footer>
        <div class="footer-container">
            <div class="footer-link">
            <ul>
                <li><a href="#">English (US)<a/></li>
                <li><a href="#">Português (Brasil)<a/></li>
                <li><a href="#">Español<a/></li>
                <li><a href="#">Français(France)<a/></li>
                <li><a href="#">Italiano<a/></li>
                <li><a href="#">Deutsch<a/></li>
                <li><a href="#">العربية</li>
                <li><a href="#">हिन्दी<a/></li>
                <li><a href="#">中文(简体)<a/></li>
                <li><a href="#">日本語<a/></li>
                <li><a href="#" class="btn">+<a/></li>
               </ul>

            <div class="footer-link">
                <p>Becths @ <?php echo date('Y'); ?></p>
                </div>
            </div>
         </div>
    </footer>
    
</body>
</html>