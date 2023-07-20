<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Service extends Model
{
	use HasFactory, SoftDeletes;
	protected $table = 'services';
	protected $fillable = [
		'id', 'name', 'price'
	];
	public function bookings()
	{
		return $this->belongsToMany(Booking::class, 'service_bookings', 'booking_id', 'service_id');
	}
}
