<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Scale extends Model
{
	protected $table = 'scale';

	protected $guarded = ['id'];

	public static function getScaleValue($id) {
		$scale_value = [
			1 => [
				'1','2','3','4','5','6','7','8','9','10','11','12','13','14','15','16','17','18','19','20','21','22','23','24','25','26','27','28','29','30','31'
			],
			2 => [
				'Monday',
				'Tuesday',
				'Wednesday',
				'Thursday',
				'Friday',
				'Saturday',
				'Sunday'
			],
		];

		if(isset($scale_value[$id])) {
			return $scale_value[$id];
		}

		if($id == 0) {
			return 'null';
		}
		return 'false';
	}
}
