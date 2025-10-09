<?php

namespace App\Http\Controllers\NewCode;

use App\Http\Controllers\Controller;
use Darryldecode\Cart\Facades\CartFacade as Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class IndexController extends Controller
{

    public function getProduct($id = '', $name = '')

    {
       
        $products = DB::table('products as p')
            ->leftJoin('category as c', 'c.id', '=', 'p.category')
            ->leftJoin('products_details as i', 'i.products_id', '=', 'p.id');
            //->leftJoin('size as s', 's.id', '=', 'p.size_id');
        if ($id > 0 && $id != '') {
            $products = $products->Where('p.id', $id);
        }
        if (urldecode($name) != '' && !empty(urldecode($name))) {
            $products = $products->where('p.product_name', 'like', '%' . urldecode($name) . '%');
        }

        $products = $products->select(['p.*','i.selling_price as price', 'i.product_detail_image as image_path', 'c.category_name'])
            ->get();
        
        
        $recordsArr = $imageArr = $mergedImages = [];
        foreach ($products as $key => $val) {
            $productId = $val->product_id;
            if (!isset($recordsArr[$productId])) {
                $recordsArr[$productId] = get_object_vars($val);
                $recordsArr[$productId]['images'] = [];
            }
            $images = json_decode($val->image_path);
            $imageArr = array_merge($imageArr,$images);           
            $recordsArr[$productId]['images'][] = $imageArr;
        }

        foreach ($recordsArr as $imgArray) {
            $mergedImages =  array_merge($mergedImages, $imgArray);
        }
        $recordsArr['images'] = $mergedImages;       
        return $recordsArr; 
    }




     public function customCart(Request $request)
    {
        $input  =  $request->all();
        //$size   = $input['size'];
        $id     = $input['id'];
        $qty    = $input['qty'];

        $records = $this->getProduct($id, '');
        $row = $records[$id];
        $image = isset($row['image_path']) ? json_decode($row['image_path']) : '';
        $cartArray = array(
            'id'        => $row['id'],
            'name'      => $row['product_name'],
            'price'     => $row['price'],
            'quantity'  => $qty,
            'attributes' => array(
                'image'     => isset($image[0]) ? $image[0]:'',
               // 'size'      => $size,
            )
        );
        Cart::add($cartArray);
        $count = Cart::getTotalQuantity();
        return response()->json([
            'message' => 'Item added to cart successfully.',
            'count'   => $count,
            'cart' => Cart::getContent()
        ]);
    }

    public function getSideCart()
    {
        $count   = Cart::getTotalQuantity();
        $records = Cart::getContent();
        $total   = Cart::getTotal();           
        return view('front_end.site.side_cart', compact('count', 'records', 'total'));
    }

     public function removeCart($id)
    {
        Cart::remove($id);
        return response()->json([
            'message' => 'Item removed successfully.',
            'removed'   => 1,
        ]);
    }


}
