<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Support\Facades\Hash;

class StoreController extends Controller
{

    public function create()
    {
        return view('store.products.create');
    }

    public function createCatalog()
    {
        return view('store.catalogs.create');
    }


}