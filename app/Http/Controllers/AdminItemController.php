<?php

namespace App\Http\Controllers;

use App\Models\Item;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Models\ItemPhotos;
use Cviebrock\EloquentSluggable\Services\SlugService;

use Spatie\Permission\Models\Role;
use Image;
class AdminItemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */

    public function __construct()
    {
        $this->middleware(['auth','verified']);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
User::isAdmin();
           $items=Item::orderBy('id','desc')->paginate(10);
           return view('admin.item.index')->with(['items'=>$items]);


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

        $request->validate([
            'name'=>'required',
            'detail'=>'required',
            'price'=>'required',
            'init_qnt'=>'required',
            'item_roast_type_id'=>'required',
            'item_origion_id'=>'required',
            'photo'=>'required|mimes:jpg,png,jpeg|max:5048',
        ]);



        if($request->hasFile('photo')) {

            $newImageName=uniqid().'_'. $request->_token.'.'.$request->photo->extension();


            $file = $request->file('photo');
            $file_name =$newImageName;
            $destinationPath = 'images/items/';
            $new_img = Image::make($file->getRealPath())->resize(true, true);

// save file with medium quality
            $new_img->save($destinationPath . $file_name, 90);
            $new_img->save($destinationPath.'thumbnile/' . $file_name, 15);

            $request->photo->move(public_path('images/items'),$newImageName);

        }

        $item= Item::create([
                'name'=>$request->input('name'),
                'detail'=>$request->input('detail'),
                'slug'=>SlugService::createSlug(Item::class,'slug',$request->title.$request->_token),
                'photo'=>'/images/items/'.$newImageName,
                'thumb'=>'/images/items/thumbnile/'.$newImageName,
                'tags'=>$request->input('tags'),

                'price'=>$request->input('price'),
                'weight'=>$request->input('weight'),

                'item_origion_id'=>$request->input('item_origion_id'),
                'item_size_id'=>$request->input('item_size_id'),
                'item_roast_type_id'=>$request->input('item_roast_type_id'),
                'user_id'=>Auth::user()->id,
            ]
        );

        $default_photo = new ItemPhotos;
        $default_photo->item_id=$item->id;
        $default_photo->photo='/images/items/'.$newImageName;
        $default_photo->thumb='/images/items/thumbnile/'.$newImageName;
        $default_photo->title=$request->input('name');
        $default_photo->save();
        return redirect()->back()->with('success','Item Created Succusfully!');

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

        User::isAdmin();

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

        User::isAdmin();
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

        User::isAdmin();
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
