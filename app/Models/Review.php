<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory;
		protected $table = 'reviews';
		protected $fillable = [
			'id', 'user_id', 'room_id', 'content','rating',
		];
		public function user(){
			return $this->belongsTo(User::class);
		}
		public function room(){
			return $this->belongsTo(Room::class);
		}
}
