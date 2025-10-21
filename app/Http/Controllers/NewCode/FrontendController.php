<?php

namespace App\Http\Controllers\NewCode;

use App\Http\Controllers\Controller;
use App\Models\Banners\mainslider;
use App\Models\Category\CategoryMain;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FrontendController extends Controller
{
     public function vendorDokenGrid()
    {
        return view('frontend/vendor_doken_store_grid');
    }

    public function vendorDokenStore()
    {
         return view('frontend/vendor_doken_store');
    }

     public function demoEight()
    {
        $mainslider = mainslider::where('status', 1)->get();

        $topCategories = CategoryMain::select('category_main.id', 'category_main.category_main_name', 'category_main.category_main_image', DB::raw('COUNT(products.id) as product_count'))
            ->leftJoin('products', 'category_main.id', '=', 'products.category_main')
            ->where('category_main.status', 1)
            ->groupBy('category_main.id', 'category_main.category_main_name', 'category_main.category_main_image') // Include the columns needed for grouping
            ->orderByDesc('product_count')
            ->limit(7)
            ->get();
            
         return view('frontend/demo_eight',compact('mainslider','topCategories'));
    }

     public function productVar()
    {
         return view('frontend/product');
    }
}
