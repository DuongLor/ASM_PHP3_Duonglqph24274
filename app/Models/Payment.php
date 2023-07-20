<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Payment extends Model
{
    use HasFactory, SoftDeletes;
		protected $table = 'payments';
		protected $fillable = [
			'id', 'booking_id', 'status', 'name'
		];

		public function booking(){
			return $this->belongsTo(Booking::class);
		}
}
