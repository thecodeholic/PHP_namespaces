<?php
namespace ns1;
require_once 'ns.php';

use function \rand as globalRandom;

// Declare rand function

/*
// Global ns classes
$d = new DateTime();
$u = new User();
*/

// Global ns functions
// Use function with alis
echo globalRandom();
// Or
echo \rand();
