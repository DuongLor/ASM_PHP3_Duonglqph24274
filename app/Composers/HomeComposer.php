<?php

namespace App\Composers;

use App\Models\BannerMaketing;
use App\Models\Type;
use App\Models\Hotel;
use Illuminate\View\View;

class HomeComposer
{
	public function compose(View $view)
	{
		$hotel_slide = Hotel::all()->take(2);
		$type_rooms = Type::all();
		$banner= BannerMaketing::find(1);
		$view->with([
			'hotel_slide' => $hotel_slide,
			'type_rooms' => $type_rooms,
			'banner' => $banner
		]);
	}
}
