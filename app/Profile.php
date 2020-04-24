<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $guarded=[];

    public function profileImage(){
        $imagePath= ($this->image) ?  $this->image : 'profile/Q6OTiBNq6CCVOd9gU7fwmoMWYh4JF1bnxBbZ0t18.png';
        return '/storage/' . $imagePath; 


    }
    public function followers(){
        return $this->belongsToMany(User::class);
    }

    public function user(){

    
    return $this->belongsTo(User::class);
}
     
}
