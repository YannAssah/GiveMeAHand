<?php
/**
 * Created by PhpStorm.
 * User: Pascal
 * Date: 18/01/14
 * Time: 10:20
 */

  $bdd = mysqli_connect("localhost", "midgrange", "midgrangeprojetetna", "midrange");
  if (mysqli_connect_errno()) {
      printf("Échec de la connexion : %s\n", mysqli_connect_error());
      exit();
  }

  $requet1 = "SELECT name from account where id='3'";
  $requet2 = "SELECT job from account where id='3'";
  $requet3 = "SELECT skill from account where id='3'";
  $requet4 = "SELECT skill2 from account where id='3'";
  $requet5 = "SELECT skill3 from account where id='3'";
  $requet6 = "SELECT photo_id from account where id='3'";
  $requet7 = "SELECT service from account where id='3'";


  $usr_name = $bdd->query($requet1);

  $usr_job = $bdd->query($requet2);

  $usr_skill = $bdd->query($requet3);

  $usr_skill2 = $bdd->query($requet4);

  $usr_skill3 = $bdd->query($requet5);

  $usr_photo = $bdd->query($requet6);

  $usr_service = $bdd->query($requet7);


?>
<a class="pull-left" href="#">
<img class="media-object dp img-circle" src="
<?php 
 	if($result = mysqli_query($bdd, $requet6))
	{
    		while($row = mysqli_fetch_assoc($result))
      		{
          	printf("%s", $row["photo_id"]);
      		}
  	}
?>
" style="width: 100px;height:100px;">
            </a>
            <div class="media-body">
                <h4 class="media-heading">
<?php; 
 	if($result = mysqli_query($bdd, $requet1))
	{
    		while($row = mysqli_fetch_assoc($result))
      		{
          	printf("%s", $row["name"]);
      		}
  	}
?> 
		<small> France</small></h4>
                <h5>
<?php
 	if($result = mysqli_query($bdd, $requet2))
	{
    		while($row = mysqli_fetch_assoc($result))
      		{
          	printf("%s", $row["job"]);
      		}
  	}
?> 
		at <a href="http://www.midrange.fr">
<?php
 	if($result = mysqli_query($bdd, $requet7))
	{
    		while($row = mysqli_fetch_assoc($result))
      		{
          	printf("%s", $row["service"]);
      		}
  	}
?> 
		</a></h5>
                <hr style="margin:8px auto">

                <span class="label label-default">
<?php
 	if($result = mysqli_query($bdd, $requet3))
	{
    		while($row = mysqli_fetch_assoc($result))
      		{
          	printf("%s", $row["skill"]);
      		}
  	}
?>
		</span>
                <span class="label label-default">
<?php
 	if($result = mysqli_query($bdd, $requet4))
	{
    		while($row = mysqli_fetch_assoc($result))
      		{
          	printf("%s", $row["skill2"]);
      		}
  	}
?>
		</span>
                <span class="label label-info">
<?php 
 	if($result = mysqli_query($bdd, $requet5))
	{
    		while($row = mysqli_fetch_assoc($result))
      		{
          	printf("%s", $row["skill3"]);
      		}
  	}
?>
		</span>
</div>
