<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php
    $imagens = array('foto/FeiradasNacoes (1).jpg','foto/FeiradasNacoes (2).jpg','foto/FeiradasNacoes (3).jpg');
    $indice = 0;

    if(!isset($_GET['foto'])) {
        $imagemAtual = 0;
    }else{
       $indice = (int) $_GET['foto'];
       if($indece < 0) {
        $indice = 0;
       } 
       if ($indice >= count($imagens)){
        $indice = count($imagens) - 1;
       }
    }

?>

<img src="<php echo $imagens[[$indice] ?>" / >

</body>
</html>