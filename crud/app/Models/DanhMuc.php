<?php

namespace App\Models;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class DanhMuc extends Model
{
    use HasFactory;
    public function getAll(){
        $danh_mucs = DB::table('danh_mucs')
        ->select('danh_mucs.*', 'danh_mucs.ten_danh_muc')
        ->get();
         return $danh_mucs;
     }
}
