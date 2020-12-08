<?php

$filename = 'file.txt';
if(file_exists($filename)) $num = file_get_contents($filename);
isset($num) ? $num++ : $num = 0;
file_put_contents($filename, $num);

$pic = "pic\bbyYoda.jpg";