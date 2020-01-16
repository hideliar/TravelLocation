<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use App\Model\Account;
use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Validator;
use DB;
use App\Quotation;

class HomeController extends Controller
{
    public function index(){
 
    	$hello = "a";
        return view('admin.home.index', compact('hello'));
    }

    public function about(){
    	$hello = "Gioi thieu";
        return view('admin.home.about', compact('hello'));
    }
    public function account(){
        $accounts = Account::paginate(50);
        //dd($account->toArray());

    	return view('admin.home.account',['accounts'=>$accounts]);
    }

    public function destroy($id)
    {      
        $id= (integer)$id;
        $del=Account::where('id', $id)->delete();
        return redirect('admin/account');
    }
  public function addaccount()
    {
       return view('admin.addaccount');
    }

  public function addacc(Request $request)
  {
    $this->Validate($request,[
            'name'=>'min:3|max:30',
            'email'=>'unique:users,email',
            'password'=>'min:3|max:20',
            'passwordagain'=>'same:password'
            
    ]);
    $user = new User();
    $user->name=$request->name;
    $user->email=$request->email;
    $user->password= bcrypt($request->password);
    $user->role=$request->role;
    $user->remember_token=$request->_token;
    //dd($user);
    $user->save();
    return redirect('admin/account');
  }
  public function edit($id){
   // echo $id; die();
    $id= (integer)$id;
    $getid =Account::find($id); 
    return view('admin.editaccount', compact(['getid']));
  }

  public function update(Request $request, $id){
     // 'name'  'email'    'password'    'passwordagain'   'role' 'checkbox'
    $id=(integer)$id;
    $ldate = date('Y-m-d H:i:s');

    $check= (int)$request->checkbox; 
    
    $this->Validate($request,[
            'name'=>'min:3|max:30',
            'password'=>'min:3|max:20',
            'passwordagain'=>'same:password'
            
    ]);
    if ($check) {
       //echo (int)$request->checkbox; die();
       $Account=DB::table('users')->where('id',$id)->update(['name'=>$request->name,'password'=>bcrypt($request->password),'role'=>$request->role,'remember_token'=>$request->_token,'updated_at'=>$ldate]);
    }
    else {
         $Account=DB::table('users')->where('id',$id)->update(['name'=>$request->name,'role'=>$request->role,'remember_token'=>$request->_token,'updated_at'=>$ldate]);
    }
    


      return redirect('admin/account');
  }
}