<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Candidate extends Model
{
    use HasFactory;

    /**
     * The 'booting' method of the model.
     * 
     * @return void
     */
    protected static function boot()
    {
        parent::boot();

        static::creating(function($query) {
            // Generate Slug
            $query->slug = Str::slug($query->first_name . ' ' . $query->last_name);
        });
    }
}
