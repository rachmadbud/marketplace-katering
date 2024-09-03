<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ProfileMerchant extends Model
{
    use HasFactory;

    protected $table = 'profile_menchart';
    protected $fillable = [];

    public function getDataProfile()
    {
        $getDataProfile =  DB::table('profile_menchart')
            ->where('id_user', Auth::user()->id)
            ->first();

        return $getDataProfile;
    }

    public function insertDataProfile($stmtDataProfileInput)
    {
        $stmtInsertDataProfile = DB::table('profile_menchart')
            ->insert($stmtDataProfileInput);

        return $stmtInsertDataProfile;
    }

    public function updateDataProfile($updateDataProfile, $id)
    {
        // return $id;
        $update = DB::table('profile_menchart')
            ->where('id_user', $id)
            ->update($updateDataProfile);

        return $update;
    }

    public function getId($id)
    {
        $stmtDataProfile = DB::table('profile_menchart') // Gantilah 'profile_menchart' dengan nama tabel yang sesuai
            ->where('id_user', $id)
            ->first();

        return $stmtDataProfile;
    }
}
