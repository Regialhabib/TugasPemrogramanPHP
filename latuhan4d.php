<?php
$negara =  [["Indonesia","Singapura","Malaysia","Brunei","Thailand","Laos","Fhilipina","Myanmar"],
            ["Jakarta","Singapura","Kuala Lumpur","Bandara Seri Begawan","Bangkok","Vientiane","Manila","Naypyidaw"],
            ["+62","+65","+60","+673","+66","+856","+63","95"]];
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        table{
            border: 1px solid black;
            width: 50%;
        }
        td, th {
            padding: 10px;
            text-align: center;
            border: 1px solid black;
        }
    </style >
    <title>Document</title>
</head>
<body>
    <table>
        <tr>
            <th>Negara</th>
            <th>Ibu Kota</th>
            <th>Kode Telepon</th>
        </tr>
        
        <?php for ($i=0; $i<count($negara[0]); $i++) : ?>
            <tr>
            <?php for ($j=0; $j<=0; $j++): ?>
                <td><?php echo $negara[0][$i] ?></td>
                <td><?php echo $negara[1][$i] ?></td>
                <td><?php echo $negara[2][$i] ?></td>
            <?php endfor; ?>
            </tr>
        <?php endfor; ?>
        
    </table>
</body>
</html>