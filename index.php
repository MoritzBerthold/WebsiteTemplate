<!DOCTYPE html>

<?php 

$action = 'index';
$disallowed_paths = array('header', 'footer');
if(!empty($_GET["action"])){
    $tmp_action = basename($_GET['action']);
    if(!in_array($tmp_action, $disallowed_paths) && file_exists("templates/$tmp_action.htm"))
        $action = $tmp_action;
}

echo "
<html>
	<head>
		<link type='text/css' rel='stylesheet' href='default.css'/>
		<title>Title - $action</title>
	</head>
    <body>";

include("templates/header.htm");
include("templates/$action.htm");
include("templates/footer.htm");

echo "
    </body>
</html>";
?>