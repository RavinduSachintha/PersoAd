<?php

namespace App\Http\Controllers;

class PagesController extends Controller
{
    /**
     * function for direct to index view
     */
    function index()
    {
        $navVal = 1;
        return view('pages.index')->with('navVal', $navVal);
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

}
