<?php

namespace App\Http\Controllers;

use App\Models\Brands;
use App\Models\Category;
use App\Models\HomeVideo;
use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */


    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

        $products = Product::all();
        $categories = Category::all();
        $brands = Brands::all();

        return view('home', compact('products', 'categories', 'brands'));
    }
    public function category($category_slug)
    {
        $categories = Category::where('slug', $category_slug)->first();
        if ($categories) {
            $products = $categories->Products()->get();
            return view('category.category', compact('categories', 'products'));
        } else {
            return redirect()->back();
        }
    }
    public function brands($brand_slug)
    {
        $brands = Brands::where('slug', $brand_slug)->first();
        if ($brands) {
            $products = $brands->Products()->get();
            return view('brands.brands', compact('brands', 'products'));
        } else {
            return redirect()->back();
        }
    }
    public function detailProduct()
    {
        return view('details.product.detail');
    }
}
