<?php
namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use  App\Model\City;
use Illuminate\Http\Request;
use DB;
use App\Quotation;

class CityController extends Controller
{
    public function index(){
    	 $city = City::paginate(20);
        return view('admin.city.index',['city'=>$city]);
     
    }
    public function destroy($id)
	{      
		$id= (integer)$id;
		$del=City::where('id', $id)->delete();
	    return redirect('admin/city');
	}
	 public function addcity()
    {
    	//echo "ok";die();
       return view('admin.city.addcity');
    }

    public function edit($id){
   		$id= (integer)$id;
    	$getid =City::find($id);

    	$tit=$getid->title;
		$obj = json_decode($tit);
		$til= $obj->{'vi'};

		$des=$getid->description;
		$des = json_decode($des);
		$des= $des->{'vi'};

		$tags=$getid->tags;
		$tags = json_decode($tags);
		$tags= $tags->{'vi'};

		return view('admin.city.editcity', compact(['getid','til','des','tags']));
    }

    public function update(Request $request,$id){
    	$id=(integer)$id;

		$arr1 = array('vi' => $request->description, 'en' => "", 'kr' => "");
		$des=json_encode($arr1);

    	$arr2 = array('vi' => $request->title, 'en' => "", 'kr' => "");
		$til=json_encode($arr2);

		$arr3 = array('vi' => $request->tags, 'en' => "", 'kr' => "");
		$tags=json_encode($arr3);
		$ldate = date('Y-m-d H:i:s');

    	$city= DB::table('cities')->where('id', $id)->update(['region_id' => $request->region_id,'phone'=>$request->phone,'website'=>$request->website,'email'=>$request->email,'title'=> $til,'description'=>$des,'tags'=>$tags,'thumbnail'=>$request->thumbnail,'latitude'=>$request->latitude,'longitude'=>$request->longitude,'last_update'=>$ldate]);
    	
		
    	return redirect('admin/city');
    }
    public function store(Request $request){

		$City = new City();
		$City->region_id=$request->region_id;
		$City->phone=$request->phone;
		$City->website =$request->website;
		$City->email =$request->email;
		$City->thumbnail="http://invietnam-app.com/null";
		$City->last_update=date('Y-m-d%H:i:s');
		
		$arr1 = array('vi' => $request->description, 'en' => "", 'kr' => "");
		$des=json_encode($arr1);
		$City->description=$des;

		$arr2 = array('vi' => $request->title, 'en' => "", 'kr' => "");
		$tit=json_encode($arr2);
		$City->title =$tit;
		$arr3 = array('vi' => $request->tags, 'en' => "", 'kr' => "");
		$tags=json_encode($arr3);
		$City->tags= $tags;
	
		$arr4 = array('vi' => "", 'en' => "", 'kr' => "");
		$ser=json_encode($arr4);
		$City->searchData =$ser;
		$City->latitude =$request->latitude;
		$City->longitude =$request->longitude;

		//dd($City);
		$City->save();
	return redirect('admin/city');

    }
}