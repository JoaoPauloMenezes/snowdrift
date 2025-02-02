<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SnowBank extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'supplies',
        'description',
        'location_id',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'id',
        'location_id',
        'created_at',
        'updated_at',
    ];

    /**
     * Get the location record associated with the snowBank.
     */
    public function location()
    {
        return $this->belongsTo('App\Models\Location', 'id');
    }
}
