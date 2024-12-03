<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

abstract class Controller
{
    public function getNames()
    {
        $names = ["Игнат", "Ольга", "Дмитрий", "Екатерина"];
        return response()->json($names);
    }
}

?>


