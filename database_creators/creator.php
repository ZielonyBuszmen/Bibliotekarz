<?php
$ds = DIRECTORY_SEPARATOR;
$consts = realpath(__DIR__ . $ds . '..') . $ds . 'consts.php';
require_once $consts;
require_once bootstrap;


/**
 * Plik wykonujący wszystkie skrypty php w tym folderze
 * Kolejnosc wykonywania chyba nie jest istotna, więc albo skrypt będzie brał pliki zaczynające się od "create_"
 * albo po prosut wszystkie pliki php w tym folderze
 * TODO - do obmyślenia
 */

include 'create_product.php';
