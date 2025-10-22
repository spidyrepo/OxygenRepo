<?php

namespace App\Http\Controllers\NewCode;

use App\Http\Controllers\Controller;
use App\Models\Banners\mainslider;
use App\Models\Category\CategoryMain;
use Illuminate\Http\Request;
use App\Models\vendor\vendorcreate;
use App\Models\Category\CategorySub;
use Illuminate\Support\Facades\DB;

class FrontendController extends Controller
{
     public function vendorDokenGrid()
     {

          $vendorcreate = vendorcreate::get();
          // dd($vendorcreate);
          return view('frontend/vendor_doken_store_grid', compact('vendorcreate'));
     }





     public function vendorDetails($id)
     {


          //  dd($product);

          $products = DB::table('products')
               ->leftJoin('products_details', 'products.id', '=', 'products_details.products_id')
               ->leftJoin('category_sub', 'products.category_sub', '=', 'category_sub.id')
               ->select(
                    DB::raw('MIN(products_details.id) as id'),  // Get the minimum (first) products_details.id
                    'products_details.products_id',
                    'category_sub.category_sub_name',
                    'products.product_name',
                    'products.product_image',
                    'products_details.retail_price',
                    'products_details.selling_price'
               )
               ->where('products.login_id', $id)

               ->where('products.status', 1)
               ->groupBy(
                    'products_details.products_id', // Group by the product to avoid duplicate product rows
                    'category_sub.category_sub_name',
                    'products.product_name',
                    'products.product_image',
                    'products_details.retail_price',
                    'products_details.selling_price'
               )->get();

          $vendorcreate = vendorcreate::where('user_id', $id)->first();
          $subid = explode(',', $vendorcreate->sub_category_ids); // This converts to an array

          // Fetch categories that match any of the sub_category_ids
          $Categorysub = CategorySub::whereIn('id', $subid)->get();
          return view('frontend/vendor_doken_store')
               ->with([
                    "products" => $products,
                    "Categorysub" => $Categorysub,
                    "vendordetails" => $vendorcreate
               ]);
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

          return view('frontend/demo_eight', compact('mainslider', 'topCategories'));
     }

     public function productVar()
     {
          return view('frontend/product');
     }
}
