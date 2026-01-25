<?php
$texto = "PHP no está muerto… solo sigue trabajando silenciosamente en el 80% de Internet";

function contarPalabras($texto) {
    $varcontar = str_word_count($texto);
    echo "Aqui hay $varcontar palabras\n";
}

contarPalabras($texto);

function contarCaracteres($texto) {
    $textoSinEspacios = str_replace(" ", "", $texto);
    $varcaracteres = strlen($textoSinEspacios);
    echo "Hay $varcaracteres caracteres sin espacios\n";
}

contarCaracteres($texto);
