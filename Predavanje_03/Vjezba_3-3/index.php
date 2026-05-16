<?php
$autor = "Patrik Balija";

$prviBroj = isset($_POST["prviBroj"]) ? $_POST["prviBroj"] : NULL ;
$drugiBroj = isset($_POST["drugiBroj"]) ? $_POST["drugiBroj"] : NULL ;

if(isset($_POST["prviBroj"]) && isset($_POST["drugiBroj"])){
    $ocjene = array($prviBroj, $drugiBroj);
    $prosjek = ($ocjene[0] + $ocjene[1]) / 2;

    if($prviBroj != 1 && $drugiBroj != 1){
        $poruka = "Student je položio kolokvije.";
        $konacnaOcjena = round($prosjek);
    } else if($prviBroj == 1 && $drugiBroj != 1){
        $poruka = "Student je pao I. kolokvij.";
        $konacnaOcjena = 1;
    } else if($prviBroj != 1 && $drugiBroj == 1){
        $poruka = "Student je pao II. kolokvij.";    
        $konacnaOcjena = 1;
    } else {
        $poruka = "Student je pao oba kolokvija.";
        $konacnaOcjena = 1;
    }
}
?>
<!DOCTYPE html>
<html lang="hr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $autor; ?></title>
</head>
<body>
    <form method="POST">
        <label>
            Unos ocjene I. kolokvija: <input type="number" name="prviBroj" min="1" max="5" required>
        </label><br>
        <label>
            Unos ocjene II. kolokvija: <input type="number" name="drugiBroj" min="1" max="5" required>
        </label><br>
        <input type="submit" value="Izračunaj">
    </form>
    
    <?php
    if(isset($_POST["prviBroj"]) && isset($_POST["drugiBroj"])){
        echo "<p>Ocjena I. Kolokvija: " . $ocjene[0] . "</p>";
        echo "<p>Ocjena II. Kolokvija: " . $ocjene[1] . "</p>";
        echo "<p>Prosjek: " . $prosjek . "</p>";
        echo "<hr>";
        echo "<p>" . $poruka . "</p>";
        echo "<strong>Konačna ocjena iz predmeta: " . $konacnaOcjena . "</strong>"; 
    }
    ?>
</body>
</html>
