<?php
    define('URL', 'https://roleta.srv.br/roleta');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo URL; ?>/css/reset.min.css">
    <link rel="stylesheet" href="<?php echo URL; ?>/css/style.css">
    <title>Document</title>
</head>
<body>
    

    <!-- <button onclick="spinner.spin()">RND</button>
    <button onclick="spinner.spin(0)">0</button>
    <button onclick="spinner.spin(1)">1</button>
    <button onclick="spinner.spin(2)">2</button>
    <button onclick="spinner.spin(3)">3</button>
    <button onclick="spinner.spin(4)">4</button> -->

    <div class="roulette">
        <div class="spinner"></div>
        <div class="shadow"></div>
        <div class="markers">
            <div class="triangle">
                
            </div>
        </div>
        <div class="button">
            <span>
                <img src="<?php echo URL; ?>/images/icone-42-ano-fundo-branco.svg" width="150px" alt="Colégio São Gonçalo">
            </span>
        </div>
    </div>
    <audio id="spinSound" src="<?php echo URL; ?>/music/som.mp3"></audio>

    <script src="<?php echo URL; ?>/js/jquery.min.js"></script>
    <script src="<?php echo URL; ?>/js/velocity.min.js"></script>
    <script src="<?php echo URL; ?>/js/lodash.min.js"></script>
    <script src="<?php echo URL; ?>/js/backbone-min.js"></script>
    <script src="<?php echo URL; ?>/js/script.js"></script>
</body>
</html>