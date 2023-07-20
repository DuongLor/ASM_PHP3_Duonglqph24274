<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Amenity extends Model
{
	use HasFactory, SoftDeletes;
	protected $table = 'amenities';
	protected $fillable = [
		'id', 'name',
	];

	public function rooms(){
		return $this->belongsToMany(Room::class,'room_amenities','amenity_id','room_id');
	}
}
