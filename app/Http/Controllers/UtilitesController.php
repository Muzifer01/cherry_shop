<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UtilitesController extends Controller
{
    public $components = [
        'categories' => [
            ["name" => "Zapato", "url" => "/"],
            ["name" => "Tenis", "url" => "/tenis"],
            ["name" => "Zapatillas", "url" => "/zapatillas"],
            ["name" => "Tacones", "url" => "/tacones"]
        ],
        'session' => [
            ["name" => "Iniciar Sesión", "url" => "/login"],
            ["name" => "Registrarse", "url" => "/register"]
        ],
        'brands' => [
            ["name" => "Nike", "url" => "/nike"],
            ["name" => "Adidas", "url" => "/adidas"],
            ["name" => "Puma", "url" => "/puma"],
            ["name" => "Reebok", "url" => "/reebok"],
            ["name" => "Vans", "url" => "/vans"],
            ["name" => "Converse", "url" => "/converse"],
            ["name" => "Fila", "url" => "/fila"],
            ["name" => "Asics", "url" => "/asics"],
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
            ["name" => "Facebook", "url" => "/facebook"],
            ["name" => "Instagram", "url" => "/instagram"],
            ["name" => "Twitter", "url" => "/twitter"],
            ["name" => "LinkedIn", "url" => "/linkedin"],
            ["name" => "YouTube", "url" => "/youtube"]
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