<?php
session_start();

$autor = "Patrik Balija";

if (isset($_SESSION["korisnickoIme"])) {

    $korisnickoIme = $_SESSION["korisnickoIme"];
    $razinaDozvole = $_SESSION["razinaDozvole"];

    if ($razinaDozvole == 1) {

        echo "Dobro došli $korisnickoIme. Vaša razina je administrator.";

    } else {

        echo "Dobro došli $korisnickoIme.";
    }

} else {

    echo "Niste prijavljeni.";
}
?>