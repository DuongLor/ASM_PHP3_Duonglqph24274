<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class HotelImages extends Model
{
    use HasFactory,SoftDeletes;
		protected $table = 'hotel_images';
		protected $fillable = [
			'id', 'hotel_id', 'image',
		];
		public function hotel(){
			return $this->belongsTo(Hotel::class);
		}
}
