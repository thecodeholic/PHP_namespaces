<?php
require_once 'ns.php';

use ns1\subns1\subns2\User;
$u = new User();
// Or
$u = new \ns1\subns1\subns2\User();
// Or
use ns1\subns1\subns2;
$u = new subns2\User();
