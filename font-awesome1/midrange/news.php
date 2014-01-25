<?php
$link = mysqli_connect("localhost", "midgrange", "midgrangeprojetetna", "midrange");

/* Vérification de la connexion */
if (mysqli_connect_errno()) {
    printf("Échec de la connexion : %s\n", mysqli_connect_error());
    exit();
}
$comment = mysql_escape_string($_POST['comment']);
$reponse = "INSERT INTO news (contenu) VALUES ('$comment')";

$query = "SELECT id, contenu FROM news ORDER by ID DESC";

if(isset($comment) && !empty($comment)){
    $success = $link->query($reponse);
    header("Location: home.php");
}

if ($result = mysqli_query($link, $query)) {

    /* Récupère un tableau associatif */
    while ($row = mysqli_fetch_assoc($result)) {
        ?>
        <div class="media4">&nbsp;&nbsp;&nbsp;
            <?php
            printf ("%s\n", $row["contenu"]);
            ?>
        </div><br>
    <?php
    }

    /* Libération des résultats */
    mysqli_free_result($result);
}

/* Fermeture de la connexion */
mysqli_close($link);
?>
