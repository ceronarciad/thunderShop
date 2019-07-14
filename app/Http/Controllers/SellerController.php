<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Support\Facades\Hash;

class SellerController extends Controller
{

    public function create()
    {
        return view('sellers.create');
    }

}