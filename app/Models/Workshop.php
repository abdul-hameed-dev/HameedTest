<?php


namespace App\Models;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Date;

class Workshop extends Model
{	
	protected $table = 'workshops';

	protected $fillable = [
        'id','start','end','event_id','name','created_at','updated_at'
    ];

    public function event()
	{
	  return $this->hasOne('App\Models\Event');
	}

}
