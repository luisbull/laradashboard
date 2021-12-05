<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
// use Illuminate\Support\Str;

class Curso extends Model
{
    use HasFactory;

        /*  
        Mass Assignment. We can use $fillable if we don't have big numer of names to check
        however if we have to many names to type is better to use $guarded specially if we
        are going to implement admin users.  
        */
    // protected $fillable = ['name', 'description', 'category'];
    protected $guarded = [];

        /*
        IF this function has NOT been implemented inside the controller (usually store function).
        We can implemented here. This function helps to assign $curso->name to $curso->slug when 
        creating new entry. 
        */
    // protected static function boot() {
    //     parent::boot();

    //     static::creating(function ($curso) {
    //         $curso->slug = Str::slug($curso->name); // Need to add at the top:  use Illuminate\Support\Str;
    //     });
    // }

    public function getRouteKeyName()
    {
        return ('slug');
    }
}
