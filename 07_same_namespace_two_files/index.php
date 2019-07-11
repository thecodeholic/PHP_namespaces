<?php
namespace ns1\subns1;

require_once 'ns.php';

// Access with relative namespace
$u = new subns2\User();

// Or with absolute one
$u = new \ns1\subns1\subns2\User();
