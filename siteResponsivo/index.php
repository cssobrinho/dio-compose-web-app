<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Site Portfolio</title>
    <script>
        $(document).ready(function(){
            $('#icon').click(function(){
                $('ul').toggleClass('show')
            })
        })
    </script>
</head>
<body>
    <img id="bg" src="img/background.jpg">
    <nav>
        <label class="logo">Logo</label>
        <ul>
            <li><a class="ativo" href="#">Produtos</a></li>
            <li><a href="#">Sobre</a></li>
            <li><a href="#">Posts</a></li>
            <li><a href="#">Whatsapp</a></li>
        </ul>
        <label id="icon">
            <i class="fas fa-bars"></i>
        </label>
    </nav>
    
</body>
</html>
