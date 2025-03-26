<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class State extends Model
{
    protected $fillable = [
        'name',
        'country_id',
        'iso2',
    ];

    public function country()
    {
        return $this->belongsTo(Country::class);
    }
}
