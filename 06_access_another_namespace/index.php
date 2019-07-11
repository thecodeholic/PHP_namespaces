<?php
namespace ns2;

require_once 'ns.php';

// This won't work
$u = new ns1\subns1\subns2\User();

// This will work
$u = new \ns1\subns1\subns2\User();
