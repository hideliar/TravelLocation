<?php
namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Model\Location;
use App\Model\City;
use Illuminate\Http\Request;


class CityController extends Controller
{
    public function index(Request $request){
      $city = City::select('id', 'title', 'latitude', 'longitude');
      if($request->has('province_id')){
        $city = $city->whereId((int)$request->get('province_id'));   		
        }
        
    	$city = $city->paginate(68);

         return response()->json(['success' => true, 'code' => 'ok', 'data' => $city]);
  }
}