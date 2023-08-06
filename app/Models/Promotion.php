<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Promotion extends Model
{
	use HasFactory, SoftDeletes;
	protected $fillable = [
		'id', 'name', 'description', 'price', 'created_at', 'updated_at', 'deleted_at'
	];

	public function room()
	{
		return $this->hasMany(Room::class);
	}
}
