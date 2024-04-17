<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyController extends Controller
{
    public function getxinchao($ten, $namsinh)
    {
        return 'xin chao ban' . $ten . '<br>Co nam sinh la:' .$namsinh;
    }
}
