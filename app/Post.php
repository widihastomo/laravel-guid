<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use Helpers\Uuids;

    /**
     * Indicates if the IDs are auto-incrementing.
     *
     * @var bool
     */
    public $incrementing = false;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
    ];

    public function user()
    {
      return $this->belongsTo('App\User');
    }
}
