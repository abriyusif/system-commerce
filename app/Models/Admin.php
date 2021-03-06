<?php

namespace App\Models;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\MustVeriyEmail;
use Illuminate\Foundation\Auth\User as Authenticable;

class Admin extends Authenticable
{
    //
    use Notifiable;

    /**
     * The attributes that are mass assignale
     * 
     * @var array 
     */
    protected $fillable = ['name','email','password'];

    /**
     * The attributes that should be hidden for arrays
     * 
     * @var array
     */
    protected $hidden =['password','remember_token'];

    /**
     * The attributes that should be cast to native types.
     * 
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime'
    ];
}
