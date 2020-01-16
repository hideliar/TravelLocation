<?php
namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Model\Location;
use Illuminate\Http\Request;
use DB;
use App\Quotation;


class LocationController extends Controller
{
    public function index(){
    	$locations = Location::paginate(20);
    	//dd($locations->toArray());
        return view('admin.location.index', ['locations'=>$locations]);
    }
    public function addlocation(){

   		return view('admin.location.addlocation' );
    }

    public function create(){

    }

    public function store(Request $request){
 
   		$Location = new Location();
    	$Location->address =$request->address;
    	$Location->phone =$request->phone;
    	$Location->website =$request->website;
    	$Location->category_id =$request->categoryid;
    	$Location->city_id =$request->cityid;
    	$Location->thumbnail="http://invietnam-app.com/null";
    	$Location->created_at=date('Y-m-d H:i:s');
        $Location->updated_at=date('Y-m-d H:i:s');
    	$arr1 = array('vi' => $request->description, 'en' => "", 'kr' => "");
		$des=json_encode($arr1);
    	$Location->description =$des;
    	$arr2 = array('vi' => $request->title, 'en' => "", 'kr' => "");
		$tit=json_encode($arr2);
    	$Location->title =$tit;
    	$arr3 = array('vi' => "", 'en' => "", 'kr' => "");
		$ser=json_encode($arr3);
    	$Location->searchData =$ser;
    	$Location->latitude =$request->latitude;
    	$Location->longitude =$request->longitude;

    	$Location->save();
    	return redirect('admin/location');

    }


    public function edit($id){
    	$id= (integer)$id;
    	$getid =Location::find($id);
    	$tit=$getid->title;
		$obj = json_decode($tit);
		$til= $obj->{'vi'};

		// $serD=$getid->searchData;
		// $obj = json_decode($serD);
		// $seDt= $obj->{'vi'};

		$des=$getid->description;
		$obj = json_decode($des);
		$descr= $obj->{'vi'}; 

    
		return view('admin.location.editlocation', compact(['getid','til','descr']));
    }

    public function destroy($id)
	{      
		$id= (integer)$id;
		$del=Location::where('id', $id)->delete();
	    return redirect('admin/location');
	}

	public function update(Request $request, $id){
		//echo $id; die();
		$id=(integer)$id;
		$arr1 = array('vi' => $request->description, 'en' => "", 'kr' => "");
		$des=json_encode($arr1);
    	$arr2 = array('vi' => $request->title, 'en' => "", 'kr' => "");
		$til=json_encode($arr2);
		$ldate = date('Y-m-d H:i:s');
		


    	$Location= DB::table('locations')->where('id', $id)->update(['address' => $request->address,'phone'=>$request->phone,'website'=>$request->website,'category_id'=>$request->categoryid,'city_id'=> $request->cityid,'title'=>$til,'description'=>$des,'latitude'=>$request->latitude,'longitude'=>$request->longitude,'updated_at'=>$ldate]);
    	
		return redirect('admin/location');
	}
}