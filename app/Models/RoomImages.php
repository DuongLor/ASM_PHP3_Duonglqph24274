<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RoomImages extends Model
{
    use HasFactory;
		protected $table = 'room_images';
		protected $fillable = [
			'id', 'room_id', 'image',
		];
		public function room(){
			return $this->belongsTo(Room::class);
		}
}
