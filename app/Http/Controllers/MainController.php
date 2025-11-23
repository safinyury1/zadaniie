<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function showIndex()
    {
        return view('home');
    }

    public function showArray()
    {
        $array = [
            ['id' => 1, 'title' => 'Попуг 1', 'price' => 500, 'path' => '1.png'],
            ['id' => 2, 'title' => 'Попуг 2', 'price' => 750, 'path' => '1.png'],
            ['id' => 3, 'title' => 'Попуг 3', 'price' => 1200, 'path' => '2.png'],
            ['id' => 4, 'title' => 'Попуг 4', 'price' => 300, 'path' => '2.png'],
            ['id' => 5, 'title' => 'Попуг 5', 'price' => 950, 'path' => '3.png'],
            ['id' => 6, 'title' => 'Попуг 6', 'price' => 1500, 'path' => '3.png'],
        ];

        return view('array', compact('array')); /* возвращает представление вместе с данными из контроллера */
    }
}