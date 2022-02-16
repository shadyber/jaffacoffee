<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ItemPhotos extends Model
{
    use HasFactory;
    protected $fillable=['title','photo','thumb','item_id'];

    public function item(){
        return $this->belongsTo(Item::class);
    }


}
