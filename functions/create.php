<?php
namespace App;
require_once __DIR__ . '/Functions.php';

if (!isset($_POST)) {
    http_response_code(400);
    return '{ "message": "Received no POST values" }';
} else {
    print Functions::make(file_get_contents('php://input'))->create();
    return;
}
