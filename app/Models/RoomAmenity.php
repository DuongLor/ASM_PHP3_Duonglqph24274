<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class RoomAmenity extends Model
{
	use HasFactory, SoftDeletes;
	protected $table = 'room_amenities';
	protected $fillable = [
		'id', 'room_id', 'amenity_id',
	];
	public function room()
	{
		return $this->belongsTo(Room::class);
	}
	public function amenity()
	{
		return $this->belongsTo(Amenity::class);
	}
}
