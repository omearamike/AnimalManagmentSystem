<?php

$t = gmdate("dmY-His");

header('Content-type: text/plain');
//open/save dialog box
header('Content-Disposition: attachment; filename="data_' . $t . '.csv"');
//read from server and write to buffer
readfile('tmp/data.csv');

 ?>
