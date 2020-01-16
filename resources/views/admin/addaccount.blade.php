@extends('admin.layouts.app')
@section('title', 'Add account')
@section('content')
<style type="text/css">
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box}

/* Full-width input fields */
input[type=text], input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}

input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}

/* Set a style for all buttons */
button {
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

button:hover {
  opacity:1;
}

/* Extra styles for the cancel button */
.cancelbtn {
  padding: 14px 20px;
  background-color: #f44336;
}

/* Float cancel and signup buttons and add an equal width */
.cancelbtn, .signupbtn {
  float: left;
  width: 50%;
}

/* Add padding to container elements */
.container {
  padding: 16px;
}

/* Clear floats */
.clearfix::after {
  content: "";
  clear: both;
  display: table;
}

/* Change styles for cancel button and signup button on extra small screens */
@media screen and (max-width: 300px) {
  .cancelbtn, .signupbtn {
     width: 100%;
  }
}
</style>

   
	<form  method="POST" action="{{url('admin/add/addacc')}}" style="border:1px solid #ccc;">
    <!-- {{ csrf_field() }} -->
    <input type="hidden" name="_token" id="csrf-token" value="{{ Session::token() }}" />
	  <div class="container">
	    <h1>Sign Up</h1>
      <div style="background-color: #ff7a7a;text-align: center;">
        <div style="">
          @if(count($errors) > 0 )
          <p style="color: white;padding-top: 10px;padding-bottom: 10px;">
            @foreach($errors->all() as $err)
              {{$err}}<br>
            @endforeach
          </p>
        @endif 
        </div>
      </div>
	    <hr>
	    <label for="email"><b>Name</b></label>
	    <input type="text" placeholder="Enter Name" name="name" required >
	   
	    <label for="email"><b>Email</b></label>
	    <input type="text" placeholder="Enter Email" name="email" required >
	  

	    <label for="psw"><b>Password</b></label>
	    <input type="password" placeholder="Enter Password" name="password" required>

	    <label for="psw-repeat"><b>Repeat Password</b></label>
	    <input type="password" placeholder="Repeat Password" name="passwordagain" required>

	    <label for="role" style="color: red;"><b>Role</b></label><br><br>
	    <input type="radio" name="role" value="user" checked="">&nbsp;User&nbsp;&nbsp;&nbsp;&nbsp;
	    <input type="radio" name="role" value="admin">&nbsp;Admin<br><br>

	    <div class="clearfix">
	      <a href="admin/account"><button type="button" class="cancelbtn">Cancel</button></a>
	      <button type="submit" class="signupbtn">Save</button>
	    </div>
	  </div>
	</form>


@endsection