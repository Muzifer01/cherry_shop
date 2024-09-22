<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index()
    {
        $categories = [
            ["name" => "Zapato", "url" => "/"],
            ["name" => "Tenis", "url" => "/tenis"],
            ["name" => "Zapatillas", "url" => "/zapatillas"],
            ["name" => "Tacones", "url" => "/tacones"]
        ];

        $header = view("partials.header", ['categories' => $categories])->render();
        $content = view("login")->render();

        return view('app', ['header' => $header,'content' => $content]);
    }
}
