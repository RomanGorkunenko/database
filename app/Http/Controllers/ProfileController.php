<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Users;
class ProfileController extends Controller
{
    public function Action() {
        $id = 20;
        $user_class = new Users();
        $all = $user_class->getAllUsers();
        //dd($all);
        $count = (new Users())->getCountUsers();
        //dd($count);
        $gid = (new Users())->getId($id); 
        //dd($gid);
                return view('users',['count'=>$count, 'gid'=>$gid, 'all'=>$all, 'id'=>$id]);
    }
}
