<?php

namespace App\Http\Controllers;
use App\advertisements;
use App\Category;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendMailable;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    /**
     * function for direct to index view
     */
    public function index()
    {
        $navVal = 1;
        $advertisements =Advertisements::orderBy('id', 'desc')->where('flag' , '1')->where('paid' , 'yes')->get();
        return view('pages.index', compact('advertisements'))->with('navVal', $navVal);
    }

    public function view($id)
    {
    
        $navVal = 3;
        $advertisements = Advertisements::find($id);
        return view('pages.product-details',compact('advertisements'))->with('navVal', $navVal);
    }
    /**
     * function for direct to shop view
     */
    function shop()
    {
        $navVal = 2;
        return view('pages.shop')->with('navVal', $navVal);
    }

    /**
     * function for direct to product-details view
     */
    function product_details()
    {
        $navVal = 3;
        return view('pages.product-details')->with('navVal', $navVal);
    }

    /**
     * function for direct to cart view
     */
    function cart()
    {
        $navVal = 4;
        return view('pages.cart')->with('navVal', $navVal);
    }


    /**
     * function for direct to checkout view
     */
    function checkout()
    {
        $navVal = 5;
        return view('pages.checkout')->with('navVal', $navVal);
    }

    function adds_creating()
    {
        $navVal = 6;
        return view('pages.adds_creating')->with('navVal', $navVal);
    }

    function shop1()
    {
        $navVal = 2;
        return view('pages.search')->with('navVal', $navVal)
        ->with('cat', Category::all())
        ->with('ad', advertisements::all());
    }
    function search(Request $request)
    {
        $navVal = 2;
        return view('pages.searching')->with('navVal', $navVal)
        ->with('ca', $request->input('select'))
        ->with('ad', advertisements::all())
        ->with('cato', Category::all());
    }
}
