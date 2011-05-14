<?php
/**************************************
 *   File Name: config.php
 *   Begin: Thursday, June, 06, 2006
 *   Author: Ahmet Oguz Mermerkaya
 *   Email: ahmetmermerkaya@hotmail.com
 ***************************************/

define ("DATABASE_PLATFORM", 0); // Don't edit
define ("FILE_SYSTEM_PLATFORM", 1); // Don't edit


// set database host
$dbHost = "localhost";
//set database user name
$dbUsername = "root";
// set password to connect to database
$dbPassword = "";
// set database name
$dbName = "b2b";
// set database table prefix
$table = isset($_GET['table']) ? $_GET['table'] : 'tree';
define ("TREE_TABLE_PREFIX", $table);

define ("SUCCESS", 1);  // Don't edit
define ("FAILED", -1);  // Don't edit
define ("FAILED_FILE_WITH_SAME_NAME_EXIST", -2); // Don't edit, it is only used in FILE_SYSTEM_PLATFORM

error_reporting(0);
?>
