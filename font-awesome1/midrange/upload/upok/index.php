<?php
# Directory Index (dirindex.php)

# Reads the current directory's content and displays it as
# HTML.  Useful if file listing is denied by the web server
# configuration.

# Installation:
# - Put in any directory you like on your PHP-capable webspace.
# - Rename to 'index.php' if you like it to get called if no
#   file is specified in the URL (e.g. www.example.com/files/).
# - Fit the design to your needs just using HTML and CSS.

# Version: 25-Mar-2002
# Copyright (c) 2002 Jochen Kupperschmidt
# Released under the terms of the GNU General Public License

# Configuration
$show_path = 1;   # Show local path.
$show_dotdirs = 1;   # Show '.' and '..'.

$path = substr($_SERVER['SCRIPT_FILENAME'], 0,
    strrpos($_SERVER['SCRIPT_FILENAME'], '/') + 1);
?>
<html>
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="../../css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="../../css/bootstrap-responsive.css">
    <link rel="stylesheet" type="text/css" href="../../css/home.css">
    <title>Fichiers partagés - Intranet</title>
    <link href="../../img/favicon.ico" rel="shortcut icon" type="image/vnd.microsoft.icon" />
</head>

<body>

<div>

<style type="text/css">
    body {
        align-content: center;
        font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
        font-size: 14px;
        line-height: 1.428571429;
        color: #333333;
        background-position:50% 75px;
        background-color: #ffffff;
    }

    body,
    th,
    td {
        background-color: #ffffff;
    }

    a:link {
        color: #666666;
        text-decoration: underline;
    }
    a:visited {
        color: #444444;
        text-decoration: underline;
    }
    a:hover {
        color: #666666;
        text-decoration: none;
    }
    a:active {
        color: #660000;
        text-decoration: none;
    }

    table {
        background-color: #00457B;
        border: #cccccc solid 1px;
        border-spacing: 1px;
        width: 480px;
        margin: auto;
        margin-top: 150px;
        text-align: center;
    }
    th {
        background-color: #00457B;
        color: #ffffff;
        font-size: 11pt;
        font-weight: bold;
        text-align: left;
        padding: 2px;
    }
    td {
        background-color: #eeeeee;
        color: #666666;
        font-size: 9pt;
        font-weight: normal;
        padding: 6px;
        margin: auto;
        text-align: center;
	background-color: #f5f5f5;
	border: 1px solid #e3e3e3;
	box-shadow: inset 0 0 6px #000000;
    }
</style>

<?php
$show_path = 1;   # Show local path.
$show_dotdirs = 0;   # Show '.' and '..'.

$path = substr($_SERVER['SCRIPT_FILENAME'], 0,
    strrpos($_SERVER['SCRIPT_FILENAME'], '/') + 1);
?>
<table cellspacing="1">
    <tr>
        <th><?php if ($show_path == 1) { echo "MIDRANGE UPLOAD FILE :"; } else { echo 'content of this directory'; } ?></th>
    </tr>
    <tr>
        <td>
            <?php
            $dirs = array();
            $files = array();

            $dir = dir($path);
            while ($entry = $dir->read()) {
                if (($entry != '.') and (substr($entry, -4) != '.php')) {
                    if (is_dir($entry)) {
                        if (($entry != '..') or $show_dotdirs){
                            $dirs[] = $entry;
                        }
                    } else {
                        $files[] = $entry;
                    }
                }
            }
            $dir->close();

            sort($dirs);
            foreach ($dirs as $dir) {
                printf('<strong>&lt;</strong> <a href="%s">%s</a> <strong>&gt;</strong><br />' . "\n", $dir, $dir);
            }

            sort($files);
            foreach ($files as $file) {
                printf('<a href="%s">%s</a><br />' . "\n", $file, $file);
            }
            ?>
        </td>
    </tr>
</table>
    <a href="../../home.php"><button style="margin-top: 50px; float: right">Retour</button></a>
</div>

</body>
</html>
