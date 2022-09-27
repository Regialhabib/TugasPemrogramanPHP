<?php
$negaraAsean = ["negara"=>"Indonesia : DKI jakarta","Singapur : Singapur","Malaysia : kuala lumpur","Brunei : Bandar seri begawan","Thailand : bangkok","Laos : Vientiane","Fhilipina : manila","Myanmar : Naypyidaw"];
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Daftar negara asean dan ibukota</h2>
    <ul>
        <?php foreach($negaraAsean as $negara): ?>
            <li><?php echo $negara ?></li>
        <?php endforeach; ?>
    </ul>
</body>
</html>