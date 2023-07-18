<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hotel extends Model
{
	use HasFactory;
	protected $table = 'hotels';
	protected $fillable = [
		'id', 'name', 'address', 'stars'
	];
	public function rooms()
	{
		return $this->hasMany(Room::class);
	}
	public function hotelImages()
	{
		return $this->hasMany(HotelImages::class);
	}
}
