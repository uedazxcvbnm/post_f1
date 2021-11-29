<?php
//このController.phpでは、laravelでcontrollerとして動作するために必要なものがimportされるようになっています
namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
//use App\Http\Controllers\Controller;
//use App\Models\User;

//class UserController extends Controller
class Controller extends BaseController{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    /*public function show($id)
    {
        return view('user.profile', [
            'user' => User::findOrFail($id)
        ]);
    }*/
}
