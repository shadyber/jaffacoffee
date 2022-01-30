<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Auth;
use Laravel\Sanctum\HasApiTokens;

use App\Permissions\HasPermissionsTrait;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Traits\HasRoles;

class User extends Authenticatable
{

    use HasApiTokens, HasFactory, Notifiable, HasRoles;
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];




    public function comments()
    {
        return $this->hasMany(BlogComment::class);
    }


    public function reviews(){
        return $this->hasMany(Review::class);
    }

    public function blogs()
    {
        return $this->hasMany(Blog::class);
    }

    public function videos()
    {
        return $this->hasMany(Videos::class);
    }
    public function orders()
    {
        return $this->hasMany(Order::class);
    }

    public function role(){
        return $this->belongsTo(Role::class);
    }

    public function isAdmin(){
        $adminrole=Role::all()->first();

        if(!Auth::user()->hasRole($adminrole)){
            return view('error.403')->with(['error'=>'You Dont have a permission to access this page.']);
        }
    }
}
