<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StaticPages extends Model
{
    use HasFactory;
protected $fillable=[
'terms_and_conditoion','privacy_policy','refund_policy','shipping_and_order'
];
    public function TermsAndConditions(){
    $terms=StaticPages::all()->last()->terms_and_conditoion;
    return $terms;
    }
    public function PrivacyPolicy(){
    $terms=StaticPages::all()->last()->privacy_policy;
    return $terms;
    }
   public function RefundPolicy(){
    $terms=StaticPages::all()->last()->refund_policy;
    return $terms;
    }

   public function ShippingAndOrder(){
    $terms=StaticPages::all()->last()->shipping_and_order;
    return $terms;
    }
}
