<?php require_once "phpuploader/include_phpuploader.php"?>
<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
	<title>Partage de fichier - Intranet</title>
	<link rel="stylesheet" href="../css/home.css" media="screen">
	<link rel="stylesheet" href="../css/connect.css" media="screen">
	<link href="demo.css" rel="stylesheet" type="text/css" />
	<link href="../img/favicon.ico" rel="shortcut icon" type="image/vnd.microsoft.icon" />
  	<link rel="stylesheet" href="http://code.jquery.com/ui/1.10.4/themes/smoothness/jquery-ui.css">
  	<script src="http://code.jquery.com/jquery-1.9.1.js"></script>
  	<script src="http://code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
    	<meta charset="utf-8">
</head>
<body>

	<div class="demo" style="margin-top: 200px;">
        <img src="../img/logo.png" style="height: 30%; width: auto; float: right">
        <h2>MIDRANGE Upload</h2>
        <p> MIDRANGE Upload control (Allowed file types: <span style="color:red">jpeg,jpg,gif,png,zip,doc,pdf,docx,xls,xlsx</span>).
		<p>
		<?php
			$uploader=new PhpUploader();
			
			$uploader->MultipleFilesUpload=true;
			$uploader->InsertText="Upload File (Max 100M)";
			
			$uploader->MaxSizeKB=102400000;
			$uploader->AllowedFileExtensions="jpeg,jpg,gif,png,zip,doc,pdf,docx,xls,xlsx";
			
			//Where'd the files go?
			$uploader->SaveDirectory="./upok";
			
			$uploader->Render();
		?>
		</p>

		
	<script type='text/javascript'>
	function CuteWebUI_AjaxUploader_OnTaskComplete(task)
	{
		alert(task.FileName + " is uploaded!");
	}
	</script>
        <a href="./upok"><button style="margin-top: 0px; float: right">FICHIER UP</button></a>
	</div>
    <a href="../home.php"><button style="margin-top: 50px; float: right">Retour</button></a>
    <div>
    <script src="../js/bootstrap.min.js"></script>
</body>
</html>
