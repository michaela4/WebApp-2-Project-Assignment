<?php

namespace App;
use Carbon\Carbon;

//use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    public function comments(){
    	return $this->hasMany(Comment::class);
    }

    public function user(){
    	return $this->belongsTo(User::class);
    }

	public function scopeFilter($query, $filters){

		if ($month = $filters['month']) {
	            $query->whereMonth('created_at', Carbon::parse($month)->month);
	        }

	    if ($year = $filters['year']) {
	            $query->whereYear('created_at', $year);
	        }
    }
}
