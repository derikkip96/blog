<?php

namespace App;

use App\User;

use Carbon\Carbon;


class Post extends Model
{
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function comments()
    {

     return $this->hasMany(Comment::class);

    }

    /**
     * @param $body
     */


    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {

     return $this->belongsTo(User::class);
    }

    /**
     * @param $query
     * @param $filters
     */
    public function scopeFilter($query, $filters)
    {
     if (isset($filters['month'])) {
         $query->whereMonth('created_at',Carbon::parse($filters['month'])->month);
     }
     if (isset($filters['year'])) {

         $query->whereYear('created_at',$filters['year']);
     }

    }

    /**
     * @return mixed
     */
    public static  function archives()
    {
     return static::selectRaw('year(created_at) year,monthname(created_at) month, count(*) published')
             ->groupBy('year','month')
             ->orderByRaw('min(created_at) desc')
             ->get()
             ->toArray();
    }
    public function tags()
    {
        return $this->belongsToMany(Tag::class);
    }
}
