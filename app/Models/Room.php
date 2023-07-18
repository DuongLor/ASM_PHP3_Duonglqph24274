<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    use HasFactory;
		protected $table = 'rooms';
		protected $fillable = [
			'id', 'hotel_id', 'type_id', 'name', 'price',
		];

		public function hotel(){
			return $this->belongsTo(Hotel::class);
		}
		public function type(){
			return $this->belongsTo(Type::class);
		}
		public function bookings(){
			return $this->hasMany(Booking::class);
		}
		public function services(){
			return $this->belongsToMany(Service::class, 'service_bookings', 'booking_id', 'service_id');
		}
		public function amenities(){
			return $this->belongsToMany(Amenity::class, 'room_amenities', 'room_id', 'amenity_id');
		}
		public function roomImages(){
			return $this->hasMany(RoomImage::class);
		}
		public function promotions(){
			return $this->belongsToMany(Promotion::class, 'room_promotions', 'room_id', 'promotion_id');
		}
}
