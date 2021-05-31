<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Muzaqi;
use Illuminate\Support\Facades\DB;

class MainController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function dashboard(){

    	$t_muzaqi = Muzaqi::count('id');
        $z_uang = Muzaqi::where('type', 0)->sum('z_uang');
        $z_beras = Muzaqi::whereType(1)->sum('z_beras');
        $s_uang = Muzaqi::whereType(0)->sum('s_uang');
        $products = Product::all()->where('jenis', 0)->where('status', 0);
        $productss = Product::all()->where('jenis', 0)->where('status', 1);

        return view('product.dashboard', compact('products', 'productss', 'z_uang', 'z_beras', 's_uang', 't_muzaqi'));
    }

    public function harga(){
        $products = Product::all()->where('jenis', 0)->where('status', 0);
        $productss = Product::all()->where('jenis', 0)->where('status', 1);
        return view('product.harga', compact('products', 'productss'));
    }

    public function index()
    {
    $product = Product::all();
    return view('product.index', compact('product'));   
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
