<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function search(Request $request)
    {
        $query = $request->input('search'); // важно: 'search', а не 'query'

        $products = Product::where('title', 'like', '%' . $query . '%')
            ->orWhere('comment', 'like', '%' . $query . '%')
            ->get();

        return response()->json([
            'query' => $query,
            'products' => $products
        ]);
    }
}
