<?php

namespace App;

class MysqlConnection implements DatabaseConnectinonInterface
{
    public function connection()
    {
        echo "connection mysql";
    }
}