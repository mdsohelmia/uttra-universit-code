<?php

namespace App;

class DB implements DbInterface
{
    public function __construct(DatabaseConnectinonInterface $dbConnection)
    {

        $dbConnection->connection();
    }

    public function all($table = null)
    {
        echo $table.'<br/>';
    }

    public function find($table, $id)
    {
        echo "find";
    }

    //public function __destruct()
    //{
    //    echo "hi <br/>";
    //}
}