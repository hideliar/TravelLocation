<?php

namespace App\Http\Controllers\Admin;

// use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Category;
use Illuminate\Http\Request;
use DB;
use App\Quotation;

class CategoryController extends Controller
{   
    public function index(){
    	 $category = Category::paginate(15);
    	
        return view('admin.category.index',['category'=>$category]);

    }
    public function destroy($id)
	{      
		$id= (integer)$id;
		$del=Category::where('id', $id)->delete();
	    return redirect('admin/category');
	}

    public function addcategory(){
        //echo "ok"; die();
        return view('admin.category.addcategory');
    }
    public function edit(){
        echo "ok"; die();
        return view('admin.category.editcategory');
    }

    public function store(Request $request){

        $Category= new Category();
       
        $Category->parent_id=$request->parent_id;
        $Category->weight=$request->weight;
        
        $arr1 = array('vi' => $request->description, 'en' => "", 'kr' => "");
        $des=json_encode($arr1);
        $Category->description=$des;

        $arr2 = array('vi' => $request->title, 'en' => "", 'kr' => "");
        $tit=json_encode($arr2);
        $Category->title =$tit;

        $arr3 = array('vi' => $request->tags, 'en' => "", 'kr' => "");
        $tags=json_encode($arr3);
        $Category->tags= $tags;

        $arr4 = array('vi' => $request->searchData, 'en' => "", 'kr' => "");
        $ser=json_encode($arr4);
        $Category->searchData =$ser;
    

        //dd($Category);
        $Category->save();
    return redirect('admin/category');

    }
}
