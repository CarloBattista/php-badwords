<?php
    $paragrafo = $_GET["paragrafo"];
    $parolaDaCensurare = $_GET["parola"];

    // Stampa il paragrafo e la sua lunghezza
    echo "<p>Paragrafo: $paragrafo</p>";
    echo "<p>Lunghezza del paragrafo: " . strlen($paragrafo) . "</p>";

    // Censura della parola
    $paragrafoCensurato = str_ireplace($parolaDaCensurare, '***', $paragrafo);

    // Stampo il paragrafo censurato e la sua lunghezza
    echo "<p>Paragrafo censurato: $paragrafoCensurato</p>";
    echo "<p>Lunghezza del paragrafo censurato: " . strlen($paragrafoCensurato) . "</p>";
?>