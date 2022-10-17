<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function me(){
        return [
            'NIS' => 3103120142,
            'Name' => 'Muhammad Azka',
            'Phone' => '081326589510',
            'Class' => 'XII RPL 4'
        ];
    }
}