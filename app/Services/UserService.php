<?php

namespace App\Services;

use App\Models\User;

class UserService
{

	public function refreshAndGetAverage($id){
		$scores = collect();
		$user = User::find($id);

		foreach( $user->matches as $match ){
			$scores->push($match->pivot->score);
		}

		$user->average = $scores->avg();
		$user->save();

		return number_format($scores->avg(),2);
	}

}