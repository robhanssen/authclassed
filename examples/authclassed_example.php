<?php

define(VIEW,99);
define(ADMIN,1);
require_once("../AuthClassed.php");

$auth = new AuthClassed(VIEW);

echo "Congratulations " . 
     $auth->getUsername() . 
     " (userid: " . $auth->getUserid() . "). " . 
     "You have managed to log on to view this page. ";

if ($auth->isPermitted(ADMIN)) echo "You are the ADMIN! ";
else echo "You are not the ADMIN. ";

echo "Your permission level is ". $auth->getUserPerm() . ".";

?> 