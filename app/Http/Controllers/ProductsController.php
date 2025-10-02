<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductsController extends Controller
{
 public function index() {
        $pass_variable = 'value'; // Example variable
        $x=18;
        // return view('products.index')
        //     ->with('pass_variable', $pass_variable)
        //     ->with('x', $x);
            $products1 = [
            "Laptop",
            "Smartphone",
            "Tablet",
            "Headphone"
        ];
//         return view('products.index', array_merge(
//     ['products1' => $products1],
//     ['products2' => ['iphone' => 1700, 'android' => 1000]],
//     compact('pass_variable', 'x')
// ));

return view('products.index', [
    'products1' => $products1,
    'products2' => ['iphone' => 1700, 'android' => 1000],
    'pass_variable' => $pass_variable,
    'x' => $x
]);
// print_r(route('proudct'));
// return view('products.index');
    }}
