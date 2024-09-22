<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UtilitesController extends Controller
{
    public $components = [
        'categories' => [
            ["name" => "Zapato", "url" => "car_shop/zapato"],
            ["name" => "Tenis", "url" => "car_shop/tenis"],
            ["name" => "Zapatillas", "url" => "car_shop/zapatillas"],
            ["name" => "Tacones", "url" => "car_shop/tacones"]
        ],
        'session' => [
            ["name" => "Iniciar Sesión", "url" => "/login"],
            ["name" => "Registrarse", "url" => "/register"]
        ],
        'brands' => [
            ["name" => "Nike", "url" => "car_shop/nike"],
            ["name" => "Adidas", "url" => "car_shop/adidas"],
            ["name" => "Puma", "url" => "car_shop/puma"],
            ["name" => "Reebok", "url" => "car_shop/reebok"],
            ["name" => "Vans", "url" => "car_shop/vans"],
            ["name" => "Converse", "url" => "car_shop/converse"],
            ["name" => "Fila", "url" => "car_shop/fila"],
            ["name" => "Asics", "url" => "car_shop/asics"],
            ["name" => "Registrarse", "url" => "/register"]
        ]
    ];
    
    public $footer = [
        'policies' => [
            ["name" => "Política de Privacidad", "url" => "/privacy"],
            ["name" => "Términos y Condiciones", "url" => "/terms"]
        ],
        'contact' => [
            ["name" => "Teléfono:"],
            ["name" => "Email:"],
            ["name" => "Dirección:"]
        ],
        'social' => [
            ["name" => "Facebook", "url" => "https://www.facebook.com/"],
            ["name" => "Instagram", "url" => "https://www.instagram.com/"],
            ["name" => "Twitter", "url" => "https://www.twitter.com/"], 
            ["name" => "LinkedIn", "url" => "https://www.linkedin.com/"],
            ["name" => "YouTube", "url" => "https://www.youtube.com/"]
        ],
        'legal' => [
            [
                "name" => "Aviso Legal: La información proporcionada en este sitio web es únicamente con fines informativos. 
                No debe considerarse como asesoramiento profesional o legal. 
                Para obtener asesoramiento especializado, póngase en contacto con nuestros expertos."
            ],
        ],
        'opening_hours' => [
            ["name" => "Lunes a Viernes"],
            ["name" => "Sábados"],
            ["name" => "Domingos"]
        ]
    ];
    public function footer()
    {
        return view("partials.footer", $this->footer)->render();
    }
    public function header()
    {
        return view("partials.header", $this->components)->render();
    }
}