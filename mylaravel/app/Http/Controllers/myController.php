<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class myController extends Controller
{
    public function generateTable(Request $request)
    {
        $number = $request->input('number');
        $table = [];

        if (is_numeric($number)) {
            for ($i = 1; $i <= 12; $i++) {
                $table[] = $number . ' x ' . $i . ' = ' . ($number * $i);
            }
        }

        return view('form', compact('number', 'table'));
    }
}
