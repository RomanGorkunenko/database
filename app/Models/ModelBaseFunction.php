<?php
namespace App\Models;
use Illuminate\Support\Facades\DB;
class ModelBaseFunction
{
    public function getAllUsers() {
        return DB::table($this->table_name)->get();
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
