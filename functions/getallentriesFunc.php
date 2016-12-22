<?php
namespace App;
require_once __DIR__ . '/Functions.php';

// var_dump (Functions::make()->getAllTestEntries());
$array = Functions::make()->getAllTestEntries();
echo json_encode($array);
