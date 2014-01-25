<?php
/**
 * Created by PhpStorm.
 * User: Pascal
 * Date: 24/01/14
 * Time: 17:33
 */
$link = new mysqli("localhost", "givemeahand", "112233", "gmh");

/* Vérification de la connexion */
if (mysqli_connect_errno()) {
    printf("Échec de la connexion : %s\n", mysqli_connect_error());
    exit();
}
$comment = mysql_escape_string($_POST['comment']);
$reponse = "INSERT INTO publication (publication_content) VALUES ('$comment')";

$query = "SELECT publication_id, publication_content FROM publication ORDER by publication_id DESC";
if(isset($comment) && !empty($comment)){
    $success = $link->query($reponse);
    header("Location: index.php");
}

if ($result = mysqli_query($link, $query)) {

    /* Récupère un tableau associatif */
    while ($row = mysqli_fetch_assoc($result)) {
        ?>
        <div class="media" style="height:100px">
		<div style="width:50px; height:50px; border: 1px solid black; float:left;"></div>	
		<div style="margin-left:70px;">
		 <b>Prénom Nom</b><br>
            <?php
            printf ("%s\n", $row["publication_content"]);
            ?>
		</div>
        </div>
    <?php
    }

    /* Libération des résultats */
    mysqli_free_result($result);
}

/* Fermeture de la connexion */
mysqli_close($link);
?>
