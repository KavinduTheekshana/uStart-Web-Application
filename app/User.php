<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Builder;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function customers(){
        return $this->belongsToMany(Customer::class,'customer_groups','user_id')->withTimestamps();
    }

    public function customer_group_update_user(){
        return $this->belongsTo(User::class,'users','group_status');
    }


    protected static function boot()
    {
        parent::boot();

        static::addGlobalScope('filter', function (Builder $builder) {
            $builder->where('user_type', '=', '1');
        });

    }
}
