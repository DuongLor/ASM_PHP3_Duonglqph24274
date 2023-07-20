<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Promotion extends Model
{
    use HasFactory, SoftDeletes;
		protected $table = 'promotions';
		protected $fillable = [
			'id', 'name', 'content', 'start_date', 'end_date',
		];
		public function rooms(){
			return $this->belongsToMany(Room::class,'room_promotions','promotion_id','room_id');
		}
}
