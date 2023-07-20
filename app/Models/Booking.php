<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Booking extends Model
{
	use HasFactory, SoftDeletes;
	protected $table = 'bookings';
	protected $fillable = [
		'id', 'user_id', 'room_id', 'start_date', 'end_date'
	];

	public function payment()
	{
		return $this->belongsTo(Payment::class);
	}
	public function services()
	{
		return $this->belongsToMany(Service::class, 'service_bookings', 'booking_id', 'service_id');
	}
}
