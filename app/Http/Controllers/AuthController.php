<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function me(){
        return[
            'Nis' => 3103120149,
            'Nama' => 'Muhammad Rifki Fadhilah',
            'No.telp' => '082322304172',
            'Kelas' => 'XII RPL 5'
        ];
    }
}
