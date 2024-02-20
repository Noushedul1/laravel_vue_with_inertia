<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;

class HomeController extends Controller
{
    public function HomePage() {
        $a = 20;
        $b = 30;
        $sum = $a + $b;
        return Inertia::render('Home',['sum'=>$sum])
        ->withViewData(['title'=>'Home page']);
        // form withViewData we can pass seo property in app.blade.php
    }
    public function ProductPage() {
        return Inertia::render('Product')->withViewData(['title'=>'Product page']);
    }
}
