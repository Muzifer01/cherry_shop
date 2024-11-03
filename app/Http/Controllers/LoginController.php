<?php

namespace App\Http\Controllers;

use CodersFree\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;

class LoginController extends UtilitesController
{

    public function index()
    {
        $carrousel = [
            ["name" => "Eficiencia y compromiso", "url" => "https://imgs.search.brave.com/9sIS6L23yGe1x1EFM7OK_um0MbHnblMOX5RdllwhDxY/rs:fit:860:0:0:0/g:ce/aHR0cHM6Ly9zaWVt/cHJlYXV0by5jb20v/d3AtY29udGVudC91/cGxvYWRzL3NpdGVz/LzkvMjAyMy8wOS90/YWxsZXItYXV0b3Mt/Y2hvY2Fkb3MtcmVw/YXJhY2lvbi5qcGc_/cmVzaXplPTY3NSw0/MjkmcXVhbGl0eT04/MA"],
            ["name" => "Siempre a la vanguardia", "url" => "https://hips.hearstapps.com/hmg-prod/images/an-aramisauto-technician-works-on-refurbishing-a-car-at-the-news-photo-1574958851.jpg"]
        ];
        $services = [
            ["name" => "Mantenimiento de vehículos", "description" => "Ofrecemos servicios de mantenimiento de vehículos para garantizar su seguridad y confort."],
            ["name" => "Reparación de vehículos", "description" => "Nuestro equipo de expertos en reparación de vehículos está capacitado para solucionar cualquier problema con eficacia."],
            ["name" => "Venta de vehículos", "description" => "En nuestra concesionaria, puedes encontrar una amplia gama de vehículos nuevos y usados de las marcas más reconocidas."],
            ["name" => "Servicio de alquiler", "description" => "Ofrecemos servicios de alquiler de vehículos para satisfacer tus necesidades de transporte."]
        ];
        $cards = [
            [
                "src" => "https://imgs.search.brave.com/VXFeOQESbEeoM3Fgg0dtMGu_gw5a8KyZ78wUjBqeJRs/rs:fit:500:0:0:0/g:ce/aHR0cHM6Ly91cGxv/YWQud2lraW1lZGlh/Lm9yZy93aWtpcGVk/aWEvY29tbW9ucy90/aHVtYi83Lzc3L0R1/c3RfamFja2V0Lmpw/Zy81MTJweC1EdXN0/X2phY2tldC5qcGc",
                "card-title" => "Libro Disponible",
                "card-text" => "Contenido del Libro",
            ],
            [
                "src" => "https://imgs.search.brave.com/VXFeOQESbEeoM3Fgg0dtMGu_gw5a8KyZ78wUjBqeJRs/rs:fit:500:0:0:0/g:ce/aHR0cHM6Ly91cGxv/YWQud2lraW1lZGlh/Lm9yZy93aWtpcGVk/aWEvY29tbW9ucy90/aHVtYi83Lzc3L0R1/c3RfamFja2V0Lmpw/Zy81MTJweC1EdXN0/X2phY2tldC5qcGc",
                "card-title" => "Libro Disponible",
                "card-text" => "Contenido del Libro",
            ],
            [
                "src" => "https://imgs.search.brave.com/VXFeOQESbEeoM3Fgg0dtMGu_gw5a8KyZ78wUjBqeJRs/rs:fit:500:0:0:0/g:ce/aHR0cHM6Ly91cGxv/YWQud2lraW1lZGlh/Lm9yZy93aWtpcGVk/aWEvY29tbW9ucy90/aHVtYi83Lzc3L0R1/c3RfamFja2V0Lmpw/Zy81MTJweC1EdXN0/X2phY2tldC5qcGc",
                "card-title" => "Libro Disponible",
                "card-text" => "Contenido del Libro",
            ],
            [
                "src" => "https://imgs.search.brave.com/VXFeOQESbEeoM3Fgg0dtMGu_gw5a8KyZ78wUjBqeJRs/rs:fit:500:0:0:0/g:ce/aHR0cHM6Ly91cGxv/YWQud2lraW1lZGlh/Lm9yZy93aWtpcGVk/aWEvY29tbW9ucy90/aHVtYi83Lzc3L0R1/c3RfamFja2V0Lmpw/Zy81MTJweC1EdXN0/X2phY2tldC5qcGc",
                "card-title" => "Libro Disponible",
                "card-text" => "Contenido del Libro",
            ],
            [
                "src" => "https://imgs.search.brave.com/VXFeOQESbEeoM3Fgg0dtMGu_gw5a8KyZ78wUjBqeJRs/rs:fit:500:0:0:0/g:ce/aHR0cHM6Ly91cGxv/YWQud2lraW1lZGlh/Lm9yZy93aWtpcGVk/aWEvY29tbW9ucy90/aHVtYi83Lzc3L0R1/c3RfamFja2V0Lmpw/Zy81MTJweC1EdXN0/X2phY2tldC5qcGc",
                "card-title" => "Libro Disponible",
                "card-text" => "Contenido del Libro",
            ],
            [
                "src" => "https://imgs.search.brave.com/VXFeOQESbEeoM3Fgg0dtMGu_gw5a8KyZ78wUjBqeJRs/rs:fit:500:0:0:0/g:ce/aHR0cHM6Ly91cGxv/YWQud2lraW1lZGlh/Lm9yZy93aWtpcGVk/aWEvY29tbW9ucy90/aHVtYi83Lzc3L0R1/c3RfamFja2V0Lmpw/Zy81MTJweC1EdXN0/X2phY2tldC5qcGc",
                "card-title" => "Libro Disponible",
                "card-text" => "Contenido del Libro",
            ],
            [
                "src" => "https://imgs.search.brave.com/VXFeOQESbEeoM3Fgg0dtMGu_gw5a8KyZ78wUjBqeJRs/rs:fit:500:0:0:0/g:ce/aHR0cHM6Ly91cGxv/YWQud2lraW1lZGlh/Lm9yZy93aWtpcGVk/aWEvY29tbW9ucy90/aHVtYi83Lzc3L0R1/c3RfamFja2V0Lmpw/Zy81MTJweC1EdXN0/X2phY2tldC5qcGc",
                "card-title" => "Libro Disponible",
                "card-text" => "Contenido del Libro",
            ],
            [
                "src" => "https://imgs.search.brave.com/VXFeOQESbEeoM3Fgg0dtMGu_gw5a8KyZ78wUjBqeJRs/rs:fit:500:0:0:0/g:ce/aHR0cHM6Ly91cGxv/YWQud2lraW1lZGlh/Lm9yZy93aWtpcGVk/aWEvY29tbW9ucy90/aHVtYi83Lzc3L0R1/c3RfamFja2V0Lmpw/Zy81MTJweC1EdXN0/X2phY2tldC5qcGc",
                "card-title" => "Libro Disponible",
                "card-text" => "Contenido del Libro",
            ],
        ];

        $content = view(
            "index", 
            [
                'carrousel' => $carrousel, 
                'services' => $services,
                'cards' => $cards
            ])->render();

        return view('app', [
            'header' => $this->header(),
            'content' => $content, 
            'footer' => $this->footer()
        ]);
    }
    public function login()
    {
        $content = view("login")->render();
        return view('app', [
            'header' => $this->header(),
            'content' => $content, 
            'footer' => $this->footer()
        ]);
    }

    public function register()
    {
        $content = view("register")->render();
        return view('app', [
            'header' => $this->header(),
            'content' => $content, 
            'footer' => $this->footer()
        ]);
    }

    public function car_shop($arg)
    {
        $content = view("components.car_shop", ['arg' => $arg])->render();
        return view('app', [
            'header' => $this->header(),
            'content' => $content, 
            'footer' => $this->footer()
        ]);
    }

    
}
