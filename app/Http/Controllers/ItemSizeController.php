<?php

namespace App\Http\Controllers;

use App\Models\ItemSize;
use Illuminate\Http\Request;

class ItemSizeController extends Controller
{

    function __construct()
    {
        $this->middleware('permission:item-list|item-create|item-edit|item-delete', ['only' => ['index','show']]);
        $this->middleware('permission:item-create', ['only' => ['create','store']]);
        $this->middleware('permission:item-edit', ['only' => ['edit','update']]);
        $this->middleware('permission:item-delete', ['only' => ['destroy']]);
    }



    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * @param  \App\Models\ItemSize  $itemSize
     * @return \Illuminate\Http\Response
     */
    public function show(ItemSize $itemSize)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ItemSize  $itemSize
     * @return \Illuminate\Http\Response
     */
    public function edit(ItemSize $itemSize)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ItemSize  $itemSize
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ItemSize $itemSize)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ItemSize  $itemSize
     * @return \Illuminate\Http\Response
     */
    public function destroy(ItemSize $itemSize)
    {
        //
    }
}
