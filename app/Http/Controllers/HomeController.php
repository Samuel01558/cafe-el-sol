<?php

namespace App\Http\Controllers;

class HomeController extends Controller
{
    public function index()
{
    $message = "¡Bienvenido a Café del Sol!<br>Disfruta de nuestros deliciosos cafés y postres.";
    return view('home', compact('message'));
}

    public function menu() {
        $products = [
            (object) ['name' => 'Café Americano', 'price' => 2.50],
            (object) ['name' => 'Café Latte', 'price' => 3.50],
            (object) ['name' => 'Café Mocha', 'price' => 4.00],
            (object) ['name' => 'Té Verde', 'price' => 2.00],
            (object) ['name' => 'Pastel de Chocolate', 'price' => 3.00],
            (object) ['name' => 'Galletas de Avena', 'price' => 1.50],
        ];
        return view('menu', compact('products'));
    }
}
