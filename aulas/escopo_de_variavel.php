<?php

$nome = "Glaucio";

function teste() {

    global $nome;
    echo $nome;
}

function teste2() {

    $nome = " Asdruball";
    echo $nome . " agora no teste 2";

}

teste();

teste2();