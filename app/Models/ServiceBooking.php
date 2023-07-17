<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ServiceBooking extends Model
{
    use HasFactory;
		protected $table = 'service_bookings';
		protected $fillable = [
			'id', 'booking_id', 'service_id',
		];
}
