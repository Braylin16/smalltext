<?php

require_once 'backend/index.php';

?>

<!DOCTYPE html>
<html lang="es" dir="ltr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Bienvenido a SmallText</title>
    <link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="img/favicon.png" type="image/x-icon">
</head>
<body>
    <header role="Titulo">
        <h1><a href="index.php">SmallText</a></h1>
    </header>
    <main role="contenido">
        <section>
            <article>
                <h2 role="subtitulo">Calcula el texto de tu sitio web</h2>
                <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST" role="formulario">
                    <textarea name="text" autofocus 
                    placeholder="Pega aqui el texto para que nuestro robots lo examine"><?php if(isset($_POST["submit"])){echo $text;} ?></textarea><br/>
                    <button type="submit" name="submit">Examinar</button>
                    <button type="reset">Limpiar</button>
                </form>

                <?php if(isset($success) || isset($errors)) : ?>
                    <div class="messeger" role="informacion">
                        <strong>Tu texto tiene <?php echo $palabra . " Palabras <br/>"; ?></strong>
                        <strong>y texto tiene <?php echo $letras . " Letras <br/>"; ?></strong>

                        <b><?php echo $errors; ?></b>
                    </div>
                <?php endif; ?>

            </article>
        </section>
    </main>
    <footer role="pie-pagina">
        <p role="copyringht">Todos los derechos reservados. SmallText &copy;<?php echo date('Y'); ?></p>
        <address role="contacto">Desarrollado con <span>&hearts;</span> amor por <a href="https://www.facebook.com/iban.pallano.3"
         target="_blank" rel="noopener noreferrer">Braylin Ivan Payano</a></address>
    </footer>
    
</body>
</html>