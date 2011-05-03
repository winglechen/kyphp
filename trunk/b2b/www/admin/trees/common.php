<?php
/********************************************
*
*	Filename:	common.php
*	Author:		Ahmet Oguz Mermerkaya
*	E-mail:		ahmetmermerkaya@hotmail.com
*	Begin:		Tuesday, Feb 24, 2009  09:50
*
*********************************************/

require_once('includes/config.php');
require_once('includes/functions.php');

$db = NULL;
$treeManager = NULL;

require_once('includes/classes/Mysql.php');
require_once('includes/classes/DBTreeManager.php');
$db = new MySQL($dbHost, $dbUsername, $dbPassword, $dbName);	
$treeManager = new DBTreeManager($db);
?>
