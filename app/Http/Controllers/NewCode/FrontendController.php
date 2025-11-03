<?php
namespace App\Http\Controllers\NewCode;

use App\Http\Controllers\Controller;
use App\Models\Banners\mainslider;
use App\Models\Category\CategoryMain;
use App\Models\Category\CategorySub;
use App\Models\Master\Colors\ProductColor;
use App\Models\Products\Products;
use App\Models\Products\ProductsDetails;
use App\Models\vendor\vendorcreate;
use Darryldecode\Cart\Facades\CartFacade as Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FrontendController extends Controller
{
    public function vendorDokenGrid()
    {

        $vendorcreate = vendorcreate::get();
        // dd($vendorcreate);
        return view('frontend/vendor_doken_store_grid', compact('vendorcreate'));
    }

    public function getProductImageList($id)
    {
        $imageList = ProductsDetails::from('products_details as pd')
            ->Where('products_id', $id)
            ->get(['product_detail_image']);
        $imageArr = $img = [];
        $images   = '';
        foreach ($imageList as $val) {
            $imageArr[] = json_decode($val->product_detail_image);
        }

        if (isset($imageArr) && count($imageArr) > 0) {
            foreach ($imageArr as $key => $val) {
                $img[] = isset($val[$key]) ? $val[$key] : '';
            }
        }
        return $img;
    }

    public function vendorDetails($id)
    {

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

        $vendorcreate = vendorcreate::where('user_id', $id)->first();
        $subid        = explode(',', $vendorcreate->sub_category_ids); // This converts to an array

        $Categorysub = CategorySub::whereIn('id', $subid)->get();
        return view('frontend/vendor_doken_store')
            ->with([
                "products"      => $products,
                "Categorysub"   => $Categorysub,
                "vendordetails" => $vendorcreate,
            ]);
    }

    public function vendorDokenStore()
    {
        return view('frontend/vendor_doken_store');
    }

    public function getSpecificProduct($id = '')
    {
        $productsData = Products::from('products as p')
            ->leftJoin('category as c', 'c.id', '=', 'p.category')
            ->leftJoin('category_sub as cs', 'cs.id', '=', 'p.category_sub')
            ->leftJoin('category_main as cm', 'cm.id', '=', 'p.category_main')
            ->leftJoin('products_details as pd', 'pd.products_id', '=', 'p.id')
            ->leftJoin('vendor_details as vp', 'vp.id', '=', 'p.vendor_id');
        if ($id != '') {
            $productsData = $productsData->where('p.id', $id);
        }
        $productsData = $productsData->select(
            'p.id',
            'p.product_name',
            'p.product_image',
            'pd.selling_price',
            'pd.retail_price',
            'c.category_name',
            'cs.category_sub_name',
            'cm.category_main_name',
            'vp.shop_name',
            'vp.profile_image',
            'pd.attributevalue2 as size',
            'pd.attributevalue1 as color',
            'pd.product_detail_image'
        )->get();
        $resultArr = [];
        foreach ($productsData as $val) {
            $productId = $val->id;
            if (! isset($resultArr[$productId])) {
                $resultArr[$productId] = [
                    'id'                 => $val->id,
                    'product_name'       => $val->product_name,
                    'product_image'      => $val->product_image,
                    'selling_price'      => $val->selling_price,
                    'retail_price'       => $val->retail_price,
                    'category_name'      => $val->category_name,
                    'category_sub_name'  => $val->category_sub_name,
                    'category_main_name' => $val->category_main_name,
                    'shop_name'          => $val->shop_name,
                    'profile_image'      => $val->profile_image,
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
        if ($id != '') {
            $productsData = $productsData->where('p.id', $id);
        }
        $productsData = $productsData->select(
            'p.id',
            'p.product_name',
            'p.product_image',
            'pd.selling_price',
            'pd.retail_price',
            'c.category_name',
            'cs.category_sub_name',
            'cm.category_main_name',
            'vp.shop_name',
            'vp.profile_image',
            'pd.attributevalue2 as size',
            'pd.attributevalue1 as color',
            'pd.product_detail_image'
        )->get();
        $resultArr = [];
        foreach ($productsData as $val) {
            $productId = $val->id;

            if (! isset($resultArr[$productId])) {
                $resultArr[$productId] = [
                    'id'                 => $val->id,
                    'product_name'       => $val->product_name,
                    'product_image'      => $val->product_image,
                    'selling_price'      => $val->selling_price,
                    'category_name'      => $val->category_name,
                    'category_sub_name'  => $val->category_sub_name,
                    'category_main_name' => $val->category_main_name,
                    'shop_name'          => $val->shop_name,
                    'profile_image'      => $val->profile_image,
                    'retail_price'       => $val->retail_price,
                    'colors'             => [],
                    'size'               => [],
                    'images'             => [],
                ];
            }

            if (! in_array($val->color, $resultArr[$productId]['colors'])) {
                $color                             = ProductColor::Where('color_name', $val->color)->value('color_code');
                $resultArr[$productId]['colors'][] = isset($color) ? $color : '';
            }

            if (! in_array($val->size, $resultArr[$productId]['size'])) {
                $resultArr[$productId]['size'][] = $val->size;
            }

            if (! in_array($val->product_detail_image, $resultArr[$productId]['images'])) {
                $resultArr[$productId]['images'][] = $val->product_detail_image;
            }
        }
        if ($id != '') {
            return $resultArr[$id];
        } else {
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

        return view('frontend/demo_eight', compact('mainslider', 'topCategories', 'prouctsList'));
    }

    public function productVar($id = '')
    {
        $prouctsList = $this->getProduct($id);
        $imageList   = $this->getProductImageList($id);
        return view('frontend/product', compact('id', 'prouctsList', 'imageList'));
    }

    public function quickView($id)
    {
        $prouctsList = $this->getSpecificProduct($id);
        $imageList   = $this->getProductImageList($id);
        return view('frontend/quick_view', compact('id', 'prouctsList', 'imageList'));
    }

    public function customCart(Request $request)
    {
        $input = $request->all();
        $size  = $input['size'];
        $color = $input['color'];
        $id    = $input['id'];
        $qty   = $input['qty'];
        $prouctsList = $this->getSpecificProduct($id)[$id];       
        $cartArray = array(
            'id'        => $prouctsList['id'],
            'name'      => $prouctsList['product_name'],
            'price'     => $prouctsList['selling_price'],
            'quantity'  => $qty,
            'attributes' => array(
                'image'     => isset($prouctsList['product_image']) ? $prouctsList['product_image']:'',
                'size'      => $size,
                'color'      => $color,
            )
        );
        Cart::add($cartArray);
        $count = Cart::getContent()->count();
        return response()->json([
            'message' => 'Item added to cart successfully.',
            'count'   => $count,
            'cart' => Cart::getContent()
        ]);
    }

    public function categoryShop()
    {
        return view('frontend/category');
    }
}
