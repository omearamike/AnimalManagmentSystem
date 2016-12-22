<?php

namespace App;

require_once __DIR__ . '/DatabaseConnection.php';

use \PDO;
use App\DatabaseConnection;
class Test
{
    private $request;

    public function __construct($post = '{}')
    {
        $this->request = json_decode($post);
    }

    public static function make($post = '{}')
    {
        return new self($post);
    }

    public function create()
    {
        $dbc = new DatabaseConnection();

        // uncomment for errors in php error log
        $dbc->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $statement = $dbc->prepare("INSERT INTO test VALUES (null, :valueOne, :valueTwo)");
        $statement->bindParam(':valueOne', $this->request->valueOne);
        $statement->bindParam(':valueTwo', $this->request->valueTwo);
        $statement->execute();
        $dbc = null;

        return '{"message": "New values \"' . $this->request->valueOne . '\" and \"' . $this->request->valueTwo . '\" have been saved." }';
    }

    public function update()
    {
       $dbc = new DatabaseConnection();

        // uncomment for errors in php error log
        //$dbc->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $statement = $dbc->prepare('UPDATE test SET valueOne = :valueOne, valueTwo = :valueTwo WHERE id = :id');
        $statement->bindParam(':valueOne', $this->request->valueOne, PDO::PARAM_STR);
        $statement->bindParam(':valueTwo', $this->request->valueTwo, PDO::PARAM_STR);
        $statement->bindParam(':id', $this->request->id, PDO::PARAM_INT);
        $statement->execute();
        $dbc = null;

        return '{"message": "The values \"' . $this->request->valueOne . '\" and \"' . $this->request->valueTwo . '\" have been updated." }';
    }

    public function delete()
    {
        $dbc = new DatabaseConnection();

        // uncomment for errors in php error log
        //$dbc->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $statement = $dbc->prepare("DELETE FROM test WHERE id = :id");
        $statement->bindParam(':id', $this->request->id, PDO::PARAM_INT);
        $statement->execute();
        $dbc = null;

        return '{"message": "The values have been deleted." }';
    }

    public function getAllTestEntries()
    {
        $dbc = new DatabaseConnection();

        // uncomment for errors in php error log
        //$dbc->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $statement = $dbc->prepare('SELECT * FROM test ORDER BY id ASC');
        $statement->execute();
        return $statement->fetchAll(PDO::FETCH_ASSOC);
    }
}
