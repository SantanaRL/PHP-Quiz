<!DOCTYPE html>
<html lang="pt-br">
<head>
    <link rel="stylesheet" href="./style.css">
    <title>Document</title>
</head>
<body>
    <section>
        <p class="result">
        <?php
            $acertos=0;
            foreach ($_POST as $key => $value) {
                $acertos+=$value;
            }

        echo("Voce acertou: $acertos");
        ?>
        </p>
        <a href="." class="btn_blue">Voltar</a>
    </section>    
</body>
</html>
