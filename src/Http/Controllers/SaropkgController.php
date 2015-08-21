<?php
namespace Saro91\Saropkg\Http\Controllers;

use App\Http\Controllers\Controller;
use App\User;

class SaropkgController extends Controller {


  public function index()
  {
		 $users = User::all();
    
	//return var_dump($users);
		return  view('Saropkg::welcome');
  }
}

?>	
