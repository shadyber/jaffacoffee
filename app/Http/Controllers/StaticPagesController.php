<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\StaticPages;
class StaticPagesController extends Controller
{


    public function show(){
    return view('admin.pages.update')->with('pages',StaticPages::all()->last());
    }

    public function update(Request $request){

$staticpage=StaticPages::all()->last();
         $staticpage->update($request->all());
         return redirect()->back()->with('success','Page updated');

    }
}
