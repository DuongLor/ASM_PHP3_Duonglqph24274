<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class RoomImages extends Model
{
    use HasFactory, SoftDeletes;
		protected $table = 'room_images';
		protected $fillable = [
			'id', 'room_id', 'image',
		];
		public function room(){
			return $this->belongsTo(Room::class);
		}
}
