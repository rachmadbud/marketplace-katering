<?php

namespace App\Http\Controllers;

use App\Models\ProfileMerchant;
use Illuminate\Http\Request;

class ProfileMerchantController extends Controller
{
    public function __construct()
    {
        $this->modelProfileMenchart = new ProfileMerchant();
    }

    public function index()
    {
        $dataProfile = $this->modelProfileMenchart->getDataProfile();
        // dd($dataProfile);

        return view('admin.content.profile')
            ->with('dataProfile', $dataProfile);
    }

    public function profilePost(Request $request)
    {
        $stmtDataProfileInput = [
            'id_user' => $request->id_user,
            'nama_perusahaan' => $request->nama_perusahaan,
            'alamat' => $request->alamat,
            'kontak' => $request->kontak,
            'deskripsi' => $request->deskripsi,
        ];

        $stmtProfileInput = $this->modelProfileMenchart->insertDataProfile($stmtDataProfileInput);

        session()->flash('success', 'Data berhasil disimpan!');
        return redirect()->back();
    }

    public function profileUpdate(Request $request, $id)
    {
        $stmtGetDataOld = $this->modelProfileMenchart->getId($id);

        $updateDataProfile = [
            'nama_perusahaan' => $request->nama_perusahaan ?? $stmtGetDataOld->nama_perusahaan,
            'alamat' => $request->alamat ?? $stmtGetDataOld->alamat,
            'kontak' => $request->kontak ?? $stmtGetDataOld->kontak,
            'deskripsi' => $request->deskripsi ?? $stmtGetDataOld->deskripsi,
        ];

        $this->modelProfileMenchart->updateDataProfile($updateDataProfile, $id);

        session()->flash('success', 'Data berhasil di Update!');
        return redirect()->back();
    }
}
