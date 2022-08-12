<?php

$numbers = [1, 2, 3, 4, 5];
$filename = 'test.text';

$f = fopen($filename, 'wb');
if (!$f) {
    die('Error creating the file ' . $filename);
}

foreach ($numbers as $number) {
    fputs($f, $number);
}
fclose($f);

header("Location: https://getudid2.herokuapp.com/test.txt".$UDID, TRUE, 301);