<?php
namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Model\Location;
use App\Model\City;
use Illuminate\Http\Request;


class LocationController extends Controller
{
    public function index(Request $request){
    	$locations = Location::select('address', 'city_id', 'latitude', 'longitude', 'title', 'tags');
    	//dd($request->get('province_id'));
    	if($request->has('province_id')){
			$locations = $locations->whereCityId((int)$request->get('province_id'));   		
    	}

    	    	if($request->has('keyword')){
			$locations = $locations->where(function($query){

			});   		
    	}

    	$locations = $locations->paginate(10);

         return response()->json(['success' => true, 'code' => 'ok', 'data' => $locations]);
  }
}