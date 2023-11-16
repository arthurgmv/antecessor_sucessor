<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Antecessor e Sucesor</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<header>
    <h1>Resultado</h1>
</header>
<main style="align-items: center">
    <?php
    $num = $_POST["num"];
    $ant = $num -1;
    $suc = $num +1;
    echo "<p>O seu número é $num <br/> O seu antecessor é $ant <br/> e o seu sucessor é $suc. </p>";
    ?>
    <button style="background-color: #4CAF50; border-radius: 4px"><a style="color: #fff" href="javascript:history.go(-1)">Voltar à página anterior</a></button>
</main>

</body>
</html>
