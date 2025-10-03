<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExampleController extends Controller
{
    public function index()
    {
        // PHP code runs here on the server
        $greeting = "Hello from PHP!";
        $currentTime = date('F j, Y - g:i A');
        $randomNumber = rand(1, 100);
        
        // PHP array
        $items = ['Apple', 'Banana', 'Orange', 'Grape', 'Mango'];
        
        // PHP calculation
        $sum = 0;
        for ($i = 1; $i <= 10; $i++) {
            $sum += $i;
        }
        
        // Pass data to the view
        return view('example', [
            'greeting' => $greeting,
            'currentTime' => $currentTime,
            'randomNumber' => $randomNumber,
            'items' => $items,
            'sum' => $sum
        ]);
    }
}
