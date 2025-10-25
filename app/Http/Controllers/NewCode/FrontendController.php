<?php

namespace App\Http\Controllers\NewCode;

use App\Http\Controllers\Controller;
use App\Models\Banners\mainslider;
use App\Models\Category\CategoryMain;
use Illuminate\Http\Request;
use App\Models\vendor\vendorcreate;
use App\Models\Category\CategorySub;
use App\Models\Products\Products;
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

          // $products = DB::table('products')
          //      ->leftJoin('products_details', 'products.id', '=', 'products_details.products_id')
          //      ->leftJoin('category_sub', 'products.category_sub', '=', 'category_sub.id')
          //      ->select(
          //           DB::raw('MIN(products_details.id) as id'),  // Get the minimum (first) products_details.id
          //           'products_details.products_id',
          //           'category_sub.category_sub_name',
          //           'products.product_name',
          //           'products.product_image',
          //           'products_details.retail_price',
          //           'products_details.selling_price'
          //      )
          //      // ->where('products.login_id', $id)
          //      ->where('products.vendor_id', $id)

          //      ->where('products.status', 1)
          //      ->groupBy(
          //           'products_details.id', 
          //           // 'products.id', 
          //           'products_details.products_id', 
          //           'category_sub.category_sub_name',
          //           'products.product_name',
          //           'products.product_image',
          //           'products_details.retail_price',
          //           'products_details.selling_price'
          //      )->get();



          $products = DB::table('products')
               ->leftJoin('products_details', 'products.id', '=', 'products_details.products_id')
               ->leftJoin('category_sub', 'products.category_sub', '=', 'category_sub.id')
               ->select(
                    'products.id',
                    'products.product_name',
                    'products.product_image',
                    'category_sub.category_sub_name',
                    DB::raw('MIN(products_details.retail_price) as retail_price'),
                    DB::raw('MIN(products_details.selling_price) as selling_price')
               )
               ->where('products.vendor_id', $id)
               ->where('products.status', 1)
               ->groupBy(
                    'products.id',
                    'products.product_name',
                    'products.product_image',
                    'category_sub.category_sub_name'
               )
               ->get();

               // dd( $products);

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

     public function getSpecificProduct($id='')
     {
          $productsData = Products::from('products as p')
               ->leftJoin('category as c', 'c.id', '=', 'p.category')
               ->leftJoin('category_sub as cs', 'cs.id', '=', 'p.category_sub')
               ->leftJoin('category_main as cm', 'cm.id', '=', 'p.category_main')
               ->leftJoin('products_details as pd', 'pd.products_id', '=', 'p.id')
               ->leftJoin('vendor_details as vp', 'vp.id', '=', 'p.vendor_id');
          if($id != '')
          {
              $productsData =$productsData->where('p.id', $id);
          }               
               $productsData =$productsData->select(
                    'p.id',
                    'p.product_name',
                    'p.product_image',
                    'pd.selling_price',
                    'c.category_name',
                    'cs.category_sub_name',
                    'cm.category_main_name',
                    'vp.shop_name',
                    'pd.attributevalue2 as size',
                    'pd.attributevalue1 as color',
                    'pd.product_detail_image'
               )->get();
               $resultArr = [];
          foreach ($productsData as $val) {
               $productId = $val->id;
               if (!isset($resultArr[$productId])) {
                    $resultArr[$productId] = [
                         'id'                => $val->id,
                         'product_name'      => $val->product_name,
                         'product_image'     => $val->product_image,
                         'selling_price'     => $val->selling_price,
                         'category_name'     => $val->category_name,
                         'category_sub_name' => $val->category_sub_name,
                         'category_main_name'=> $val->category_main_name,
                         'shop_name'         => $val->shop_name,                        
                    ];
               }
          }

          return $resultArr;
     }

     public function getProduct($id = '')
     {

          $productsData = Products::from('products as p')
               ->leftJoin('category as c', 'c.id', '=', 'p.category')
               ->leftJoin('category_sub as cs', 'cs.id', '=', 'p.category_sub')
               ->leftJoin('category_main as cm', 'cm.id', '=', 'p.category_main')
               ->leftJoin('products_details as pd', 'pd.products_id', '=', 'p.id')
               ->leftJoin('vendor_details as vp', 'vp.id', '=', 'p.vendor_id');
          if($id != '')
          {
              $productsData =$productsData->where('p.id', $id);
          }               
               $productsData =$productsData->select(
                    'p.id',
                    'p.product_name',
                    'p.product_image',
                    'pd.selling_price',
                    'c.category_name',
                    'cs.category_sub_name',
                    'cm.category_main_name',
                    'vp.shop_name',
                    'pd.attributevalue2 as size',
                    'pd.attributevalue1 as color',
                    'pd.product_detail_image'
               )->get();
          $resultArr = [];
          foreach ($productsData as $val) {
               $productId = $val->id;

               if (!isset($resultArr[$productId])) {
                    $resultArr[$productId] = [
                         'product_name'  => $val->product_name,
                         'product_image' => $val->product_image,
                         'selling_price' => $val->selling_price,
                         'category_name' => $val->category_name,
                         'category_sub_name' => $val->category_sub_name,
                         'category_main_name' => $val->category_main_name,
                         'shop_name'     => $val->shop_name,
                         'colors'        => [],
                         'size'          => [],
                         'images'        => [],
                    ];
               }

               if (!in_array($val->color, $resultArr[$productId]['colors'])) {
                    $resultArr[$productId]['colors'][] = $val->color;
               }

               if (!in_array($val->size, $resultArr[$productId]['size'])) {
                    $resultArr[$productId]['size'][] = $val->size;
               }

               if (!in_array($val->product_detail_image, $resultArr[$productId]['images'])) {
                    $resultArr[$productId]['images'][] = $val->product_detail_image;
               }
          }
          if($id != '')
          {
               return $resultArr[$id];
          }else{
               return $resultArr;
          }
         
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

          $prouctsList = $this->getSpecificProduct('');   
        
          return view('frontend/demo_eight', compact('mainslider', 'topCategories','prouctsList'));
     }

     public function productVar()
     {
          return view('frontend/product');
     }

      public function quickView($id)
     {
          return view('frontend/quick_view',compact('id'));
     }

     
}
