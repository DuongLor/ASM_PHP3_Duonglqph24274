<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Hotel extends Model
{
	use HasFactory, SoftDeletes;
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
