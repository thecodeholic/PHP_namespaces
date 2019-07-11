<?php
require_once 'ns.php';
/*
$object = new TheCodeholic\SomeSubNamespace1\SubNamespace2\MyAwesomeClassWhichDoesSomethingAwesome();
// Or
use TheCodeholic\SomeSubNamespace1\SubNamespace2\MyAwesomeClassWhichDoesSomethingAwesome;
$object = new MyAwesomeClassWhichDoesSomethingAwesome();
// Or
use TheCodeholic\SomeSubNamespace1\SubNamespace2\MyAwesomeClassWhichDoesSomethingAwesome as MyClass;
$object = new MyClass();
*/

use TheCodeholic\SomeSubNamespace1\SubNamespace2;
use TheCodeholic\SomeSubNamespace1\SubNamespace2\MyAwesomeClassWhichDoesSomethingAwesome as MyClass;
$object = new MyClass();
$u = new SubNamespace2\User();


