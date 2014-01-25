	<!doctype html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <title>RATP - Demande</title>
  <link rel="stylesheet" href="css/bootstrap.css">
</head>
<body>
<?php
try {
    $bdd = new mysqli("localhost", "root", "oVfw*h6.x", "gmh");
}
catch (Exception $e)
{
    die('Erreur :'. $e->getMessage());
}

$requet = "SELECT DISTINCT transport_ligne from transport order by transport_ligne ASC";

$success = $bdd->query($requet);

?>

Ligne
<div id="transport_station"><select name="transport_ligne" id="transport_ligne">
<?php
if ($result = mysqli_query($bdd, $requet)) {

    while ($row = mysqli_fetch_assoc($result)) {
        ?>
        <option>
            <?php
            printf ("%s\n", $row["transport_ligne"]);
            ?>
        </option>
    <?php
    }
}
?>
</select></div>
<script>
var x=document.getElementById("transport_ligne");
var codeid =x.value; // stocke la valeur H dans codeid si Homme selectionné
var contenu=x.options[x.selectedIndex].text; // stocke la valeur Homme dans la variable contenu si Homme selectionné
</script>

<?php
$codeid = "<script> document.write(codeid); </script>";
var_dump($codeid);
$requet2 = "SELECT DISTINCT transport_station from transport where transport_ligne = {$codeid}";
$success2 = $bdd->query($requet2);
var_dump($success2);
?>
Station<div id="transport_station"><select>
<?php

if ($result = mysqli_query($bdd, $requet2)) {
    while ($row = mysqli_fetch_assoc($result)) {
        ?>
        <option>
            <?php

            printf ("%s\n", $row["transport_station"]);
            ?>
        </option>
    <?php
    }
}
?>
</select></div>
</body>
</html>
</body>
</html>

