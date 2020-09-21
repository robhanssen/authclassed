<?php

define(VIEW,99);
require_once("../AuthClassed.php");
require_once("../AuthClassedEdit.php");

$auth = new AuthClassed(VIEW);

$user = new AuthClassedEdit($auth);

?> 