<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/index.css">
</head>
<body>
    <div class="container">
        <div class="formulario">
            <form method="POST" action="">
                <input type="hidden" name="action" value="onCapturarOutput">
                <div class="input">
                    <!-- <input type="text" placeholder="Digite sua mensagem" name="input" autofocus required> -->
                    <textarea style="resize: none"type="text" id="promptEmail" name="promptEmail" cols="40" rows="9" placeholder="Digite como você quer seu e-mail"></textarea>
                </div>
                <button type="submit">ENVIAR</button>
                <?php
                    include 'processa.php';
                    if(isset($_POST["promptEmail"])){
                        $funcoes = new Processa();
                        $retorno = $funcoes->onCapturarOutput($_POST["promptEmail"]);
                        echo $retorno;
                    }
                ?>
            </form>
        </div>
    </div>
</body>
</html>


