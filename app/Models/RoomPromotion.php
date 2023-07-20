<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class RoomPromotion extends Model
{
    use HasFactory, SoftDeletes;
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
