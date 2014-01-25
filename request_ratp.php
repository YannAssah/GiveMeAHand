<?php
$link = new mysqli("localhost", "root", "oVfw*h6.x", "gmh");

/* Vérification de la connexion */
if (mysqli_connect_errno()) 
{
    printf("Échec de la connexion : %s\n", mysqli_connect_error());
    exit();
}

if ($result = mysqli_query($link, $query)) {

    /* Récupère un tableau associatif */
    while ($row = mysqli_fetch_assoc($result)) {
        $option = $row["transport_ligne"];
        }
}

$query = "SELECT DISTINCT transport_id, transport_ligne, transport_station FROM transport ORDER by transport_station ASC";
$query2 = "SELECT DISTINCT transport_ligne FROM transport ORDER by transport_ligne ASC";
$query3 = "SELECT DISTINCT transport_ligne FROM transport where id ='{$option}'";



$success = $link->query($query);
$success1 = $link->query($query2);

?>
<!DOCTYPE html>
<html lang="utf-8">
        <head>
            <title>Demande RATP - GMH</title>
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <meta charset="utf-8">
            <link rel="stylesheet" href="css/bootstrap.css" media="screen">
        </head>    
    <body>
        Ligne:<select>
<?php
if ($result = mysqli_query($link, $query2)) {

    /* Récupère un tableau associatif */
    while ($row = mysqli_fetch_assoc($result)) {
        ?>
        <option>
            <?php
            printf ("%s\n", $row["transport_ligne"]);
            ?>
        </option>
    <?php
    }

    /* Libération des résultats */
    mysqli_free_result($result);
}

?>
            </select><br>
        Station:<select>
<?php
if ($result = mysqli_query($link, $query)) {

    /* Récupère un tableau associatif */
    while ($row = mysqli_fetch_assoc($result)) {
        ?>
        <option value="<?php $option; ?>">
            <?php
            printf ("%s\n", $row["transport_station"]);
            ?>
        </option>
    <?php
    }
    /* Libération des résultats */
    mysqli_free_result($result);
}

?>
            </select><br>            
    </body>
</html>