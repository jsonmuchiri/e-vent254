<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EmailSubscription extends Model
{
    protected $fillable = [
        'emailsubscribe',
    ];

    public function user()
    {
        $this->belongsTo('App\User');
    }
}
