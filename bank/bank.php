<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>bank</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    
    <header>
        <div class="logo">
            <a href="../index.php"> <span>CIH</span> Bank</a>
        </div>
        <ul class="menu">
            <li><a href="#">BANK</a></li>
            <li><a href="../signupAgence.php">AGENCE</a></li>
            <li><a href="../distributer.php">Distributeur</a></li>
            <li><a href="../signup.php">ADMIN</a></li>

        </ul>
        <div class="responsive-menu"></div>
    </header>
    
    <footer>
        <p>CIH BANK Copyright 2024 </p>
    </footer>

    <script>
        var toggle_menu = document.querySelector('.responsive-menu');
        var menu = document.querySelector('.menu');
        toggle_menu.onclick= function(){
             toggle_menu.classList.toggle('active');
             menu.classList.toggle('responsive')
        }
    </script>


</body>
</html>