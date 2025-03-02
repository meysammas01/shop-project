<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function index(Request $request)
    {
   
        $products = null;

        if(isset($request->filter, $request->action))
        {
            $products = $this->findFilter($request?->filter, $request?->action) ?? Product::all();
        }else if($request->has('search'))
        {
            $products = Product::where('title', 'LIKE' ,'%'.$request->input('search') . '%')->get();
        }else{
            $products = Product::all();
        }        

        $categories = Category::withCount('products')->paginate(10);
                        // دریافت دسته‌بندی‌ها
                        $categories = Category::withCount('products')->get();
                       
                        // دریافت محصولات دسته موبایل و تبلت و لپ تاپ
                        $mobileCategory = Category::where('slug', 'موبایل-و-تبلت')->first();
                        $laptopCategory = Category::where('slug', 'کامپیوتر-و-لپ-تاپ')->first();
                        $sportCategory = Category::where('slug', 'تفریحی-و-ورزشی')->first();

                        $mobileProducts = $mobileCategory ? $mobileCategory->products()->get() : [];
                      
                        $laptopProducts = $laptopCategory ? $laptopCategory->products()->get() : [];
                        $sportProducts = $sportCategory ? $sportCategory->products()->get() : [];


        return view('frontend.products.all', compact('products', 'categories','mobileProducts', 'laptopProducts', 'sportProducts'));
    }

    public function show($product_id)
    {
        $product = Product::findOrFail($product_id);

        $simillerProducts = Product::where('category_id', $product->category_id)->take(4)->get();


        return view('frontend.products.show', compact('product', 'simillerProducts'));
    }

    private function findFilter(string $className, string $methodName)
    {
        $baseNamespace = "App\Http\Controllers\Filters\\";

        $className = $baseNamespace . (ucfirst($className) . 'Filter');

        if(!class_exists($className))
        {
            return null;
        }

        $object = new $className;

        if(!method_exists($object, $methodName))
        {
            return null;
        }

        return $object->{$methodName}();
    }
    public function showProducts(Request $request)
    {
        $products = null;

        if(isset($request->filter, $request->action))
        {
            $products = $this->findFilter($request?->filter, $request?->action) ?? Product::all();
        }else if($request->has('search'))
        {
            $products = Product::where('title', 'LIKE' ,'%'.$request->input('search') . '%')->get();
        }else{
            $products = Product::all();
        }   
                           // دریافت دسته‌بندی‌ها
                           $categories = Category::withCount('products')->get();
        return view('frontend.store', compact('products', 'categories'));     
    }
    public function showCategoryProducts($slug)
{
    // پیدا کردن دسته‌بندی بر اساس slug
    $category = Category::where('slug', $slug)->firstOrFail();

    // دریافت محصولات مربوط به این دسته‌بندی
    $products = $category->products()->paginate(12); // با قابلیت صفحه‌بندی

    // ارسال اطلاعات به ویو
    return view('frontend.products.category', compact('category', 'products'));
}

 
}
