<?php

namespace App\Service;

class ServeiDadesEquips
{
    private $equipos = [
        [
            "codi" => 1,
            "nom" => "Equip Roig",
            "cicle" => "DWES",
            "curs" => "23/24",
            "membres" => ["Pepe", "Nico", "Joan", "Maria"]
        ],
        [
            "codi" => 2,
            "nom" => "Equip Blau",
            "cicle" => "DAM",
            "curs" => "23/24",
            "membres" => ["Sergio", "Carlos", "Laura", "Nicolas"]
        ],
        [
            "codi" => 3,
            "nom" => "Equip Verd",
            "cicle" => "DAW",
            "curs" => "23/24",
            "membres" => ["Joan", "Maria", "Juan", "Miguel"]
        ],
        [
            "codi" => 4,
            "nom" => "Equip Groc",
            "cicle" => "ASIX",
            "curs" => "23/24",
            "membres" => ["Carmen", "Clau", "Maria", "Adri"]
        ],
    ];

    public function get()
    {
        return $this->equipos;
    }
}
?>