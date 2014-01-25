<?php
/**
 * Created by PhpStorm.
 * User: Pascal
 * Date: 24/01/14
 * Time: 10:27
 */

if(isset($_POST) and $_POST['req'] == "send" )
{
    $dest = mysql_escape_string($_POST['dest']);
    $mess = mysql_escape_string($_POST['mess']);
    $date = date("d-m-Y");
    var_dump($dest);
    var_dump($mess);

    $connect = new mysqli("localhost", "givemeahand", "112233", "gmh");
    if($connect)
    {
        $query = "INSERT INTO message (id_user, content) VALUE ('$dest', '$mess')";
        $connect->query($query);
    }

}
else
{
    echo("ereur");
}