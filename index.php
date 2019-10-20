<?php

require_once 'backend/index.php';

?>

<!DOCTYPE html>
<html lang="es" dir="ltr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Calcula cuantas Palabras, Letras o Párrafos tiene el texto de tu sitio web | SmallTexts</title>
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
    <header>
        <h1><a href="index.php">SmallTexts</a></h1>
    </header>
    <main>
        <section>
            <article>
                <h2>Calcula el texto de tu sitio web</h2>
                <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
                    <textarea name="text" autofocus required
                    placeholder="Pega aqui el texto para que nuestro robot lo examine"><?php if(isset($_POST["submit"])){echo $text;} ?></textarea><br/>
                    <button type="submit" name="submit">Examinar</button>
                    <a href="index.php" id="limpiar">Limpiar</a>
                </form>

                <?php if(isset($_POST['submit'])) : ?>
                    <div class="messeger">

                        <table>
                            <caption>Resultados:</caption>
                            <tr>
                                <th>Letras</th>
                                <th>Palabras</th>
                                <th>Párrafos</th>
                            </tr>
                            <tr>
                                <td><strong><?php if(isset($text)) {echo $letras;} ?></strong></td>
                                <td><strong><?php if(isset($text)) {echo $palabra;} ?></strong></td>
                                <td><strong><?php if(isset($text)) {echo count(cantidad_párrafos("$text"));} ?></strong></td>
                            </tr>
                        </table>

                    </div><br/>
                <?php endif; ?>
                        <?php if(isset($errors)) : ?>
                        <b><?php echo $errors; ?></b>
                <?php endif; ?>

            </article>
        </section>
    </main>
    <footer>
        <p>Todos los derechos reservados. SmallTexts &copy;<?php echo date('Y'); ?></p>
        <p><a href="terminos-y-condiciones.php">T&eacute;rmino y Condiciones</a></p>
        <address>Desarrollado con <span>&hearts;</span> amor por: <a href="https://www.facebook.com/iban.pallano.3"
         target="_blank" rel="noopener noreferrer">Braylin Ivan Payano</a></address>
    </footer>
    
</body>
</html>