<?php

require_once 'conexion.php';
require_once 'function.php';

$errors = "";
$success = "";
$palabra = "";
$letras = "";

if(isset($_POST['submit'])){
    $text = $_POST['text'];

    if(empty($text)){
        $errors .= "Debes introducir un texto";
    }

    $text = htmlspecialchars($text);
    $text = trim($text);
    $text = filter_var($text, FILTER_SANITIZE_STRING);

    $palabra = str_word_count($text); //Cuenta las palabras de un texto
    $letras = strlen($text); // Cuenta las letras de texto

    if($letras <= 100){
        $errors .= "$letras letras y $palabra palabra es muy poco texto para tu sitio web";
    }

    if($errors == ''){
        $success = "Tu texto tiene ";
        $statement = $conexion->prepare('INSERT INTO text (id, text) VALUES(
            null, :text)'
        );
        $statement->execute(array(
            ':text' => $text
        ));

    }
}

?>