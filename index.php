<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Car Luxe </title>
    <link rel="stylesheet" href="styleHome.css">
    <link rel="stylesheet" href="style.css">
    <script src="https://kit.fontawesome.com/3010b1eaf1.js" crossorigin="anonymous"></script>
</head>
<body>
    
    <!-- header  -->
    <header>
        <!-- menu responsive -->
        
        <div class="menu_toggle">
            <span></span>
        </div>

        <ul class="menu">
            <li><a href="#home">Acceuil</a></li>
            <li><a href="#cars">Services</a></li>
            <li><a href="#services">Equipe</a></li>
            <li><a href="#contact">Contact</a></li>
        </ul>
        
        <div class="form">
            <?php
            include("connect.php");
            if (isset($_SESSION["userid"])) {
                echo '<form action="includes/logout.inc.php" method="post">
                <button type="submit" name="logout-submit">Logout</button>
            </form>';
            } else {
                echo '   <form action="includes/login.inc.php" method="post">
                <input type="text" name="userId" placeholder="Username/Email ...">
                <input type="password" name="password" placeholder="Enter your password">
                <button type="submit" name="login-submit" id ="btn1" >Login</button>
            </form>
            ';
            }
            ?>


        </div>
    </header>
    <!-- section Acceuil -->
     <img src="img/logo.png.png" alt="logo" id = "img_logo">
     
    <section id="home">
        <div class="left">
            <h1>Bienvenue chez <span>CIH BANK</span></h1>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Non qui eum fugiat officiis laborum consectetur repellat molestiae totam in quasi laboriosam dolor, quia iusto quisquam ad porro deleniti. Vero, commodi incidunt. Reiciendis minima dolore earum est harum, nesciunt maxime dolorum officiis exercitationem aliquid sunt commodi nisi voluptate ipsam quaerat incidunt deleniti perferendis non eos provident placeat mollitia tenetur possimus sint. Accusantium voluptas pariatur quasi quae dolores iste corporis modi soluta? Distinctio quam aliquid architecto, excepturi temporibus aspernatur voluptas aperiam molestias, reiciendis repellat culpa alias pariatur, corporis nemo iusto eos! Beatae nobis qui ex ipsum distinctio at odio ipsam numquam tempora?</p>
            <a href="bank/bank.php">sing up</a>
        </div>
    </section>
 

            
    </section>

    <footer>
        <p>CIH BANK Copyright 2024 </p>
    </footer>

    <script>
        var menu_toggle = document.querySelector('.menu_toggle');
        var menu = document.querySelector('.menu');
        var menu_toggle_span = document.querySelector('.menu_toggle span');

        menu_toggle.onclick = function(){
            menu_toggle.classList.toggle('active');
            menu_toggle_span.classList.toggle('active');
            menu.classList.toggle('responsive') ;
        }

    </script>
</body>
</html>