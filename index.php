<?php

require_once 'backend/index.php';

?>

<!DOCTYPE html>
<html lang="es" dir="ltr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Calcula cuantas Palabras, Letras o Párrafos tiene el texto de tu sitio web | SmallText</title>
    <!-- Descripcion de la pagina -->
    <meta name="description" content="Si quieres saber la cantidad de palabras, letras o párrafos que existen en un articulo de tu sitio web, solo tienes que pegar el texto de tu articulo y dejar que nuestro sitio web lo examine.">
    <!-- Etiquetas -->
    <meta name="keywords" content="contador de letras, calcula parrafos, contar palabras">
    <!-- Autor -->
    <meta name="author" content="Braylin Ivan Payano">
    <!-- Dueño de la pagina -->
    <meta name="owner" content="Braylin Ivan Payano">
    <!-- indexacion de Google -->
    <meta name="robots" content="index, follow">
    <!-- Estilos CSS -->
    <link rel="stylesheet" href="css/style.css">
    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
    <!-- Favicon -->
    <link rel="shortcut icon" href="img/favicon.png" type="image/x-icon">
</head>
<body>
    <header role="Titulo">
        <h1><a href="index.php">SmallText</a></h1>
    </header>
    <main role="contenido">
        <section role="seccion">
            <article role="articulo">
                <h1 role="subtitulo">Calcula el texto de tu sitio web</h1>
                <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST" role="formulario">
                    <textarea name="text" autofocus required role="caja-de-texto"
                    placeholder="Pega aqui el texto para que nuestro robot lo examine"><?php if(isset($_POST["submit"])){echo $text;} ?></textarea><br/>
                    <button type="submit" name="submit" role="enviar-formulario">Examinar</button>
                    <button type="reset" role="limpiar-formulario">Limpiar</button>
                </form>

                <?php if(isset($success)) : ?>
                    <div class="messeger" role="informacion">
                        <strong role="palabras"><?php if(isset($text)) {echo $palabra . " - Palabras <br/>";} ?></strong>
                        <strong role="letras"><?php if(isset($text)) {echo $letras . " - Letras <br/>";} ?></strong>
                        <strong role="parrafos"><?php if(isset($text)) {echo count(cantidad_párrafos("$text")) . " - Párrafos <br/>";} ?></strong>
                    </div><br/>
                <?php endif; ?>
                        <?php if(isset($errors)) : ?>
                        <b role="mensaje-error"><?php echo $errors; ?></b>
                <?php endif; ?>

            </article>
        </section>
    </main>
    <footer role="pie-pagina">
        <p role="copyringht">Todos los derechos reservados. SmallText &copy;<?php echo date('Y'); ?></p>
        <address role="contacto">Desarrollado con <span role="corazon">&hearts;</span> amor por: <a role="direccion" href="https://www.facebook.com/iban.pallano.3"
         target="_blank" rel="noopener noreferrer">Braylin Ivan Payano</a></address>
    </footer>
    
</body>
</html>