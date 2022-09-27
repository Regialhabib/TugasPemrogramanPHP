<!-- deklarasi array -->
<?php
$negara = ["indonesia","singapura","malaysia","brunei","thailand"];
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p><b>Daftar negara ASEAN awal</b></p>
    <ul>
        <?php
            for ($i=0; $i<5; $i++):?> 
            <li><?php echo $negara[$i];?></li>
        <?php endfor;?>
    </ul>

        <!-- menambahakan data baru kedalam array
        <?php array_push($negara,"laos","filiphina","myanmar");?> -->
    
    <p><b>Daftar negara ASEAN baru</b></p>
    <ul>
        <?php
            for ($i=0; $i<8; $i++):?> 
            <li><?php echo $negara[$i];?></li>
        <?php endfor;?>
    </ul>

</body>
</html>
