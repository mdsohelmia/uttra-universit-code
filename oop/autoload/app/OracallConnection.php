<?php
namespace App;
use App\DatabaseConnectinonInterface;

class OracallConnection implements DatabaseConnectinonInterface
{
    public function connection()
    {
        echo "oracoll";
    }
}