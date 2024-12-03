<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NameController extends Controller
{
    public function getNames()
    {
        $names = ["Игнат", "Ольга", "Дмитрий", "Екатерина"];
        return response()->json($names);
    }
}

?>
