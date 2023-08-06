<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Room extends Model
{
	use HasFactory, SoftDeletes;
	protected $table = 'rooms';
	protected $fillable = [
		'id', 'hotel_id', 'type_id', 'name', 'price', 'description','promotion_id',
	];

	public function hotel()
	{
		return $this->belongsTo(Hotel::class);
	}
	public function type()
	{
		return $this->belongsTo(Type::class);
	}
	public function bookings()
	{
		return $this->hasMany(Booking::class);
	}
	public function roomImages()
	{
		return $this->hasMany(RoomImages::class);
	}
	public function promotion()
	{
		return $this->belongsTo(Promotion::class);
	}
}
