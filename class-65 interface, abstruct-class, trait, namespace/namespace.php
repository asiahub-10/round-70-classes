<?php
require_once 'lib/user.php';
require_once 'classes/user.php';

$userCustom = new classes\custom\User();
echo $userCustom->name;

echo "<br>";

$userLib = new lib\User();
$userLib->text();

?>