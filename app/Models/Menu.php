<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class Menu extends Model
{
    use HasFactory;

    protected $table = 'menu';
    protected $fillable = [];

    public function getDataProfile()
    {
        $stsmtDataMenu = DB::table('menu')->where('id_user', Auth::user()->id)->get();

        return $stsmtDataMenu;
    }
}
