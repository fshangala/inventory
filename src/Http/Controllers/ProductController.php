<?php

namespace Fshangala\Auth2Ation\Http\Controllers;

use App\Http\Controllers\Controller;
use Fshangala\Inventory\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

class ProductController extends Controller
{
    function __construct()
    {
        $this->middleware('auth');
    }

    public function create(Request $request)
    {
        $this->validate($request, [
            'name'=>'required|unique:products',
            'description'=>'required'
        ]);
        $entry = Product::create($request->all());
        return response($entry);
    }
}