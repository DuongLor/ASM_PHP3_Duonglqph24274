<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RoomPromotion extends Model
{
    use HasFactory;
		protected $table = 'room_promotions';
		protected $fillable = [
			'id', 'room_id', 'promotion_id','discount',
		];
		public function room(){
			return $this->belongsTo(Room::class);
		}
		public function promotion(){
			return $this->belongsTo(Promotion::class);
		}
}
