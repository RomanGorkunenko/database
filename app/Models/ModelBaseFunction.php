<?php
namespace App\Models;
use Illuminate\Support\Facades\DB;
class ModelBaseFunction
{
    //private $table_name = 'users';
    public function getAllUsers() {
        //return DB::select('select * from users');
        //return DB::table('users')->get();
        return DB::table($this->table_name)->get();
        //return DB::table($this->table_name)
              //  ->where('id', $id)
                //->where('id','!=', 5)
                //->select('email')
                //->where('id', 'like', 5)
               // ->get();
    }
    
    public function getCountUsers() {
        return DB::table($this->table_name)->count();
    }
    
    public function getId($id) {
        return DB::table($this->table_name)
        ->where('id', $id)
        ->get();
    }
}