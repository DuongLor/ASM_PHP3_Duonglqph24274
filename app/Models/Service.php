<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
	use HasFactory;
	protected $table = 'services';
	protected $fillable = [
		'id', 'name', 'price'
	];
	public function bookings()
	{
		return $this->belongsToMany(Booking::class, 'service_bookings', 'booking_id', 'service_id');
	}
}
