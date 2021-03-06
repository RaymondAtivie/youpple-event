<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserInfo extends Model
{
    protected $table = "users_info";
    protected $guarded = ['id'];

    protected $casts = [
        'intrests' => 'array',
        'event_services' => 'array',
        'dPicture' => 'array',
        'featured' => 'boolean',
        'verified' => 'boolean',
    ];


    public function user()
    {
        return $this->belongsTo("App\User", "user_id");
    }

    public function getUserTypeAttribute($value)
    {
        if($value == 'customer'){
            return "Individual";
        }elseif($value == 'provider'){
            return "Business";
        }else{
            return $value;
        }
    }

    public function setUserTypeAttribute($value)
    {
        if($value == 'Individual'){
            $this->attributes['user_type'] = "customer";
        }elseif($value == 'Business'){
            $this->attributes['user_type'] = "provider";
        }else{
            $this->attributes['user_type'] = $value;
        }

    }

    public function getAllProviders($type = "all"){
        $pBuild = $this;

        switch ($type) {
            case 'featured':
            $pBuild = $this->where("featured", true);
            break;

            case 'unfeatured':
            $pBuild = $this->where("featured", false);
            break;

            default:
            break;
        }

        $providers = $pBuild->get();
        $users = [];
        foreach ($providers as $provider) {
            $users[] = $provider->user;
        }

        return $users;
    }
}
