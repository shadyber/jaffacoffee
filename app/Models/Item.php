<?php

namespace App\Models;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Item extends Model
{
    use HasFactory;
    use Sluggable;
    use SoftDeletes;

    protected $fillable = ['name', 'slug', 'detail', 'item_origion_id','item_size_id','item_roast_type_id', 'thumb', 'photo', 'color', 'price', 'user_id', 'tags', 'weight', 'init_qnt', 'status', 'badge'];
    protected $dates = ['deleted_at'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function ItemRoastType()
    {
        return $this->belongsTo(ItemRoastType::class,'item_roast_type_id','id');
    }


    public function itemPhotos()
    {
        return $this->hasMany(ItemPhotos::class);
    }


    public function reviews()
    {
        return $this->hasMany(Review::class);
    }


    public static function lastN($n){
        return Item::orderBy('id', 'desc')->take($n)->get();
    }

    public static function popularN($n){
        return Item::orderBy('visit', 'desc')->take($n)->get();
    }


    public function sluggable(): array
    {
        // TODO: Implement sluggable() method.
        return [
            'slug' => ['source' => 'name']
        ];
    }
}
