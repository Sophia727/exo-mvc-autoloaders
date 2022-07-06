<?php

namespace Sophia\Models;

use Sophia\lib\DBConnect;

class Model
{
    public function getName(){
        $connection = new DBConnect();
        $connection->getConnection();
        return "sophia";
    }
}
