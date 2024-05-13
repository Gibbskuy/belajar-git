<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Mycontroller extends Controller
{
    public function introduce(){
        $data = [
            "nama"=>"Gibran",
            "alamat"=>"Bandung",
            "agama"=>"islam",
            "jk"=>"L",
            "hobi"=>[
                "Futsal", "Minsoc", "Main Game",
            ],
        ];
            return view('latihan.perkenalan', compact('data'));
    }

    public function animals()
    {
        $animal = [
            "Lion", "Crocodile", "Rabbit", "Eagle",
        ];
        return view('latihan.animal', ['hewan' => $animal]);
    }
}
