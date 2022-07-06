<?php

namespace Sophia\Controllers;

use Sophia\Models\Model;

class Controller
{
    public function index(){
        $m= new Model();
        $name= $m->getName();
        
        require_once "Views/home.php";//charge le contenu
    
    }
}
