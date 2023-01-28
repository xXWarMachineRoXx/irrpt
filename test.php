<?php

echo $_SERVER['DOCUMENT_ROOT'];
$GLOBALS['absolute_path'] = __DIR__;
preg_replace('/[\\\\\\/]+/', '/', '/' . substr(__DIR__, strlen($_SERVER['DOCUMENT_ROOT'])) . '/');
// echo PROJECT_DIR;
echo "\n";
echo $_SERVER['DOCUMENT_ROOT'];

?>