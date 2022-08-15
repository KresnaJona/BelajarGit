<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DeadController extends Controller
{
    function index()
    {
        $NamaDepan = 'Kresna';
        $NamaBelakang = 'Wahyu';
        $data = ['NamaDepan' => $NamaDepan, 'NamaBelakang' => $NamaBelakang];
        return view('index', $data);
        
    }

    function index2()
    {
        $ItemName = 'Sepatu';
        $ItemPrice = 'Rp. 2000.000';
        $data = [
        'Item_name' => $ItemName,
        'Item_price' => $ItemPrice
        ];

        return view('index2', $data);
        
    }
}
