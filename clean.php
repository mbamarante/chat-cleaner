<?php 

$re = '/^(?:[\t ]*(?:\r?\n|\r))+/m';
$str = htmlspecialchars($_POST["chat"]);

$subst = '';

$str2 = preg_replace($re, $subst, $str);

$re = '/^[^\n]*\n([^\n]*)/m';

$subst = '\\1';

$result = preg_replace($re, $subst, $str2);

echo "<pre>" . strtolower($result) . "</pre>";