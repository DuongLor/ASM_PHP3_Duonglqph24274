<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;
		protected $table = 'payments';
		protected $fillable = [
			'id', 'booking_id', 'status', 'name'
		];

		public function booking(){
			return $this->belongsTo(Booking::class);
		}
}
