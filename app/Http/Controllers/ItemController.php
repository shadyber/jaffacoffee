<?php

namespace App\Http\Controllers;

use App\Models\Item;
use App\Models\User;
use Illuminate\Http\Request;
use Psy\Util\Str;

class ItemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */

    public function __construct()
    {
        $this->middleware(['auth','verified'])->except(['index','show']);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $items=Item::orderBy('id','desc')->paginate(10);
        return view('item.index')->with(['items'=>$items]);


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
User::isAdmin();
        return view('admin.item.create');
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

        User::isAdmin();
    }

    /**
     * Display the specified resource.
     *
     * @param  Str  $slug
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        //
        $item=Item::where('slug',$slug)->get()->last();
return view('item.show')->with(['item'=>$item]);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  Str  $slug
     * @return \Illuminate\Http\Response
     */
    public function edit(Str $slug)
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

        User::isAdmin();
    }
}
