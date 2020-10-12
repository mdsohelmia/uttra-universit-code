<?php

namespace App;

interface DbInterface
{
    public function all($table);

    public function find($table, $id);
}