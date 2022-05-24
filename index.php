<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload and Download</title>
</head>
<body>
    <h3>Upload and Download de Imagens.png</h3>
    <p style="color:red;">Para download so clicar na imagem</p>
    <form action="script.php" method="post" enctype="multipart/form-data">
        <input type="file" name="arquivo">
        <input type="submit" value="Enviar">
    </form>
    <?php
        if(isset($_GET) && !empty($_GET['status'])){
            echo 'Por favor, envie arquivos com apenas com as extenção png, gif, jpg ou bmp';
        }
        if(file_exists('./tmp/')){
            $imagens = glob("./tmp/{*.jpg,*.JPG,*.png,*.gif,*.bmp}", GLOB_BRACE);?>
            <div style="display:flex;">
            <?php
            foreach($imagens as $img){?>
                <a href="<?= $img;?>" download><img src="<?= $img;?>" width="200px" height="200px" style="margin:50px 5px;"></a>
            <?php } ?>
            </div>
    <?php }
    ?>
</body>
</html>